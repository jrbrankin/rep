<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:pages/login/');
    }
 
 
 
 
$logado = $_SESSION['login'];

?>
<html>
<title>TACS</title>
<head>
<meta http-equiv="refresh" content=1;url="pages/panel">
</head>
<body>Aguarde...
</body>
</html>