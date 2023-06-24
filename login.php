<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="login";

$strcon=mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('Erro ao cadastrar');

//ABRINDO SESSÃO
session_start();

$_SESSION['user']=$_POST['tUsuario'];
$_SESSION['senha']=$_POST['tSenha'];

$sql="SELECT * FROM nomedatabela WHERE campologintabela='$_SESSION[user]' and campopassowordtabela=$_SESSION[senha]";


if ($_SESSION['user']== '' && $_SESSION['senha']==''){
      echo " Vc está logado"; }
      else{
          echo "Vc não está logado";
}

session_unset();
session_destroy();

?>