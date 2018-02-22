class Cascade extends Marker {
    constructor() {
        let args
        if (arguments[0] instanceof google.maps.Marker) {
            args = { cascade: arguments[1], marker: arguments[0] }
        } else {
            args = { cascade: arguments[0], marker: arguments[1] }
        }

        if (args.marker === undefined) {
            super(new google.maps.Marker({
                map: map.$maps,
                position: new google.maps.LatLng(
                    args.cascade.lat,
                    args.cascade.lng
                ),
                icon: 'img/marker1_netatmo.png'
            }))
        } else {
            super(args.marker)
        }

        if (args.cascade !== undefined) {
            this.new = false
            this.cascade = args.cascade
            markers.cascades[this.cascade.id] = this
        } else {
            this.new = true
            edit = true
            fetch(`api/cascades`, {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ lat: this.lat, lng: this.lng})
            }).then(res => res.json())
                .then(data => {
                    this.cascade = data
                    markers.cascades[this.cascade.id] = this
                })
        }
        this.addEvent()
    }

    addEvent() {
        this.$marker.addListener('click', () => {
            map.$maps.panTo(this.position)
            if (this.new === false) {
                getFile(`api/cascades/${this.cascade.id}/details`, (cascadeInfo) => {
                    $app.data().showZone = false
                    $app.data().show = true
                    $cascade.data().cascade = cascadeInfo
                })
            }
        })
    }

    remove() {
        this.$marker.setMap()
        markers.cascades.remove(this.cascade.id)
    }

    static check(cascade) {
        let find = markers.cascades[cascade.id] ? true : false
        if (cascade.lat > map.south && cascade.lat < map.north && cascade.lng > map.west && cascade.lng < map.east) {
            if (!find) new Cascade(cascade)
        } else {
            if (find) markers.cascades[cascade.id].remove()
        }
    }
}