<template>
	<div class="info">
    	<div>
      		<h1><span data-id="nom">{{ zone.nom }}</span></h1>
			<ul>
                <li><strong>Latitude Nord Est </strong><span data-id="latNE">{{ zone.latNE}}</span></li>
				<li><strong>Longitude Nord Est: </strong><span data-id="lngNE">{{ zone.lngNE }}</span></li>
				<li><strong>Latitude Sud Ouest: </strong><span data-id="latSW">{{ zone.latSW }}</span></li>
				<li><strong>Longitude Sud Ouest: </strong><span data-id="lngSW">{{ zone.lngSW }}</span></li>
			</ul>
    	</div>
    	<div class="toggle-button-container">
      		<button class="toggle-button" v-on:click="hide"></button>
      	</div>
	</div>
</template>



<script>
var data =  {
	zone: {
        id: 0,
        nom: "Entrez une valeur",
        latNE: 0,
        lngNE: 0,
        latSW: 0,
        lngSW: 0
    }
}

export default {
	name: "infoZone",
	data() {
		return data
	},
	methods: {
		hide() {
			$app.data().showZone = false
		}
	}
}
</script>
