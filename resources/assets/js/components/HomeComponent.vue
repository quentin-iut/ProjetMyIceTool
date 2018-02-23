<template>
  <section>
    <input id="pac-input" class="controls" type="text" placeholder="Entrez une location">
    <div id="map"></div>
    <info v-show="show"></info>
    <infoZone v-show="showZone"></infoZone>
    <modal></modal>
  </section>
</template>



<script>
var data = {
  show: false,
  showZone: false
}

export default {
  data() {
    return data
  }
}
</script>
