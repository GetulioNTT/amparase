# Ampara.se

Plataforma web desenvolvida para apoiar criadores de conteúdo, projetos independentes e campanhas colaborativas através de assinaturas e contribuições online.

---

## 📌 Sobre o Projeto

O Ampara.se é um sistema inspirado em plataformas de financiamento coletivo contínuo, permitindo que apoiadores contribuam financeiramente com criadores e projetos.

O sistema possui funcionalidades de:
- cadastro de usuários;
- autenticação;
- criação de campanhas;
- gerenciamento de apoiadores;
- pagamentos;
- painel administrativo;
- perfil público dos criadores.

---

## 🚀 Tecnologias Utilizadas

### Front-end
- HTML5
- CSS3
- JavaScript

### Back-end
- Node.js
- Express.js

### Banco de Dados
- MySQL

### Outras Ferramentas
- Git
- GitHub
- npm

---

## 📂 Estrutura do Projeto

```plaintext
opoia-se/
│
├── public/
│   ├── css/
│   ├── js/
│   └── images/
│
├── routes/
│
├── controllers/
│
├── models/
│
├── views/
│
├── database/
│
├── app.js
├── package.json
└── README.md
```






---

## 🔐 Funcionalidades

- Cadastro de usuários
- Login e autenticação
- Criação de campanhas
- Página de perfil
- Sistema de apoio financeiro
- Dashboard administrativo
- Upload de imagens
- Responsividade
- Sistema de comentários



---

## 🖥️ Exemplo de Código JavaScript

### Inicializando o Servidor

```javascript
const express = require('express');
const app = express();

app.use(express.json());

app.get('/', (req, res) => {
    res.send('Bem-vindo ao Ampara.se');
});

app.listen(3000, () => {
    console.log('Servidor rodando na porta 3000');
});
```

---

## 📱 Responsividade

O sistema foi desenvolvido para:
- desktop;
- tablets;
- smartphones.

---

## 🎨 Interface

A interface possui:
- design moderno;
- layout responsivo;
- foco em usabilidade;
- navegação intuitiva.

---

## 📦 Dependências Principais

```json
{
  "express": "^4.18.2",
  "mysql2": "^3.6.0",
  "dotenv": "^16.3.1",
  "nodemon": "^3.0.1"
}
```

---

## 👨‍💻 Autor

Desenvolvido por Marcelino Schafer e Getulio Teixeira Pinheiro Netto


---

## 🌐 GitHub

```plaintext
https://https://github.com/GetulioNTT/amparase
```
