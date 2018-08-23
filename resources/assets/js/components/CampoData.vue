<template>
  <div class="campo-data">
    <label :for="nome">{{ label }}</label>
    <input
      type="date"
      class="form-control form-control-sm"
      :name="nome" :id="nome" :value="valor" :required="requerido"
    >
    <span v-if="erro">
      <strong>{{ erro }}</strong>
    </span>
  </div>
</template>

<script>
  export default {
    props: ['label', 'nome', 'valor', 'erro', 'requerido']
  }
</script>

<style scoped lang="scss">
  .campo-data {
    strong {
      font-size: 8px;
      color: red;
    }
  }
</style>
