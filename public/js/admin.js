let edit = false

Marker.prototype.valid = function () {
    edit = false
    tlp.$tooltip.close()
    this.$marker.setOptions({
        editable: false,
        draggable: false
    })
}

Marker.prototype.edit = function () {
    edit = true
    this.$marker.setOptions({
        editable: true,
        draggable: true
    })
}

Marker.prototype.delete = function () {
    edit = false
    tlp.$tooltip.close()
    this.remove()
}


Zone.prototype.valid = function () {
    edit = false
    tlp.$tooltip.close()
    this.$rectangle.setOptions({
        editable: false,
        draggable: false
    })
}

Zone.prototype.edit = function () {
    edit = true
    this.$rectangle.setOptions({
        editable: true,
        draggable: true
    })
}

Zone.prototype.delete = function () {
    edit = false
    tlp.$tooltip.close()
    this.remove()
}

Map.prototype.addEvent = function () {
    this.$maps.addListener('bounds_changed', throttle(function () {
        if (!edit) {
            getFile(`api/zones`, function (data) {
                data.forEach(zone => {
                    Zone.check(zone)
                })
            })

            getFile(`api/cascades`, function (data) {
                data.forEach(cascade => {
                    Cascade.check(cascade)
                })
            })
        }
    }, 500))
}

map = new Map()
let tlp = new Tooltip()
let drawing = new Drawing()

Cascade.prototype.addEvent = function () {
    this.$marker.addListener('click', () => {
        map.$maps.panTo(this.position)

        tlp.$tooltip.open(map.$maps, this.$marker)
        tlp.$tooltip.content.children[0].value = this

        if (this.new == false) {
            getFile(`api/cascade/${this.cascade.id}/details`, (cascadeInfo) => {
                $app.data().show = true
                $cascade.data().cascade = cascadeInfo
            })
        } else {

        }
    })

    this.$marker.addListener('position_changed', () => {  
        $cascade.data().cascade.lat = this.lat
        $cascade.data().cascade.lng = this.lng
    })
}

Zone.prototype.addEvent = function () {
    this.$rectangle.addListener('click', () => {
        map.$maps.panTo(this.northEast)
        tlp.$tooltip.open(map.$maps, this.$rectangle)
        tlp.$tooltip.content.children[0].value = this
        tlp.$tooltip.setPosition(this.northEast)

        if (this.new == false) {
            getFile(`api/zone/${this.zone.id}`, (zoneInfo) => {
                // $app.data().show = true
                // $cascade.data().cascade = cascadeInfo
            })
        } else {

        }
    })

    this.$rectangle.addListener('bounds_changed', () => {
        tlp.$tooltip.setPosition(this.northEast)
    })
}

document.addEventListener('keydown', function (e) {
    if (document.getElementById('polygone') !== null) {
        var polygone = document.getElementById('polygone').value
        var code = (e.keyCode ? e.keyCode : e.which)
        switch (code) {
            case 13:
                polygone.valid()
                break
            case 8:

            case 46:
                polygone.delete()
                break
            case 32:
                polygone.edit()
                break
        }
    }
    drawing.$drawingManager.setDrawingMode()
})

document.querySelectorAll('.info span').forEach(el => {
    el.onclick = () => {
        clickSpan(el)
    }
})

document.querySelectorAll('strong[checkbox]').forEach(el => {
    var span = document.createElement('span')
    span.classList = 'material-icons edit'
    span.textContent = 'mode_edit'
    span.setAttribute('data-toggle', 'modal')
    span.setAttribute('data-target', '#edit')
    span.onclick = function () {
        let name = this.parentElement.textContent
        name = name.slice(0, name.length - 9).toLowerCase()
        $modal.data().name = name
        getFile(`api/${name}`, (data) => {
            $modal.data().collection = data
        })
    }
    el.appendChild(span)
})

function clickSpan(span) {
    markers.cascades[$cascade.data().cascade.id].valid()
    edit = true    
    var value = span.textContent
    var input = document.createElement('input')

    if (span.dataset.id === 'lat' || span.dataset.id === 'lng') {

        if(span.dataset.id === 'lat') {
            input.dataset.id = 'lat'
        } else if(span.dataset.id === 'lng') {
            input.dataset.id = 'lng'
        }

        input.type = 'number'
        input.oninput = function () {
            let c = markers.cascades[$cascade.data().cascade.id]
            if (input.dataset.id === 'lat') {
                c.$marker.setPosition(new google.maps.LatLng(
                    input.value,
                    c.lng
                ))
            } else if(input.dataset.id === 'lng') {
                c.$marker.setPosition(new google.maps.LatLng(
                    c.lat,
                    input.value
                ))
            }
        }
    }
    input.value = value

    input.addEventListener('blur', function () {
        eventInput(this)
    })
    input.addEventListener('keydown', function (e) {
        if (e.keyCode === 13) {
            this.blur()
        }
    })
    span.parentElement.appendChild(input)
    span.className += ' hidden'

    input.focus()
}

function eventInput(input) {
    if (input.value.length != 0) {
        edit = false
        let span
        if(input.parentElement.children.length < 3) {
            span = input.parentElement.children[0]
        } else {
            span = input.parentElement.children[1]
        }

        let id = span.dataset.id.split('.')
        if(id.length > 1) {
            $cascade.data().cascade[id[0]][id[1]] = input.value
        } else {
            $cascade.data().cascade[id[0]] = input.value
        }

        // updateVille(this.parentElement.firstChild.textContent, this.value)
        input.parentElement.removeChild(input)
        span.className -=  ' hidden'
        
    }
}