# EVNTZR
[![Build Status](https://travis-ci.org/gustavokuklinski/evntzr.svg?branch=master)](https://travis-ci.org/gustavokuklinski/evntzr)

Melhore seu evento com a compra de ingressos online e erganize o checkin através de QRCodes.

### Sobre o EVNTZR
O projeto nasceu como forma de estudos do Framework CakePHP e Composer para gerenciar pacotes. A proposta principal
é poder permitir a implementação de venda de ingressos para eventos de pequeno porte online utilizando QRCodes como
forma de ingresso virtual, podendo ser lido por qualquer leitor.

O sistema também já integra uma pequena LandingPage, para caso o cliente não tenha uma página Web, facilitando a implementação
para qualquer tipo de evento.

#### Requerimentos
```
git
composer
php >=5.6
mysql
```
O sistema foi desenvolvido utilizando:
* GNU/Linux Debian Stable(x64)
* PHP 7.3
* MariaDB 15.1 (com MySQL Workbench)
* Composer 1.8.9
* CakePHP 3.8

#### Scripts
Coleção de ShellScripts para apoio no desenvolvimento:
```
$ ./install-composer.sh
# Instala o PHP Composer

$ ./update.sh
# Chama o '$ composer update' e instala as dependencias necessárias(necessário já ter o composer instalado)

$ ./server.sh
# Chama o '$ ./bin/cake server' e inicia o servidor web imbutido no CakePHP para desenvolvimento

$./migrate-db.sh
# Chama o '$ ./bin/cake migrations migrate' para carregar as migrações no banco de dados
```

#### Config
Clone o projeto para sua máquina local ou efetue o Download do ZIP em seguida siga os passos descritos abaixo:

Criar o arquivo: config/app.php (renomear o: app.default.php)
```
$ cp config/app.default.php config/app.php
```

Configure o banco de dados:
```
'Datasources' => [
    'default' => [
        'host' => 'localhost',
        'username' => 'USUARIO_MYSQL',
        'password' => 'SENHA_MYSQL',
        'database' => 'BANCO_DE_DADOS',
        'encoding' => 'utf8mb4',
        'timezone' => 'UTC',
    ]
]
```

Efetue as migrações:
```
$./migrate-db.sh
```

###### Configuração dos Boletos Bancários
Os boletos são emitidos através da Lib: OpenBoleto.
Para configurar a emissão de acordo com o banco do cliente:
```
// Arquivo: src/Controller/ClientsController.php

// Linha: 8
// Configure com o banco adequado
use OpenBoleto\Banco\Itau;

// Linha: 176
// Configure com o banco adequado seguinte as diretrizes da documentação do OpenBoleto
$boleto = new Itau();
```
[Referência do OpenBoleto](https://github.com/openboleto/openboleto)

ATENÇÃO: É necessário entrar em contato com o respectivo banco sobre as informações de emissão de boletos registrados.

#### Executando
```
$./server.sh
```
Abra no navegador: localhost:8765

#### Screenshots
Landing Page
![1](https://github.com/gustavokuklinski/evntzr/raw/master/webroot/img/evntzr-img1.png)

Login
![2](https://github.com/gustavokuklinski/evntzr/raw/master/webroot/img/evntzr-img2.png)

Administrador
![3](https://github.com/gustavokuklinski/evntzr/raw/master/webroot/img/evntzr-img3.png)
