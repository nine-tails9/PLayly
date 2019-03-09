<template>

<div>

    <ul>
      
      <li v-for = "song in songs"><button @click="swapData(song)">{{ song.original_filename }} </button></li>
      
    </ul>
</div>

</template>
<script>
import { bus } from "../app";
export default {
  props: ['songs'],

  data () {
    return {
      currentMusic : ''
    }
  },
  methods: {
    swapData: function(data) {
     this.currentMusic = data;
     bus.$emit('change', data);
    }
  }
}
</script>