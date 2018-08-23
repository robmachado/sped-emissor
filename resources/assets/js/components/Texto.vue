<template>
  <div class="texto">
    <label :for="nome">{{ label }}</label>
    <input
      type="text"
      class="form-control form-control-sm"
      :name="nome" :id="nome" :value="valor" :maxlength="max" :required="requerido"
    >
    <span v-if="erro">
      <strong>{{ erro }}</strong>
    </span>
  </div>
</template>

<script>
  export default {
    props: ['label', 'nome', 'valor', 'erro', 'max', 'requerido']
  }
</script>

<style scoped lang="scss">
  .texto {
    strong {
      font-size: 8px;
      color: red;
    }
  }
</style>
