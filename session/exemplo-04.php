<?php

//session_id("id desejado") recupera a sessão com o id desejado
require_once("config.php");

session_regenerate_id();
echo session_id();

var_dump($_SESSION);

?>