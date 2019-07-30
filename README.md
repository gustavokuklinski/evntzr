# EVNTZR

Melhore seu evento com a compra de ingressos online e erganize o checkin através de QRCodes.

### Sobre o EVNTZR
O projeto nasceu como forma de estudos do Framework CakePHP e Composer para gerenciar pacotes. A proposta principal
é poder permitir a implementação de venda de ingressos para eventos de pequeno porte online utilizando QRCodes como
forma de ingresso virtual, podendo ser lido por qualquer leitor.

#### Requerimentos
```
git
composer
php >=5.6
mysql
```

#### Scripts
Coleção de ShellScripts para apoio no desenvolvimento:
```
$ ./update.sh
# Chama o '$ composer update' e instala as dependencias necessárias(necessário já ter o composer instalado)

$ ./server.sh
# Chama o '$ ./bin/cake server' e inicia o servidor web imbutido no CakePHP para desenvolvimento

$./migrate-db.sh
# Chama o '$ ./bin/cake migrations migrate' para carregar as migrações no banco de dados
```

#### Config
Criar o arquivo: config/app.php (renomear o: app.default.php)

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

#### Executando
```
$./server.sh
```
Abra no navegador: localhost:8765
