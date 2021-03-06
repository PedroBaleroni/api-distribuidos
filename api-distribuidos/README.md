# Autores
- Pedro Baleroni
- Renan Souto

## Data Original de Envio:
-19/11/2021

## Principal Tecnologia:
Lumen (php)

# Inicialização

- Instalação do Lumen:
    ```composer global require "laravel/lumen-installer```

- Configuração de DB:  
    ```php artisan migrate``` 

- Servidor(8000 como porta padrão):
    ```php -S localhost:8000 -t public```



## Funções  ( Método + Url) [? equivale ao id desejado]:

- Criar:
```POST - http://localhost:8000/api/movies/send```
- Listar:
```GET - http://localhost:8000/api/movies/```
- Pesquisar Unico:
```GET - http://localhost:8000/api/movies/?```
- Atualizar:
```PUT - http://localhost:8000/api/movies/update/?```
- Remover:
```DELETE - http://localhost:8000/api/movies/del/?```


## Status
![fa374ea6321e5f34465f22375bd8a301](https://user-images.githubusercontent.com/31959881/142559665-286dfa05-d69f-47c7-9078-c534915a6c08.jpg)

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


