class Zone {
    constructor() {
        let args
        if (arguments[0] instanceof google.maps.Rectangle) {
            args = { zone: arguments[1], rectange: arguments[0] }
        } else {
            args = { zone: arguments[0], rectangle: arguments[1] }
        }

        if (args.rectange === undefined) {
            this.$rectangle = new google.maps.Rectangle({
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#FF0000',
                fillOpacity: 0.35,
                map: map.$maps,
                bounds: new google.maps.LatLngBounds(
                    new google.maps.LatLng(args.zone.latSW, args.zone.lngSW),
                    new google.maps.LatLng(args.zone.latNE, args.zone.lngNE)
                )
            })
        } else {
            this.$rectangle = args.rectange
        }

        if (args.zone !== undefined) {
            this.new = false
            this.zone = args.zone
            rectangles[args.zone.id] = this
        } else {
            this.new = true
            getFile(`api/zones/max`, (z) => {
                this.zone = {
                    id: z.id + 1
                }
            })
        }
        this.addEvent()
    }

    get bounds() {
        return this.$rectangle.getBounds()
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

    remove() {
        this.$rectangle.setMap()
        rectangles.remove(this.zone.id)
    }

    addEvent() {
        this.$rectangle.addListener('click', () => {
            map.$maps.panTo(this.northEast)
            if (this.new === false) {
                getFile(`api/zone/${this.zone.id}/details`, (zoneInfo) => {
                    // $app.data().show = true
                    // $cascade.data().cascade = cascadeInfo
                })
            }
        })
    }

    static check(zone) {
        let find = rectangles[zone.id] ? true : false

        if (zone.latSW > map.southWestLat && zone.latNE < map.northEastLat && zone.lngSW > map.southWestLng && zone.lngNE < map.northEastLng) {
            if (!find) new Zone(zone)
        } else {
            if (find) rectangles[zone.id].remove()
        }
    }
}