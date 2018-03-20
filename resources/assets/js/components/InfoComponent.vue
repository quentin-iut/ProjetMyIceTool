<template>
	<div class="info">
		<div class="toggle-button-container">
			<button class="toggle-button" v-on:click="hide"></button>
		</div>
		
		<h1 style="text-align:center;" ><span data-id="nom" class="styleNom">{{ cascade.nom }}</span></h1>
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Informations</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-images-tab" data-toggle="pill" href="#pills-images" role="tab" aria-controls="pills-images" aria-selected="false">Images</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-comments-tab" data-toggle="pill" href="#pills-comments" role="tab" aria-controls="pills-comments" aria-selected="false">Commentaires</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
				<ul>
					<li><strong>Nombre voies: </strong><span data-id="nombre_voies">{{ cascade.nombre_voies}}</span></li>
					<li><strong>Altitude minimum: </strong><span data-id="altitude_minimum">{{ cascade.altitude_minimum }}</span></li>
					<li><strong>Hauteur: </strong><span data-id="hauteur">{{ cascade.hauteur }}</span></li>
					<li><strong>Niveau engagement: </strong><span data-id="niveau_engagement">{{ cascade.niveau_engagement }}</span></li>
					<li><strong>Lat: </strong><span data-id="lat">{{ cascade.lat }}</span></li>
					<li><strong>Lng: </strong><span data-id="lng">{{ cascade.lng }}</span></li>
					<li>
						<strong>temperatures: </strong>
						<a href="#" data-toggle="modal" data-target="#exampleModal">
							Voir les dernières températures
						</a>
					</li>
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
				</ul>
			</div>
			<div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
				<div v-for="image in cascade.images" class="container-images">
					<img v-bind:src="image.url" :alt="image.libelle" class="image-cascade">
				</div>
			</div>
			<div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab">
				<div class="comments">
					<div v-for="commentaire in cascade.commentaires" class="div-comments">
						<img src="/img/user.png" alt="user profile" class="img-comments">
							<p>{{ commentaire.libelle }}</p>
					</div>
				</div>
				<form id="post-comment" v-show="showPostComment">
					<textarea id="message"></textarea>
					<input type="button" value="Envoyer" v-on:click="sendComment">
				</form>
			</div>
		</div>
	</div>
</template>



<script>
var data = {
  cascade: {
    id: 0,
    nom: "entrez une valeur",
    nombre_voies: "entrez une valeur",
    altitude_minimum: "entrez une valeur",
    hauteur: "entrez une valeur",
    niveau_engagement: "entrez une valeur",
    lat: "entrez une valeur",
    lng: "entrez une valeur",
    commentaires: [
      {
        id: 0,
        libelle: "",
        date: ""
      }
    ],
    constituants: [
      {
        id: 0,
        libelle: "selectionnez une valeur"
      }
    ],
    images: [
      {
        id: 0,
        libelle: "",
        date: "",
        url: ""
      }
    ],
    niveau: {
      id: 1,
      libelle: "selectionnez une valeur"
    },
    orientation: {
      id: 0,
      libelle: "selectionnez une valeur"
    },
    pays: {
      id: 0,
      code: "",
      resume: ""
    },
    structure: {
      id: 0,
      libelle: "selectionnez une valeur"
    },
    supports: [
      {
        id: 0,
        libelle: "selectionnez une valeur"
      }
    ],
    type_fin_vie: {
      id: 0,
      libelle: "selectionnez une valeur"
    },
    type_glace: {
      id: 0,
      libelle: "selectionnez une valeur"
    },
    zones: [
      {
        id: 0,
        nom: 0
      }
    ]
  },
	showPostComment: false,
	user_id: 0,
	post: false,
	graphique: {
		temperatures: [],
		horaires: []
	}
};

export default {
  	name: "info",
  	data() {
    	return data;
  	},
  	methods: {
    	hide() {
      	$app.data().show = false;
    	},
			sendComment() {
				const textarea = document.getElementById('message')
				fetch(`api/cascades/${this.cascade.id}/commentaire`, {
					method: 'post',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify({contenu : textarea.value, user_id: this.user_id})
				}).then(res => res.json())
				.then(data => {
					this.cascade.commentaires.push(data)
					textarea.value = ''
					this.post = true
				})
				.catch(err => console.warn(err))
			}
  	},
	mounted() {
		document.querySelector('#pills-info-tab').click();
	},
	async updated() {
		if(this.post) {
			document.querySelector('#pills-comments-tab').click()
			this.post = false
		} else {
			document.querySelector('#pills-info-tab').click();

			if(!this.showPostComment) {
				document.querySelector('.comments').style.height = '728px'
			} else {
				document.querySelector('.comments').style.height = '653px'
			}

			if(this.cascade.zones.length > 0) {
				const RES = await fetch(`/api/zones/${this.cascade.zones[0].id}/releves`)
				let releves = await RES.json()
	
				var arrayTemp = [];
				var arrayHeure = [];
				var arr_jour=new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
				releves.forEach(el => {
					var dateTemp = new Date(el.date)
					var today = new Date(Date.now());
					var jour = (today.getDay() == dateTemp.getDay())?"Aujourdh'ui":arr_jour[dateTemp.getDay()];
					arrayTemp.push(el.temperature_moyenne)
					arrayHeure.push(jour +' à '+ (dateTemp.getHours()+1) +':'+dateTemp.getMinutes())
				})
				this.graphique.temperatures = arrayTemp;
				this.graphique.horaires = arrayHeure;
	
				lineChartTest.data.labels = arrayHeure
				lineChartTest.data.datasets[0].data = arrayTemp
			}
		}
	}
};
</script>
