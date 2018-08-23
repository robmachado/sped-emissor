@extends('layouts.app') @section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Emitentes</div>
        <div class="card-body">
          <tabela
            :card-width="cardWidth"
            :colunas="[
              {name: '#', align: 'text-center', width: 8},
              {name: 'RAZÃO SOCIAL', align: 'text-left', width: 41},
              {name: 'DOCUMENTO', align: 'text-left', width: 22},
              {name: 'TIPO', align: 'text-center', width: 11},
              {name: 'OPERAÇÕES', align: 'text-center', width: 18}
            ]"
            :regs="{{ json_encode($accounts->toArray()['data']) }}"
            ordem="asc" ord-col="1"
            url="accounts"
            token="{{ csrf_token() }}"
          ></tabela>
        </div>
      </div>
      <div id="paginas">
        {{ $accounts->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
