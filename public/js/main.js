var markers = {
    cascades: [],
    stations: []
}
let rectangles = []

Array.prototype.remove = function(id) {
    this[id] = null
}

let map = new Map()

/**
 * Get the data from file and call
 * function callback
 * @param {string} file 
 * @param {function} callback 
 */
function getFile(file, callback) {
    fetch(file)
        .then(res => res.json())
        .then(data => callback(data))
        .catch(err => console.log(err))
}

function debounce(callback, delay) {
    let timer
    return function() {
        let args = arguments
        let context = this
        clearTimeout(timer)
        timer = setTimeout(function() {
            callback.apply(context, args)
        }, delay)
    }
}

function throttle(callback, delay) {
    let last
    let timer
    return function() {
        let context = this
        let now = +new Date()
        let args = arguments
        if (last && now < last + delay) {
            // le délai n'est pas écoulé on reset  le timer
            clearTimeout(timer)
            timer = setTimeout(function() {
                last = now
                callback.apply(context, args)
            }, delay)
        } else {
            last = now
            callback.apply(context, args)
        }
    }
}

let ctx = document.getElementById("lineChartTest")
window.lineChartTest = new Chart(ctx, {
    type: 'line',
    data: {
        labels: $cascade.data().graphique.horaires,
        datasets: [{
            "label":"temp\u00e9ratures (en \u00b0C)",
            "backgroundColor":"rgba(38, 185, 154, 0.31)",
            "borderColor":"rgba(38, 185, 154, 0.7)",
            "pointBorderColor":"rgba(38, 185, 154, 0.7)",
            "pointBackgroundColor":"rgba(38, 185, 154, 0.7)",
            "pointHoverBackgroundColor":"#fff",
            "pointHoverBorderColor":"rgba(220,220,220,1)",
            "data": $cascade.data().graphique.temperatures
        }]
    },
})
