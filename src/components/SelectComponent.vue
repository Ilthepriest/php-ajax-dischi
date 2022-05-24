<template>
  <select class="form-select w-25"
   aria-label="Default select example"
   :value="genreSelected"
   @input="$emit('input', $event.target.value)"
   @change="$emit('selectGenere')">

        <option value="" selected>Seleziona Genere</option>
        <option v-for="(disc, index) in discs" :key="index" >{{disc.genre}}</option>
    </select>
</template>

<script>
import axios from "axios";
export default {
    nome: 'SiteSelect',
    props:{
        genreSelected: String
    },
     data() {
    return {
      link: "http://localhost:8888/php-ajax-dischi/src/components/db_genere.php",
      discs: null  
    };
  },
     mounted() {
    console.log(axios);
    axios
      .get(this.link)
      .then((response) => {
        this.discs = response.data;
        this.loader = false;
      })
      .catch((error) => {
        console.log(error);
        this.error = `Scusa c'è un errore ${this.error}`
      });
  },
}
</script>

<style lang="scss" scoped>

</style>