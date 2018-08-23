<template>
  <div class="selecao">
    <label :for="nome">{{ label }}</label>
    <select class="form-control form-control-sm" :name="nome" :id="nome">
      <option
        v-for="(opcao, index) in opcoes"
        :key="index" :value="opcao.valor" :selected="opcao.valor == valor ? true : false"
      >
        {{ opcao.texto }}
      </option>
    </select>
  </div>
</template>

<script>
  export default {
    props: ['label', 'nome', 'valor', 'opcoes']
  }
</script>

<style scoped lang="scss">

</style>

