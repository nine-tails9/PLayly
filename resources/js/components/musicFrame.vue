<template>
    <div class="container">
        <h2>{{ title }} </h2>
        <audio controls ref="player" autoplay>
            <source preload="auto" :src="currSrc" type = "audio/mp3"></source>
        </audio>
        {{currSrc}}
    </div>
</template>
 
<script>
import { bus } from "../app";

  export default {

    data () {
      return {
        dialog: 1,
        currSrc: '',
        title: ''
      }
    },
    mounted: function () {
        this.$watch('currSrc', () => {
            this.$refs.player.load()
        })
    },
    created(){
        bus.$on('change', (data)=>{
            this.currSrc = '/storage/' + data.filename.split("/")[1];
            this.title = data.original_filename;
        });
    },
    methods:{

    }
    
  }
</script>