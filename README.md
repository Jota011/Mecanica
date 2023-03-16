# MecanicaSenai
<p>Projeto realizado para o 4° Semestre do Senai</p>
<small>Em desenvolvimento...</small>
<br><br>
PIN PADRÃO DEV: radajori
<h2> Rodar o projeto no Docker </h2>
<h3>Instalar Docker </h3>

`sudo apt-get update`

` sudo apt-get install apt-transport-https ca-certificates curl software-properties-common `

` curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add - `

`sudo apt-get install docker-ce `

<span> para verificar se foi instalado rode `docker --version` </span>

<h3> Instalar Docker-Compose </h3>

` sudo apt-get update `

` sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose `

`sudo chmod +x /usr/local/bin/docker-compose`

<span> para verificar se docker-compose foi instalado rode `docker-compose --version` </span>

<h3> Iniciar o projeto </h3>

<span> para iniciar o projeto, abra o terminal na raiz do projeto e rode o comando `docker-compose up -d` </span>
