<?php
require 'Aluno.class.php';

$aluno = new Aluno();

if(!$aluno){ 
    echo "<h1>Banco indisponível. Tente mais tarde</h1>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login </title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>

    <form action="aluno.php" method="POST" class="my-form" ">
        <div class="login-welcome-row">
            <a href="#" title="logo">
                <img src="img/timao.svg" alt="NexusGate" class="logo">
             </a>
            <h1>Bem-Vindo &#128075;</h1>
            <p>Por favor, insira seus dados!</p>
        </div>

        <div class="input_wrapper">
            <img src="img/gdf.jpg" alt="arroba" class="input_icon">
            <input type="text" id="nome" name="rm"
            class="input_field" placeholder="Seu RM aqui" required>
            <label for="email" class="input_label">RM:</label>
        </div>  

        <div class="input_wrapper">
            <img src="img/cabj.png" alt="arroba" class="input_icon">
            <input type="text" id="email" name="nome"
            class="input_field" placeholder="SeuEmailAqui@Gmail.com" required>
            <label for="email" class="input_label">Nome:</label>
        </div>


        <div class="input_wrapper">
            <img src="img/lhp.jpg" alt="cadeado" class="input_icon">
            <input type="text" id="password" name="cpf"
            class="input_field" placeholder="Sua senha aqui" required>
            <label for="password" class="input_label">CPF:</label>
        </div>

        <div class="input_wrapper">
            <img src="img/1919.jpg" alt="cadeado" class="input_icon">
            <input type="email" id="password" name="email"
            class="input_field" placeholder="Sua senha aqui" required>
            <label for="password" class="input_label">Email:</label>
        </div>

        <button type="submit"  name="submit" class="my_form_button">
             Login
        </button>
        <div class="socials-row">
            <a href="#" title="Use Google">
                 <img src="img/sccp.png" alt="Google">
                Log-In com o Google
             </a>
        </div>

        <div class="my-form_actions">
            <div class="my-form_row">
                   <span>Não tem uma conta?</span>
                  <a href="#" title="Criar Conta">
                      Cadastre-se
                  </a>
              </div>
         </div>   
    </form>
    <script src="jabas.js"></script>
</body>
</html>