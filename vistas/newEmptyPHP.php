<!DOCTYPE html>
<title>Login</title>
<meta charset="UTF-8">


<link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<?php

session_start();
echo "<span class='m-5 px-5 text-danger'>" . $_SESSION["gmensaje"] . "</span>";

