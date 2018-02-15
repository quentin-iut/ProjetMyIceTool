class Drawing {
    constructor() {
        this.$drawingManager = new google.maps.drawing.DrawingManager({
            drawingControl: true,
            drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_CENTER,
                drawingModes: ['marker', 'rectangle']
            },
            markerOptions: {
                icon: 'img/marker1_netatmo.png',
                editable: true,
                draggable: true
            },
            rectangleOptions: {
                strokeColor: '#000000',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#000000',
                fillOpacity: 0.35,
                editable: true,
                draggable: true
            }
        })

        this.$drawingManager.setMap(map.$maps)
        this.addEvent()   
    }

    addEvent() {
        google.maps.event.addListener(this.$drawingManager, 'overlaycomplete', (event) => {
            switch (event.type) {
                case 'rectangle': {
                        tlp.$tooltip.open(map.$maps, event.overlay)
                        tlp.$tooltip.content.children[0].value = new Zone(event.overlay)
                        break
                    }
                case 'marker': {
                        tlp.$tooltip.open(map.$maps, event.overlay)
                        tlp.$tooltip.content.children[0].value = new Cascade(event.overlay)
                        break
                    }
            }
            this.$drawingManager.setDrawingMode()
        })
    }
}