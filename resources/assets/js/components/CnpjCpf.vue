<template>
  <div class="cnpj-cpf">
    <label :for="nome">
      <div class="form-check form-check-inline">
        <input
          @change="limpaValor"
          class="form-check-input"
          type="radio"
          :name="'r-'+nome" :id="'r-'+nome+'1'" value="CNPJ" :checked="tipoAux == 'CNPJ'"
        >
        <label class="form-check-label" :for="'r-'+nome+'1'">CNPJ</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          @change="limpaValor"
          class="form-check-input"
          type="radio"
          :name="'r-'+nome" :id="'r-'+nome+'2'" value="CPF" :checked="tipoAux == 'CPF'"
        >
        <label class="form-check-label" :for="'r-'+nome+'2'">CPF</label>
      </div>
    </label>
    <input
      @keyup="mascara"
      type="text"
      :maxlength="maxLength"
      class="form-control form-control-sm" :name="nome" :id="nome" v-model="valorCnpjCpf" :required="requerido"
    >
    <span v-if="erro">
      <strong>{{ erro }}</strong>
    </span>
  </div>
</template>

<script>
  export default {
    props: ['nome', 'tipo', 'valor', 'erro', 'requerido'],
    data() {
      return {
        valorCnpjCpf: this.valor,
        maxLength: this.tipo == 'CNPJ' ? 18 : 14,
        tipoAux: this.tipo
      }
    },
    methods: {
      limpaValor() {
        this.tipoAux = this.tipoAux == 'CPF' ? 'CNPJ' : 'CPF';
        this.maxLength = this.tipoAux == 'CPF' ? 14 : 18;
        this.valorCnpjCpf = '';
        document.getElementById(this.nome).focus();
      },
      mascara() {
        console.log(this.valorCnpjCpf);
        if (this.tipoAux == 'CNPJ') {
          //Remove tudo o que não é dígito
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /\D/g , "");
          //Coloca ponto entre o segundo e o terceiro dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /^(\d{2})(\d)/ , "$1.$2");
          //Coloca ponto entre o quinto e o sexto dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /^(\d{2})\.(\d{3})(\d)/ , "$1.$2.$3");
          //Coloca uma barra entre o oitavo e o nono dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /\.(\d{3})(\d)/ , ".$1/$2");
          //Coloca um hífen depois do bloco de quatro dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /(\d{4})(\d)/ , "$1-$2");
        } else {
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /\D/g , "");
          //Coloca um ponto entre o terceiro e o quarto dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /(\d{3})(\d)/ , "$1.$2");
          //Coloca um ponto entre o terceiro e o quarto dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /(\d{3})(\d)/ , "$1.$2");
          //Coloca um hífen entre o terceiro e o quarto dígitos
          this.valorCnpjCpf = this.valorCnpjCpf.replace( /(\d{3})(\d{1,2})$/ , "$1-$2");
        }
      }
    },
    mounted() {
      this.mascara();
    }
  }
</script>

<style scoped lang="scss">
  .cnpj-cpf {
    strong {
      font-size: 8px;
      color: red;
    }
  }
</style>


