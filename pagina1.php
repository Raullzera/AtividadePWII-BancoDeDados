<?php
session_start();

//criacao de uma sessao 
$_SESSION['nome'] = "Raul Luis";

header("location:pagina2.php");
