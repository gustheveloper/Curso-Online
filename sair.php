<?php
session_start();
//deslogando o usuário e voltando pra home//
session_destroy();
header('location: index.php');
 ?>
