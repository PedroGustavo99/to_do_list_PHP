# To-Do List App

Este é um simples aplicativo de lista de tarefas (To-Do List) desenvolvido em PHP com banco de dados MySQL. O aplicativo permite criar, editar, excluir e marcar tarefas como concluídas.

<img src="./src/img/to_do_list.png" alt="Nome da Imagem" width="850" height="450">

## Pré-requisitos

Antes de começar, certifique-se de ter instalado em sua máquina:
- [XAMPP](https://www.apachefriends.org/index.html) (ou qualquer outro servidor web que suporte PHP e MySQL)
- [MySQL Workbench](https://www.mysql.com/products/workbench/) (ou qualquer outro cliente MySQL)

  ---


## Configuração do Banco de Dados

Para utilizar o aplicativo, é necessário inicializar o banco de dados com a seguinte tabela:

```sql
drop database if exists to_do_list;
create database if not exists to_do_list;

use to_do_list;

CREATE TABLE IF NOT EXISTS task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(50) NOT NULL,
    completed BOOLEAN DEFAULT FALSE
);
```


Você pode executar esses comandos no MySQL Workbench ou qualquer outro cliente MySQL de sua escolha.


## Executando o Aplicativo

1. Inicie o servidor Apache e o MySQL no XAMPP.
2. Clone este repositório para o diretório `htdocs` do seu servidor web (xampp).
3. Navegue até o diretório do aplicativo no seu navegador.
   - http://localhost/nome_do_repositorio
5. Exemplo de comando para clonar o repositório (substitua `URL_do_repositorio` pelo URL real do seu repositório):

   ```bash
   git clone URL_do_repositorio

---

## Funcionalidades

O aplicativo possui as seguintes funcionalidades:

- **Criar Tarefa:** Adicione uma nova tarefa à lista.
- **Editar Tarefa:** Modifique a descrição de uma tarefa existente.
- **Excluir Tarefa:** Remova uma tarefa da lista.
- **Marcar como Concluída:** Marque uma tarefa como concluída, exibindo-a com um risco.

## Em Constante Melhoria

Este projeto está em constante melhoria e novas funcionalidades serão adicionadas no futuro.

