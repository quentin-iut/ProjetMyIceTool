class Map {
    constructor() {
        this.$maps = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 46.2,
                lng: 2.2
            },
            zoom: 4,
            zoomControl: true,
            streetViewControl: false,
            fullscreenControl: false
        })
        new Autocompletion(this)
        this.addEvent()
    }

    get bounds() {
        return this.$maps.getBounds()
    }

    get boundsJson() {
        return this.bounds.toJSON()
    }

    get south() {
        return this.boundsJson.south
    }

    get north() {
        return this.boundsJson.north
    }

    get east() {
        return this.boundsJson.east
    }

    get west() {
        return this.boundsJson.west
    }

    get northEast() {
        return this.bounds.getNorthEast()
    }

    get southWest() {
        return this.bounds.getSouthWest()
    }

    get southWestLat() {
        return this.southWest.lat()
    }

    get southWestLng() {
        return this.southWest.lng()
    }

    get northEastLat() {
        return this.northEast.lat()
    }

    get northEastLng() {
        return this.northEast.lng()
    }

    addEvent() {
        this.$maps.addListener('bounds_changed', throttle(function () {
            getFile(`api/zones`, function(data) {
                data.forEach(zone => {
                    Zone.check(zone)
                })
            })

            getFile(`api/cascades`, function(data) {
                data.forEach(cascade => {
                    Cascade.check(cascade)
                })
            })
        }, 500))
    }
}