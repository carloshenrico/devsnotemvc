
## API DEVSNOTES (Sistema de anotações simples)


## O que o projeto precisa fazer?

- Listar as anotações
- Pegar as informações da anotações
- Inserir uma anotação nova
- Atualizar uma anotação
- Deletar uma anotação


## Qual a estrutura de dados?

- note
- -- id
- -- title
- -- body

## Quais os endpoints?

- (METODO) /url (PARAMETROS)

- (GET) / - Listar as anotações
- (GET) /id - Pegar uma anotação
- (POST) / (TITLE, BODY) - Criar uma anotação
- (PUT) /id (TITLE, BODY) - Atualizar uma anotação
- (DELETE) /id - Deletar uma anotação

## Instalação
Você pode clonar este repositório OU baixar o .zip

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.

Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> composer install



Depois é só aguardar.

## Configuração
Todos os arquivos de **configuração** e aplicação estão dentro da pasta *src*.

As configurações de Banco de Dados e URL estão no arquivo *src/Config.php*

É importante configurar corretamente a constante *BASE_DIR*:
> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso
Você deve acessar a pasta *public* do projeto.

O ideal é criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Modelo de MODEL
```php
<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

}
```