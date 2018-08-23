<template>
  <div>
    <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          <th v-for="(coluna, index) in colunas" :key="index" scope="col"
            :class="coluna.align"
          >
            <div :class="'t-col' + index">
              <span v-if="index < colunas.length-1" @click="ordenar(index)" class="ord-col">{{ coluna.name }}</span>
              <span v-else>{{ coluna.name }}</span>
              <i v-if="ordemAux == 'asc' && ordColAux == index" class="fas fa-sort-down"></i>
              <i v-if="ordemAux == 'desc' && ordColAux == index" class="fas fa-sort-up"></i>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(reg, index) in itens" :key="index">
          <td v-for="(field, key, itd) in reg" :key="itd" :class="colunas[itd].align">
            <div :class="'t-col' + itd">{{ field }}</div>
          </td>
          <td :class="colunas[colunas.length-1].align">
            <div :class="'t-col' + (colunas.length-1)">
              <a :href="url+'/'+reg.id+'/edit'"><i class="fas fa-edit" title="Editar"></i></a>
              <form :action="url+'/'+reg.id" method="post" class="formulario">
                <input type="hidden" name="_token" :value="token">
                <input type="hidden" name="_method" value="DELETE">
                <i class="fas fa-trash" title="Deletar" @click="deletar(reg.id, reg.razao_social, index)"></i>
              </form>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <input type="search" placeholder="Pesquisar" class="form-control" v-model="pesquisa">
    <a :href="url+'/create'"><button class="btn btn-sm btn-primary">Inserir</button></a>
  </div>
</template>

<script>
  export default {
    props: ['cardWidth', 'colunas', 'regs', 'ordem', 'ordCol', 'url', 'token'],
    data() {
      return {
        pesquisa: '',
        ordemAux: this.ordem || 'asc',
        ordColAux: this.ordCol || 0,
        cardWidthAux: this.cardWidth - this.colunas.length * 12
      }
    },
    methods: {
      deletar(id, nome, index) {
        swal({
          title: 'Tem Certeza?',
          text: nome + " Será Apagado Permanentemente.",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Apagar',
          cancelButtonText: 'Cancelar'
        }).then(result => {
          if (result.value) {
            document.getElementsByClassName('formulario')[index].submit();
          }
        }).catch(err => {
          console.log(err);
        });
      },
      ordenar(index) {
        if (this.ordColAux == index) {
          if (this.ordemAux == 'asc') {
            this.ordemAux = 'desc';
          } else {
            this.ordemAux = 'asc';
          }
        } else {
          this.ordemAux = 'asc';
          this.ordColAux = index;
        }
      },
      estiliza() {
        let soma = 0;
        for (let i = 0; i < this.colunas.length; i++) {
          let tCols = document.getElementsByClassName('t-col'+i);
          soma += this.colunas[i].width * this.cardWidthAux / 100;
          for (let tCol of tCols) {
            tCol.style.width = this.colunas[i].width * this.cardWidthAux / 100 + 'px';
          }
        }
      }
    },
    computed: {
      itens() {
        let regsLocal = this.regs;
        let ordem = this.ordemAux;
        let ordCol = this.ordColAux;
        
        if (ordem == 'asc') {
          regsLocal.sort((a, b) => {
            if (Object.values(a)[ordCol] > Object.values(b)[ordCol]) {
              return 1;
            }
            if (Object.values(a)[ordCol] < Object.values(b)[ordCol]) {
              return -1;
            }
            return 0;
          });
        } else {
          regsLocal.sort((a, b) => {
            if (Object.values(a)[ordCol] < Object.values(b)[ordCol]) {
              return 1;
            }
            if (Object.values(a)[ordCol] > Object.values(b)[ordCol]) {
              return -1;
            }
            return 0;
          });
        }

        return regsLocal.filter(reg => {
          const fields = Object.values(reg);
          for (let i = 0; i < fields.length; i++) {
            if ((fields[i]+'').toLowerCase().indexOf(this.pesquisa.toLowerCase()) >= 0) {
              return true;
            }
          }
          return false; 
        });
      }
    },
    mounted() {
      this.estiliza();
    },
    updated() {
      this.estiliza();
    }
  }
</script>

<style scope lang="scss">
  div {
    .table {
      table-layout: fixed;
      thead {
        display: block;
        overflow-x: hidden;
        .ord-col {
          cursor: pointer;
        }
      }
      tbody {
        display: block;
        max-height: 288px;
        overflow-y: auto;
        overflow-x: hidden;
        .fa-edit {
          &:hover {
            color: blue;
            cursor: pointer;
          }
        }
        .fa-trash {
          &:hover {
            color: red;
            cursor: pointer;
          }
        }
        form {
          display: inline-block;
        }
        a {
          text-decoration: none;
          color: #495057;
        }
        a + form {
          margin-left: 20px;
        }
      }
      tr {
        display: block;
      }
      th, td {
        padding: 6px 6px;
        vertical-align: middle;
      }
    }
    .form-control {
      display: inline-block;
      width: 50%;
    }
    .btn {
      margin-top: 7px;
      float: right;
    }
  }
</style>


