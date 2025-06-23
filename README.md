# TUTORIAL DE INICIAÇÃO DE PROJETO LARAVEL 🟥

## Requisitos
Antes de começar a instalação do *Laravel*, é necessário de outros componentes. Você precisa ter instalado na sua máquina o [*PHP*](https://php.net/), [*Composer*](https://getcomposer.org/) e o [*instalador do Laravel*](https://github.com/laravel/installer), além disso, também será necessário o *[Node e o NPM](https://nodejs.org/)*   ou o [*Bundle*](https://bun.sh/) para poder compilar os recursos front-end do seu aplicativo.

Caso não possua esses arquivos instalados em sua máquina, os comandos a seguirem instalam eles.

**Comando para Windows PowerShell 💻:**
    
    #Run as administrator...
    Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

**Comando para macOS 🍎:**

    /bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"

**Comando para Linux 🐧:**

    /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

Após executar o comando a cima para necessário para a sua máquina, reinicie o seu terminal para a execução do próximo código.  Agora que você já possui os componentes solicitados, podemos começar a instalação do *instalador do Laravel* via *Composer*:

    composer global require laravel/installer
Agora que todos os preparativos foram instalados, você já está pronto para a criança do seu aplicativo *Laravel*!

## Criação e Iniciação do Projeto 
Agora que está tudo pronto, podemos executar o nosso primeiro código para a criação do nosso aplicativo *Laravel*:

    laravel new example-app
O *instalador do Laravel* perguntara qual é o seu *framework de teste*, *banco de dados* e *kit inicial preferidos*, selecione com base em suas preferencias. Após a criação do aplicativo, você já pode acessar servidor de desenvolvimento do *Laravel* usando a seguinte sequencia de códigos:

> **Atenção**: *Cada linha do código deve ser executado **INDIVIDUALMENTE!***

    cd example-app
    npm install
    npm run build
    composer run dev

 Pronto! O seu projeto foi criado e iniciado com sucesso! Ele estará localizado no seu http://localhost:0000/, para caso queira abrir, basta usar pressionar o *Ctrl* e clicar com o *Mouse* para acessar o seu aplicativo *Larevel*.

## Desenvolvimento de um Projeto
Ao baixar um projeto e tentar executar, alguns erros irão aparecer. Siga esses passos para resolvê-los. Todos os comandos devem ser rodados no PowerShell.

## Passo 1
Use o comando seguinte para baixar as dependências do projeto, que vai para uma pasta chamada Vendor:

    composer install

## Passo 2
Se o projeto possuir Javascript, use o seguinte comando para instalar as dependências dele:

    npm install

## Passo 3
Após rodar o comando "npm install", caso o projeto possua Webpack ou Vite, também será necessário rodar este comando:

    npm run build

## Passo 4
Agora, em uma pasta chamado Vendor, terá um arquivo chamdo ".env.example". Copie e cole esse arquivo nessa mesma pasta e renomeie a cópia como apenas ".env".

## Passo 5
Para agora, será necessário criar uma chave encriptada para o projeto. Para isso, use o seguinte comando:

    php artisan key:generate

## Passo 6
O último passo requer que rode as _migrations_ para que seja criado um banco de dados. Isso é feito com o comando a seguir:

    php artisan migrate

Pronto! Após esses passos, seu projeto estará funcionando corretamente.
