
# Desafio - Carrier e-services

![](https://img.shields.io/github/issues/Ursones/carrier-desafio-project.svg) ![](https://img.shields.io/github/forks/Ursones/carrier-desafio-project.svg) ![](https://img.shields.io/github/stars/Ursones/carrier-desafio-project.svg) ![](https://img.shields.io/github/license/Ursones/carrier-desafio-project.svg) ![](https://img.shields.io/twitter/url/https/github.com/Ursones/carrier-desafio-project.svg?style=social)

------------

#### Funcionalidades
Desenvolvido com Laravel 5.8 e Bootstrap, o sistema tem as funcionalidades de CRUD e
àrea de relatórios das informações armazenadas.

#### Requisitos do Servidor
- PHP >= 7.1.3

Obs. Utilize o XAMPP, WAMP ou MAMP para criar um servidor local com as configurações necessárias.

### Instalando e Configurando o Projeto

----

O Laravel utiliza o **Composer** para gerenciar suas dependências. Então, antes de usar o Laravel, certifique-se de ter o **Composer** instalado em sua máquina.

- Versão para Windows [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe "Composer-Setup.exe"), faça o download e instale.
- Outros sistemas operacionais: [Linux / Unix / macOS](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos), siga o passo à passo.


 ----


#### Instalando o Laravel
Baixe o instalador do Laravel usando o Composer pelo terminal/cmd/powershell:
```shell
composer global require laravel/installer
```

----

#### Servidor de Desenvolvimento Local
Após ter feito o processo acima, em seu terminal acesse a pasta onde os arquivos do app se encontram e rode o seguinte comando:
```shell
php artisan serve
```
Esse comando `serve` do artisan, irá iniciar um servidor de desenvolvimento em http://localhost:8000.
Você irá conseguir ver a primeira cara do projeto, mas pera ai que **ainda não acabou!**

----

#### Configurando a Base de Dados
Primeiro você precisa criar o banco de dados e, em seguida, precisamos conectar esse banco de dados ao aplicativo Laravel. Você também pode usar o phpmyadmin para criar o banco de dados (se estiver usando o MySql).
Após criar a sua base de dados, vamos configurá-la no projeto.
Existe um arquivo chamado de `.env.example`, por segurança duplique o arquivo e renomeie um deles para `.env`, é nele que iremos colocar as nossas configurações de servidor.

Abra o arquivo e configure essa parte com as informações do seu server:
```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Sempre que você fizer alterações no arquivo` .env`, não se esqueça de reiniciar o servidor (se você estiver usando o servidor laravel dev) e se você estiver usando um host virtual e as mudanças não tiverem efeito, basta executar o `php artisan config:clear` (este comando irá limpar o cache de configuração) no seu terminal.

----

#### Migrações
Se está tudo configurado corretamente, rode o seguinte comando:
```shell
php artisan migrate
```
Esse comando é responsável por criar as tabela necessárias do projeto no seu banco de dados.
Se você seguiu esses passos até aqui, você já está com o **CRUD** configurado, podendo **Criar**, **Visualizar**, **Atualizar** e **Deletar** usuários.

----

#### Seeds - Abastecendo a base de dados

É muito provável que você tenha notado que não tem usuário nenhum cadastrado... E convenhamos, ficar cadastrando na mão usuário por usuário, é um saco... Por isso eu deixei o **Faker** configurado para gerar 30 usuários aleatórios!
> É isso mesmo! O gerente ficou maluco!

Brincadeiras à parte, mão na massa!
```shell
php artisan migrate:refresh --seed
```
Esse comando `migrate:refresh` do artisan, vai apagar todo o conteúdo da sua base e o
`--seed` vai acionar o **Faker** para povoar a base com os dados falsos...
> E aí fake? ♥

Mais uma vez, eu gostaria de agradecer à [Carriers Transportadora](https://carriers.com.br "Carriers Transportadora") pela oportunidade do desafio!
Se você gostou, ou se ficou alguma dúvida... Me manda um **oi** que a gente bate um papo.


- [Meu Site](https://rafaworks.com.br/ "Meu Site")
- [Instagram](https://www.instagram.com/ursone/ "Instagram")
- [Facebook](http://facebook.com.br/rafaworks "Facebook")
- [LinkedIn](https://www.linkedin.com/in/rafael-eduardo-aa541046/ "LinkedIn")

> Até o próximo projeto! 
> :D
