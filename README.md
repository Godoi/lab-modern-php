# 🐘 Lab Modern PHP (WSL2 + Docker)

[![CI](https://github.com/godoi/lab-modern-php/actions/workflows/ci.yml/badge.svg)](https://github.com/godoi/lab-modern-php/actions)
[![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen)](build/coverage/)
[![codecov](https://codecov.io/github/godoi/lab-modern-php/branch/main/graph/badge.svg?token=9LE4A4DL4J)](https://codecov.io/github/godoi/lab-modern-php)
[![PHP 8.2](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)](https://www.php.net)
[![Xdebug 3.3](https://img.shields.io/badge/Xdebug-3.3-8C34C2?logo=xdebug)](https://xdebug.org)
[![Nginx](https://img.shields.io/badge/Nginx-1.25+-5EAF4A?logo=nginx&logoColor=white)](https://nginx.org)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql&logoColor=white)](https://dev.mysql.com/doc/refman/8.0/en/)
[![PHPUnit](https://img.shields.io/badge/PHPUnit-10.5-ED4040?logo=phpunit&logoColor=white)](https://phpunit.de)
[![Composer](https://img.shields.io/badge/Composer-2.7+-8C5A8D?logo=composer&logoColor=white)](https://getcomposer.org)

Ambiente de desenvolvimento local **totalmente isolado** para aplicações PHP modernas, otimizado para **WSL2 + Docker Desktop**.

✅ Funciona 100% com:  
- **PHP 8.2-FPM**  
- **Xdebug 3.3** (debug web/CLI + cobertura)  
- **Nginx**  
- **MySQL 8.0**  
- **PHPUnit 10.5** com relatórios de cobertura  
- **Composer 2.7+**

➡️ Ideal para:  
- Estudos de PHP moderno  
- Prototipagem rápida  
- Projetos com Laravel, Symfony, Slim, ou PHP puro

## 🛠️ Pré-requisitos

- ✅ Windows 10/11 com **WSL2** instalado (Ubuntu 22.04+ recomendado)  
- ✅ **Docker Desktop** com **integração ao WSL2 habilitada**  
  > 💡 Dica: evite projetos em `/mnt/c/...` — mantenha tudo dentro do WSL (`/home/user/...`) para melhor performance de I/O.

## 🖼️ Relatório de cobertura (exemplo)

Após rodar os testes, o relatório é gerado em `build/coverage/`:

➡️ Você pode gerar o seu com:
./bin/test --coverage-html build/coverage

## 🚀 Início Rápido
git clone https://github.com/godoi/lab-modern-php.git
cd lab-modern-php

**Suba o ambiente**
docker-compose up -d --build

**Verifique os serviços**
docker-compose ps
→ nginx-app, php-app, mysql-app devem estar "Up"

**Acesse sua aplicação:**
🔗 http://localhost:8080

**✅ Saída esperada no navegador:**  
✅ PHP 8.2.29  
✅ Xdebug 3.3.0  
✅ pdo_mysql  
✅ MySQL: 8.0.39  
🧮 2 + 3 = 5  

## 🧪 Rodar testes e cobertura
**Instale dependências (se ainda não fez)**
docker-compose run --rm cli composer install

**Rode testes**
./bin/test
**ou**
docker-compose run --rm cli ./vendor/bin/phpunit --testdox

**Gere relatório de cobertura**
./bin/test --coverage-html build/coverage

**Abra no navegador (WSL2)**
explorer.exe build/coverage/index.html

