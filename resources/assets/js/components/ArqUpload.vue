<template>
  <div class="arq-upload">
    <label :for="nome">{{ label }}</label>
    <input type="file" class="form-control-file form-control-file-sm" :name="nome" :id="nome">
  </div>  
</template>

<script>
  export default {
    props: ['label', 'nome']
  }
</script>

<style scoped>
  .arq-upload {
    overflow: hidden;
  }
</style>
