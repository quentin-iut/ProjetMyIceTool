<template>
	<div class="info">
    	<div>
      		<h1><span data-id="nom">{{ cascade.nom }}</span></h1>
			<ul>
				<li><strong>Nombre voies: </strong><span data-id="nombre_voies">{{ cascade.nombre_voies}}</span></li>
				<li><strong>Altitude minimum: </strong><span data-id="altitude_minimum">{{ cascade.altitude_minimum }}</span></li>
				<li><strong>Hauteur: </strong><span data-id="hauteur">{{ cascade.hauteur }}</span></li>
				<li><strong>Niveau engagement: </strong><span data-id="niveau_engagement">{{ cascade.niveau_engagement }}</span></li>
				<li><strong>Lat: </strong><span data-id="lat">{{ cascade.lat }}</span></li>
				<li><strong>Lng: </strong><span data-id="lng">{{ cascade.lng }}</span></li>
				<li><strong>Type de fin de vie: </strong><span data-id="type_fin_vie.libelle">{{ cascade.type_fin_vie.libelle }}</span></li>
				<li><strong>Type de glace: </strong><span data-id="type_glace.libelle">{{ cascade.type_glace.libelle }}</span></li>
				<li><strong>Structure: </strong><span data-id="structure.libelle">{{ cascade.structure.libelle }}</span></li>
				<li><strong>Orientation: </strong><span data-id="orientation.libelle">{{ cascade.orientation.libelle }}</span></li>
				<li><strong>Niveau: </strong><span data-id="niveau.libelle">{{ cascade.niveau.libelle }}</span></li>
				<li>
					<strong checkbox>Constituants</strong>:
					<ul>
						<li v-for="constituant in cascade.constituants">
							{{ constituant.libelle }}
						</li>
					</ul>
				</li>
				<li>
					<strong checkbox>Supports</strong>:
					<ul>
						<li v-for="support in cascade.supports">
							{{ support.libelle }}
						</li>
					</ul>
				</li>
				<li>
					<strong>Images</strong>:
					<ul>
						<li v-for="image in cascade.images">
							<img v-bind:src="image.url" alt="">
						</li>
					</ul>
				</li>
				<li>
					<strong>Commentaires</strong>:
					<ul>
						<li v-for="commentaire in cascade.commentaires">
							{{ commentaire.libelle }}
						</li>
					</ul>
				</li>
			</ul>
    	</div>
    	<div class="toggle-button-container">
      		<button class="toggle-button" v-on:click="hide"></button>
      	</div>
	</div>
</template>



<script>
var data =  {
	cascade: {
		id: 0,
		nom : 'Nom de la cascade',
		nombre_voies: 0,
		altitude_minimum: 0,
		hauteur: 0,
		niveau_engagement: '0',
		lat: 0,
		lng: 0,
		commentaires: [{
			id: 0,
			libelle: '',
			date: ''
		}],
		constituants: [{
			id:0,
			libelle: ''
		}],
		images: [{
			id:0,
			libelle: '',
			date: '',
			url: ''
		}],
		niveau: {
			id: 0,
			libelle: ''
		},
		orientation: {
			id: 0,
			libelle: ''
		},
		pays: {
			id: 0,
			code: '',
			resume: ''
		},
		structure: {
			id: 0,
			libelle: ''
		},
		supports: [{
			id: 0,
			libelle: ''
		}],
		type_fin_vie: {
			id: 0,
			libelle: ''
		},
		type_glace : {
			id: 0,
			libelle: ''
		},
		zones: [{
			id: 0,
			nom: 0
		}]
	}
}

export default {
	name: "info",
	data() {
		return data
	},
	methods: {
		hide() {
			$app.data().show = false
		}
	}
}
</script>
