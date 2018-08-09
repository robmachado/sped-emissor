# sped-emissor

## OBJETIVO DO PROJETO

*"Criar um emissor ONLINE em PHP exatamente como o EMISSOR gratuito, de modo que os usuários atuais do emissor gratuito possam migrar para esse sem necessidade de REAPRENDER nada."*

## PARÂMETROS INICIAIS DO PROJETO

1. usar LARAVEL 5.6 como framework (isso implica em PHP7+)
2. Toda a interface deve retratar o quanto possível a MESMA do emissor gratuito  
3. Esse emissor não terá a intensão de SIMPLIFICAR nenhuma operação, nem se tornar um ERP !! O foco deve ser o de apenas replicar o EMISSOR GRATUITO, nada mais nada menos. Não queremos competir com nós mesmos. (como resultado desse trabalho as facilidades que serão criadas aqui poderão ser aproveitadas em seus projetos pessoais)
4. TODAS as facilidades do emissor gratuito devem estar presentes.
  - importação de TXT (padrão SEBRAE ou padrão NFePHP)
  - importação de XML
  - duplicação de NFe
  - cancelamento de NFe
  - inutilização de faixa de números
  - gerenciamento de notas emitidas
  - download (exportação) de XML e TXT
  - impressão de DANFE (podemos incluir DACCE, DACANC e DAINUT)
  - (EXTRA) envio de emails aos destinatários

> NOTA: servirá APENAS para NFe modelo 55 (não apto a NFCe)

> NOTA: Todos os testes básicos (sem envios reais) serão feitos com dados FAKE e operações MOKADAS. Após as estruturas estarem finalizadas serão iniciados os testes REAIS e nesse ponto cada colaborador deverá possuir um certificado válido para a realização dos testes em ambiente de homolocação com comunicação com as SEFAZ.

## IMPORTANTE

Leia o auxilio abaixo se for um colaborador do projeto, e não estiver familiarizado com o uso do GIT.

[**USANDO O GIT**](git.md)

# FASES

## FASE 1

> Emissão com projeto base, sem LOGIN, sem TENANT, um único possivel emitente

> FrontEnd SIMPLES com Bootstrap 4, e algumas outras bibliotecas necessárias.

> Evitar o uso de CDN para os CSS e JS, dar preferencia para o Laravel-Mix (desempenho)

> VUE possível (não sou contra apenas não sei usar! ass. Roberto)

> Fundo branco e com cores padrão do bootstrap, SEM TEMAS

> Foco na funcionalidade, base de dados e operação

> Menu SIMPLES superior e FIXO (padrão do Laravel)

> Funcionalidades basicas. 

> - gerenciamento (e busca) de NFe emitidas (com filtros)
> - criação de NFe com digitação manual
> - importação de TXT (carregamento em tela de digitação)
> - importação de XML (carregamento em tela de digitação)
> - envio
> - impressão de DANFE
> - cancelamento
> - carta de correção
> - inutilização de faixa de numeros

## FASE 2

A SER DISCUTIDA com os membros ATIVOS



## DEPENDÊNCIAS (PHP)

> NOTA: para saber para que servem essas dependências acesse os repositórios.

- php >= 7.1
- [brazanation/documents](https://github.com/brazanation/php-documents)
- [fideloper/proxy](https://github.com/fideloper/TrustedProxy)
- [laravel/framework](https://github.com/laravel/framework)
- [laravel/tinker](https://github.com/laravel/tinker)
- [nfephp-org/sped-da](https://github.com/nfephp-org/sped-da)
- [nfephp-org/sped-nfe](https://github.com/nfephp-org/sped-nfe)
- [yajra/laravel-datatables-oracle](https://github.com/yajra/laravel-datatables)
- [yoeunes/toastr](https://github.com/yoeunes/toastr)

### Dev

- [filp/whoops](https://github.com/filp/whoops)
- [fzaninotto/faker](https://github.com/fzaninotto/Faker)
- [mockery/mockery](https://github.com/mockery/mockery)
- [nunomaduro/collision](https://github.com/nunomaduro/collision)
- [phpstan/phpstan](https://github.com/phpstan/phpstan)
- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit)
- [squizlabs/php_codesniffer](https://github.com/squizlabs/PHP_CodeSniffer)

## DEV DEPENDÊNCIAS (JS)

- NodeJS
- npm
- @fortawesome/fontawesome
- @fortawesome/fontawesome-free
- @fortawesome/fontawesome-free-brands
- @fortawesome/fontawesome-free-regular
- @fortawesome/fontawesome-free-solid
- axios
- bootstrap
- cross-env
- datatables.net-autofill-bs4
- datatables.net-bs4
- datatables.net-buttons-bs4
- datatables.net-colreorder-bs4
- datatables.net-editor-bs4
- datatables.net-fixedcolumns-bs4
- datatables.net-fixedheader-bs4
- datatables.net-keytable-bs4
- datatables.net-responsive-bs4
- datatables.net-rowgroup-bs4
- datatables.net-rowreorder-bs4
- datatables.net-scroller-bs4
- datatables.net-select-bs4
- jquery
- jszip
- laravel-mix
- lodash
- pdfmake
- popper.js
- toastr
- vue



