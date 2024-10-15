<?php
//verificar_logado.php
session_start();
if(  !isset($_SESSION['logado']) ){
    header("Location: login.php?erro2=sim");
}
?>