<template>
    <div class="container">
    	<Backendheader></Backendheader>
        <p>Dashboard</p>
    </div>
</template>

<script>

  import Backendfooter from "./Backendfooter.vue"
  import Backendheader from "./Backendheader.vue"
  import Backendsidebar from "./Backendsidebar.vue"


    export default {





       components: {
      
          Backendheader,
          Backendsidebar,
          Backendfooter,
        },





        mounted() {
            console.log('Component mounted.')
        }
    }
</script>