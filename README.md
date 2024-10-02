# Api cadastro de clientes 

<img src="[https://github.com/kleitonADS/](https://github.com/kleitonADS/ClienteApiPHPReactJS/blob/main/img.png)"  width="500px" alt="Screenshot Profile" />

## Tecnologias
- PHP Laravel
- MySQL
- React.js
- Tailwind CSS

## Instalação

1. Clone o repositório:
   ```bash
   git clone <URL do repositório>
   cd ClienteApiPHPReactJS

# Backend em Laravel 11
2. Instale as dependências:
    composer install

3.Criar o banco de dados:    
  CREATE DATABASE Seu banco de dados;

4. Configure o arquivo .env com suas credenciais do MySQL. 

5. Execute as migrations e seeders:
    php artisan migrate
    php artisan db:seed

6.Inicie o servidor: BackEnd
    php artisan serve

# Frontend em ReactJS
1. Navegue até o diretório do frontend: /clientes-app
2. Instale as dependências:
    npm install
3.Inicie o aplicativo React:
    npm start

# Acessos
API: http://localhost:8000/api
Frontend: http://localhost:3000

DDL (Data Definition Language) para criar as tabelas do seu banco de dados: Caso Necessário

-- Tabela de Estados
CREATE TABLE states (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uf VARCHAR(2) NOT NULL,
    name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de Cidades
CREATE TABLE cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    state_id INT NOT NULL,
    city_id VARCHAR(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (state_id) REFERENCES states(id) ON DELETE CASCADE
);

-- Tabela de Clientes
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    birthdate DATE NOT NULL,
    gender ENUM('Masculino', 'Feminino') NOT NULL,
    address VARCHAR(255) NOT NULL,
    city_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (city_id) REFERENCES cities(id) ON DELETE CASCADE
);



# Rotas API

Get - http://127.0.0.1:8000/api/clientes (List Clientes)
Delete - http://127.0.0.1:8000/api/clientes/(id) ( Delete Cliente)
Put - http://127.0.0.1:8000/api/clientes/23 ( Update Cliente )
Post - http://127.0.0.1:8000/api/clientes/23 ( Save Cliente )

Get - http://127.0.0.1:8000/api/cidades (List Cidades)
Get - http://127.0.0.1:8000/api/estados (List Estados)




 
