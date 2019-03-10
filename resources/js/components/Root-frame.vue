<template>

<div>
    <musicFrame v-bind:currentMusic="currentMusic"></musicFrame>
    <playlist :songs="songs" class="m-5"></playlist>
    <ul>
    </li>
    </ul>
</div>

</template>
<script>
import { bus } from "../app";

import musicFrame from './musicFrame'
import playlist from './playList'
export default {
  name: 'app',
  props: ['songs'],
  components: {
  'musicFrame' : musicFrame,
  'playlist' : playlist
},
  data () {
    return {
      currentMusic : ''
    }
  },
  methods: {
    swapData: function(data) {
     this.currentMusic = data;
    }
  }
}
</script>