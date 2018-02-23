class Marker {
    constructor(marker) {
        this.$marker = marker
    }

    get position() {
        return this.$marker.getPosition()
    }

    get lat() {
        return this.position.lat()
    }

    get lng() {
        return this.position.lng()
    }

}