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

> - gerenciamento (e busca)
> - digitação manual de NFe
> - importação de TXT
> - importação de XML
> - envio
> - impressão de DANFE
> - cancelamento
> - carta de correção
> - inutilização de faixa de numeros

## FASE 2

A SER DISCUTIDA com os membros ATIVOS
