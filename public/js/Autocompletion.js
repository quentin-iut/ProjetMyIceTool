class Autocompletion {
    constructor(map) {
        var $input = document.getElementById('pac-input')
            //map.$maps.controls[google.maps.ControlPosition.TOP_LEFT].push($input)

        this.$autocomplete = new google.maps.places.Autocomplete($input)
        this.$autocomplete.bindTo('bounds', map.$maps)

        this.addEvent()
    }

    addEvent() {
        this.$autocomplete.addListener('place_changed', () => {
            let place = this.$autocomplete.getPlace()

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.$maps.fitBounds(place.geometry.viewport)
            } else {
                map.$maps.setCenter(place.geometry.location)
                map.$maps.setZoom(15)
            }
        })
    }
}