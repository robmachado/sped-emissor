@extends('layouts.app') @section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Emitente</div>
        <div class="card-body">
          <form action="{{ url('accounts/' . $account->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <div class="col-lg-6">
                <texto
                  label="RAZÃO SOCIAL"
                  nome="razao-social"
                  valor="{{ $account->razao_social }}"
                  erro="{{ $errors->has('razao-social') ? $errors->first('razao-social') : '' }}"
                  max="60"
                  :requerido="true"
                >
                </texto>
              </div>
              <div class="col-lg-6">
                <texto
                  label="NOME FANTASIA"
                  nome="nome-fantasia"
                  valor="{{ $account->nome_fantasia }}"
                  erro="{{ $errors->has('nome-fantasia') ? $errors->first('nome-fantasia') : '' }}"
                  max="60"
                >
                </texto>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-4">
                <cnpj-cpf
                  nome="cnpj-cpf"
                  tipo="{{ $account->documento_tipo }}"
                  valor="{{ $account->documento }}"
                  erro="{{ $errors->has('cnpj-cpf') ? $errors->first('cnpj-cpf') : '' }}"
                  :requerido="true"
                ></cnpj-cpf>
              </div>
              <div class="col-lg-4">
                <texto
                  label="IE"
                  nome="ie"
                  valor="{{ $account->ie }}"
                  erro="{{ $errors->has('ie') ? $errors->first('ie') : '' }}"
                  max="15"
                >
                </texto>
              </div>
              <div class="col-lg-4">
                <texto
                  label="IE ST"
                  nome="iest"
                  valor="{{ $account->iest }}"
                  erro="{{ $errors->has('iest') ? $errors->first('iest') : '' }}"
                  max="15"
                >
                </texto>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-4">
                <texto
                  label="INSCRIÇÃO MUNICIPAL"
                  nome="im"
                  valor="{{ $account->im }}"
                  erro="{{ $errors->has('im') ? $errors->first('im') : '' }}"
                  max="30"
                >
                </texto>
              </div>
              <div class="col-lg-4">
                <texto
                  label="CNAE"
                  nome="cnae"
                  valor="{{ $account->cnae }}"
                  erro="{{ $errors->has('cnae') ? $errors->first('cnae') : '' }}"
                  max="10"
                >
                </texto>
              </div>
              <div class="col-lg-4">
                <selecao
                  label="CRT"
                  nome="crt"
                  valor="{{ $account->crt }}"
                  :opcoes="[
                    {valor: 1, texto: '1 - Simples Nacional'},
                    {valor: 2, texto: '2 - Simples Nacional, excesso sublimite de receita bruta'},
                    {valor: 3, texto: '3 - Regime Normal'}
                  ]"
                >
                </selecao>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <arq-upload
                  label="CERTIFICADO (.pfx)"
                  nome="certificado"
                >
                </arq-upload>
              </div>
              <div class="col-lg-3">
                <texto
                  label="SENHA CERTIFICADO"
                  nome="senha"
                  valor="{{ $account->senha }}"
                  erro="{{ $errors->has('senha') ? $errors->first('senha') : '' }}"
                  max="256"
                >
                </texto>
              </div>
              <div class="col-lg-3">
                <campo-data
                  label="VALIDADE CERTIFICADO"
                  nome="validade"
                  valor="{{ $account->certificado_validade }}"
                  erro="{{ $errors->has('validade') ? $errors->first('validade') : '' }}"
                >
                </campo-data>
              </div>
              <div class="col-lg-3">
                <arq-upload
                  label="LOGO"
                  nome="logo"
                >
                </arq-upload>
              </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Gravar</button>
            <button type="reset" class="btn btn-sm btn-primary">Limpar</button>
            <a href="{{ url('accounts') }}"><button type="button" class="btn btn-sm btn-primary">Voltar</button></a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
