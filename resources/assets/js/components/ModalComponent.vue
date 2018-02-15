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
                                <input type="checkbox" name="data" v-bind:value="d.id" :checked="check(d.id)"> {{ d.libelle}}
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" v-on:click="updateData()">Modifier</button>
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
        });
        return find;
      }
    },
    updateData() {
        this.getChecked()
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
        return inputs.map(el => {
            return el.value
        })
    }
  }
};
</script>
