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
git clone git@github.com:&lt;seu user no git&gt;/sped-emissor.git
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
