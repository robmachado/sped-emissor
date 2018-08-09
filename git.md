# Usando o GIT

1. Crie uma conta do GitHUB (se ainda não tiver uma), coloque uma chave ssh para facilitar seu acesso
2. Faça um fork do projeto para um repositório seu
3. Instale o Git na sua maquina de desenvolvimento
4. vá para o terminal e mova-se para a pasta onde o projeto será desenvolvido
```
cd /sua pasta de desenvolvimento/
```

5. faça um clone local do seu repositório
```
git clone git@github.com:<seu user no git>/sped-emissor.git
```

6. mova-se para dentro da pasta que acabou de criar
```
cd sped-emissor
```

7. crie uma referencia ao repositório principal
```
git remote add upstream git@github.com:nfephp-org/sped-emissor.git
```

8. atualise seu repositorio local com seu original do github
```
git fetch upstream
```

9. atualize o repositório principal (local)
```
git fetch upstream
```

10. mergeie o principal com o seu local
```
git merge upstream/master
```

11. sincronize o seu repositorio no github
```
git push origin master
```


Os passos de 8 a 11 devem ser repetidos cada vez que você for codar e antes de você começar.
Isso manterá sua cópia local sempre sincronizada com o repositório principal e estará recebendo todas as atualizações feitas por outros colaboradores.


## Como submeter codigo

1. Antes de enviar qualuqer codigo, execute no terminal
```
composer phpcbf
```
```
composer phpcs
```
Se algum erro for relatado você deve corrigi-lo. Esse processo faz com que os codigos dentro da pasta app atendam ao PSR-2.


2. Evite enviar muitas alterações de cada vez. E atenha-se ao que você se propos a fazer e declarou na ISSUE

3. Sempre teste seu trabalho antes de enviar!

4. Testes unitários são muito bem vindos (mas não são obrigatórios)
