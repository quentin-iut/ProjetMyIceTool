<template>
  <!-- Modal -->
    <div id="edit" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modifications des {{ name }}</h4>
                </div>
                <form>
                    <div class="modal-body">
                        Sélectionnez les {{ name }} :
                        <ul>
                            <li v-for="d in collection">
                                <input type="checkbox" name="data" v-bind:value="d.id" :checked="check(d.id)" ref="inputs"> {{ d.libelle}}
                                <input type="number" v-if="name === 'constituants'">
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" name="modifier" v-on:click="updateData()">Modifier</button>
                        <button type="button" class="btn btn-error" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>


<script>
var data = {
  name: "",
  collection: [
    {
      id: 0,
      libelle: ""
    }
  ]
};

export default {
	name: "modal",
  	data() {
	    return data;
  	},
  	methods: {
	    check(id) {
			if (typeof $cascade !== "undefined") {
				find = false;
				$cascade.data().cascade[this.name].forEach(el => {
					if (el.id === id) {
						find = true;
					}
				})
				return find
			}
		},
		updateData() {
			if(this.name === 'constituants') {
				if(this.required()) return
			}
			axios.post(`api/cascade/${$cascade.data().cascade.id}/${this.name}/update`, {
			body: this.getChecked()
			})
			.then(res => {
				if(res.data.success) {
					axios.get(`api/cascade/${$cascade.data().cascade.id}/details`)
					.then(res => $cascade.data().cascade = res.data)
				}
			})
			.catch(e => console.error(e));
		},
		getChecked() {
			let inputs = Array.prototype.slice.call(document.querySelectorAll('input[type="checkbox"]:checked'))
			if(this.name === 'constituants') {
				return inputs.map(el => {
					return {id: el.value, poids: el.nextElementSibling.value}
				})
			} else {
				let inputs = Array.prototype.slice.call(document.querySelectorAll('input[type="checkbox"]:checked'))
				return inputs.map(el => {
					return el.value
				})
			}
		},
		required() {
			let inputs = Array.prototype.slice.call(document.querySelectorAll('input[type="checkbox"]:checked'))
			let error = false
			let total = 0
			inputs.forEach(el => {
				let inputPoids = el.nextElementSibling
				let spanError = document.createElement('span')
				spanError.textContent = 'Veuillez remplir ce champs !'
			
				if(inputPoids.value === '') {
					if(inputPoids.nextElementSibling === null) {
						inputPoids.after(spanError)
					}
					error = true
				} else {
					total += inputPoids.value
					if(inputPoids.nextElementSibling !== null) {
						inputPoids.nextElementSibling.remove()
					}
				}
			})
			if(error) {
				inputs[0].form.modifier.dataset.dismiss = ''
			} else {
				inputs[0].form.modifier.dataset.dismiss = 'modal'
				console.log(total)
				if(total < 100) {
					this.$refs.inputs.forEach(el => {
						if(el.nextSimbling === 'autres') {
							el.nextElementSibling.value = 100 - total
						}
					})
				} else if(total > 100) {
					let errorPoids = document.createElement('span')
					errorPoids.textContent = 'Le poids de tous les éléments dépasse 100%'
					inputs[0].form.modifier.before(errorPoids)
					inputs[0].form.modifier.dataset.dismiss = ''
				}
			}
			return error
		}
	},
	checkPoids() {
		let inputs = Array.prototype.slice.call(document.querySelectorAll('input[type="checkbox"]:checked'))
		let total = 0
		inputs.forEach(el => {
			let inputPoids = el.nextElementSibling
			total += parseFloat(inputPoids.value)
		})
		if(total < 100) {
			this.$refs.inputs.forEach(el => {
				if(el.nextSimbling === 'autres') {
					el.nextElementSibling.value = 100 - total
				}
			})
		} else if(total > 100) {
			let errorPoids = document.createElement('span')
			errorPoids.textContent = 'Le poids de tous les éléments dépasse 100%'
			inputs[0].form.modifier.before(errorPoids)
			inputs[0].form.modifier.dataset.dismiss = ''
		} else {
			inputs[0].form.modifier.dataset.dismiss = 'modal'
		}
	},
	updated() {
		this.$refs.inputs.forEach(el => {
			if(el.nextSimbling === 'autres') {
				el.disabled = true
				el.nextElementSibling.readOnly = true
			}
		})
	}
}
</script>
