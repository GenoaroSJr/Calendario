# Challenge - Strategy

## Esse projeto
Nos últimos meses tenho me aprofundado na linuagem PHP, dessa forma, com o intuíto de práticar o que tenho aprendido, criei este projetinho. 


## O que esperar do projeto?
O básico! A itenção não é dar passos maiores que minhas pernas, mas treinar alguns conceitos primarios do PHP, do laravel, criação de migrations, request API, front-end (html, css, js, bootstrap). 

Meu dia a dia tem sido "badalado", cedo, tarde e noite tendo que lidar com estudos e trabalho, então decidi me organizar melhor!!
No sistema desenvolvido é possível criar eventos definindo hora de início e fim, data, e descrição (por hora é possível apenas criar e deleta-los).

Na tela inicial da aplicação é possível ver a hora local, assim como a data, o fuso horário, a cidade e as condições climáticas de onde o usuário está acessando o site. Isso é possível pois há uma integração com algumas API's, como:
* Google transalate: irá traduzir o clima (originalmente em inglês);
* Weather: Irá verificar as confdições climáticas da cidade;
* Ip Location: Verificar a localização do usuário através do IP de sua conxão.

Os dados do evento são salvos em um banco de dados. Na listagem, uma consulta é feita no banco e, após uma comparação com o dia atual, uma lista é retornada. Se for o caso, uma frase irá indicar para o usuário que não há evetos para aquele dia.

# Etapas para rodar o projeto:

## Clone o projeto
```sh
# Para clonar o projeto
git clone: https://github.com/GenoaroSJr/Calendario.git

```

## Instale as Dependencias
```sh
# Vá até a pasta raiz
cd Calendario

# Rode
composer install
```

## Altere o .env.example
>Na pasta raiz do projeto, altere o nome do arqivo .env.example para .env


## Configurando o .env
```sh
private $host = 'your host name';
private $user = 'your user';
private $pass = 'your password';
private $dbname = 'projetoCalendario';

# Rode as migrations
php artisan migration

# Show!! O banco está configurado!
```

## API's
No site https://rapidapi.com/, inscreva-se nas seguintes API's.
* https://rapidapi.com/ai-box-ai-box-default/api/ip-location5
* https://rapidapi.com/googlecloud/api/google-translate1
* https://rapidapi.com/weatherbit/api/weather


## Defina sua "Secret Key"
Em .env, para variável API_KEY (primeira linha), cole sua API Key (Disponibilizada pelo site Rapidapi).

## Rode o projeto
```sh
# Na pasta raiz da aplicação, rode o comando:
php artisan serve
```
### Pronto, agora é só se organizar!
```sh
# Obrigado por ter chegado até aqui! 
```

