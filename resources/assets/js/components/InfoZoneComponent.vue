<template>
	<div class="info">
    	<div class="toggle-button-container">
      		<button class="toggle-button" v-on:click="hide"></button>
      	</div>
		<div class="toggle-button-container-mobile">
			<a class="toggle-button-mobile" v-on:click="hide">← Retour</a>
		</div>
    	<div>
      		<h1><span data-id="nom" class="styleNom">{{ zone.nom }}</span></h1>
			<div class="container-details-zone">
                <p><strong>Latitude Nord Est </strong><span data-id="latNE">{{ zone.latNE}}</span></p>
				<p><strong>Longitude Nord Est: </strong><span data-id="lngNE">{{ zone.lngNE }}</span></p>
				<p><strong>Latitude Sud Ouest: </strong><span data-id="latSW">{{ zone.latSW }}</span></p>
				<p><strong>Longitude Sud Ouest: </strong><span data-id="lngSW">{{ zone.lngSW }}</span></p>
			</div>
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
