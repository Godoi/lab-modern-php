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

> 🧪 Este é um **template de projeto**. Use-o como base para novos projetos PHP.

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

## 🚀 Criar novo projeto a partir deste template

1. No GitHub, clique em **[Use this template] → Create a new repository**
2. Dê um nome ao seu novo repo (ex: `meu-app-php`)
3. Clone seu novo repo:
   ```bash
   git clone git@github.com:seu-usuario/meu-app-php.git
   cd meu-app-php

   docker-compose up -d --build
   docker-compose run --rm cli composer install



---

## ✅ Etapa 2: Habilitar como *template* no GitHub

1. Acesse: https://github.com/Godoi/lab-modern-php  
2. Clique em **Settings** → **General**  
3. Role até **Template repository**  
4. ✅ Marque a opção: **☑️ Template repository**  
5. Clique em **Update changes**

➡️ Pronto! Agora qualquer usuário pode clicar em **[Use this template]** e criar um novo repo com todo o ambiente funcional, sem histórico, e sem artefatos.

---

[![Template](https://img.shields.io/badge/template-GitHub-555?logo=github)](https://github.com/Godoi/lab-modern-php/generate)
[![PHP 8.2](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php)](https://www.php.net)
[![Xdebug 3.3](https://img.shields.io/badge/Xdebug-3.3-8C34C2?logo=xdebug)](https://xdebug.org)


