<h1 aling= "center">
    <img src="images/nova-logo-marvel.png">
</h1>

<h3>
    <a href="https://www.gonzalorodriguez.tech">Acessar uma Demo</a>
</h3>


## 📖Sobre

Projeto desenvolvido para testar a **API da Marvel** utilizando PHP e hospedá-lo na **Kinghost**.

---

## 💻Tecnologias Usadas

- [PHP](https://www.php.net/manual/pt_BR/index.php)
- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [JSON](https://www.json.org/json-pt.html)

---

## 📂Como baixar o projeto e colocá-lo em seu site na Kinghost

````bash

# Acessar seu FTP
$ ssh usuario@ftp.seudominio.com

#Acessar o diretório www/
$ cd www/

# Clonar o Repositório
$ git clone https://github.com/gonzaloamr/teste_api_marvel

````
Para a utilização da **API da Marvel** você deve gerar uma apikey, para gerar uma clique [aqui.](https://developer.marvel.com/account)

Depois de gerada a apikey você terá acesso às documentações interativas [aqui.](https://developer.marvel.com/docs)

A autenticação dá-se por uma url onde você utiliza a private key, a public key e uma hash. A hash você pode gerar em qualquer site que gere MD5 seguindo o seguinte padrão: ts+privateKey+publicKey . 

Por exemplo, se sua public key for "9876" e sua private key for "zxcv", ao gerar o link na documentação interativa ficaria da seguinte forma:

- http://gateway.marvel.com/v1/public/comics?ts=1&apikey=9876&hash=caf8c9a5a80e9d63439217c0fc84f297 (essa hash foi o resultado do md5 gerado com os valores 1zxcv9876)

Agora só substituir as urls nos $file_get_contents que conseguirá utilizar com sua apikey.


---

Desenvolvido por 👑Gonzalo Muñoz Rodriguez