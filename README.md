# b7web laravel 12
Data de inicio: 31/10/2025

📘 Documento criado para fins educativos e de referência rápida para desenvolvedores Laravel.
Autor: Joab Torres Alencar
Ano: 2025

# 🚀 Comandos Principais do Laravel (Artisan CLI)

Este documento lista os **principais comandos do Laravel** e suas respectivas funções.  
Todos os comandos devem ser executados no terminal dentro do diretório do projeto Laravel.

---

## ⚙️ Comandos Básicos do Artisan

| Comando | Função |
|----------|--------|
| `php artisan` | Lista todos os comandos disponíveis no Artisan. |
| `php artisan help nome_comando` | Mostra detalhes e opções de um comando específico. |
| `php artisan list` | Exibe a lista completa de comandos disponíveis. |
| `php artisan serve` | Inicia o servidor local (`http://127.0.0.1:8000`). |
| `php artisan tinker` | Abre o console interativo para testar código Laravel diretamente. |
| `php artisan down` | Coloca a aplicação em modo de manutenção. |
| `php artisan up` | Retira a aplicação do modo de manutenção. |
| `php artisan about` | Mostra informações sobre a instalação do Laravel. |

---

## 🧱 Comandos de Estrutura (Make)

| Comando | Função |
|----------|--------|
| `php artisan make:controller NomeController` | Cria um novo **Controller**. |
| `php artisan make:model NomeModel` | Cria um novo **Model**. |
| `php artisan make:migration create_nome_tabela_table` | Cria um arquivo de **migração** para o banco de dados. |
| `php artisan make:seeder NomeSeeder` | Cria um **Seeder** para popular o banco. |
| `php artisan make:factory NomeFactory` | Cria uma **Factory** para gerar dados falsos. |
| `php artisan make:middleware NomeMiddleware` | Cria um **Middleware**. |
| `php artisan make:request NomeRequest` | Cria uma classe de **validação de formulário**. |
| `php artisan make:command NomeCommand` | Cria um **comando customizado** do Artisan. |
| `php artisan make:job NomeJob` | Cria uma **tarefa assíncrona (Job)**. |
| `php artisan make:event NomeEvent` | Cria um **Evento**. |
| `php artisan make:listener NomeListener` | Cria um **Listener** para um evento. |
| `php artisan make:notification NomeNotification` | Cria uma **Notificação** (e-mail, Slack, etc). |
| `php artisan make:mail NomeMail` | Cria uma classe de **e-mail**. |
| `php artisan make:policy NomePolicy` | Cria uma **Policy** (autorização). |
| `php artisan make:resource NomeResource` | Cria um **Resource** para formatação de JSON. |
| `php artisan make:test NomeTest` | Cria um **Teste unitário**. |

---

## 🧩 Comandos de Migração e Banco de Dados

| Comando | Função |
|----------|--------|
| `php artisan migrate` | Executa todas as migrações pendentes. |
| `php artisan migrate:rollback` | Desfaz a última migração. |
| `php artisan migrate:reset` | Desfaz **todas** as migrações. |
| `php artisan migrate:refresh` | Reseta e reaplica todas as migrações. |
| `php artisan migrate:fresh` | Apaga todas as tabelas e recria do zero. |
| `php artisan db:seed` | Executa os **seeders** configurados. |
| `php artisan migrate --seed` | Executa migrações e seeders juntos. |
| `php artisan db:wipe` | Apaga todas as tabelas e dados do banco de dados. |

---

## 📦 Comandos de Cache, Config e Rota

| Comando | Função |
|----------|--------|
| `php artisan route:list` | Mostra todas as rotas registradas. |
| `php artisan config:cache` | Gera cache das configurações. |
| `php artisan config:clear` | Limpa o cache das configurações. |
| `php artisan cache:clear` | Limpa o cache geral da aplicação. |
| `php artisan route:cache` | Cria cache das rotas. |
| `php artisan route:clear` | Remove o cache das rotas. |
| `php artisan view:clear` | Limpa cache das views compiladas. |
| `php artisan event:clear` | Limpa o cache de eventos. |
| `php artisan optimize` | Executa otimização geral do projeto. |

---

## 🔐 Comandos de Autenticação e Usuários

| Comando | Função |
|----------|--------|
| `php artisan make:auth` | (Laravel ≤ 6.x) Cria telas de login e registro. |
| `php artisan ui bootstrap --auth` | Cria autenticação com Bootstrap (Laravel UI). |
| `php artisan breeze:install` | Instala autenticação leve com **Laravel Breeze**. |
| `php artisan jetstream:install livewire` | Instala autenticação moderna com **Jetstream + Livewire**. |
| `php artisan make:policy UserPolicy` | Cria regras de autorização. |

---

## 🧰 Comandos de Debug e Log

| Comando | Função |
|----------|--------|
| `php artisan log:clear` | Limpa os logs do sistema. |
| `php artisan env` | Mostra as variáveis de ambiente. |
| `php artisan storage:link` | Cria link simbólico de `storage` → `public/storage`. |
| `php artisan schedule:run` | Executa tarefas agendadas (cron jobs). |

---

## 🧪 Comandos de Testes

| Comando | Função |
|----------|--------|
| `php artisan test` | Executa todos os testes automatizados. |
| `php artisan test --filter=NomeDoTeste` | Executa um teste específico. |

---

## 💡 Comandos Úteis para Desenvolvimento

| Comando | Função |
|----------|--------|
| `php artisan inspire` | Mostra uma frase inspiradora 😄 |
| `php artisan key:generate` | Gera uma nova chave de aplicativo no `.env`. |
| `php artisan storage:link` | Cria link simbólico para armazenamento de arquivos. |
| `php artisan vendor:publish` | Publica arquivos de pacotes no projeto. |

---

## ⚡ Dicas Extras

🔹 Para ver comandos de uma categoria específica:
```bash
php artisan list make
php artisan list migrate
php artisan list route
