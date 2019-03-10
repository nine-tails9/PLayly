<template>

<div>
  <div class="container">
    <h5>Currrent Library</h5>
    <div class="row">
      <div class="col-4" v-for = "song in songs">
      <div :class="{'bg-secondary': song.id==currentMusic}">
      <div class="card-body">
        <h5 class="card-title">{{ song.original_filename }}</h5>
        <button @click="swapData(song)" class="btn btn-primary">
          Play
        </button>
      </div>
      </div>
  
      </div>
      </div>
  </div>
</div>

</template>
<script>
import { bus } from "../app";
export default {
  props: ['songs'],

  data () {
    return {
      currentMusic : '',

    }
  },
  methods: {
    swapData: function(data) {
     this.currentMusic = data;
     this.currentMusic = data.id;
     bus.$emit('change', data);
    }
  },
  created(){
        bus.$on('end', ()=>{
            this.swapData(this.songs[Math.floor(Math.random()*this.songs.length)]);
        });
    }
}
</script>