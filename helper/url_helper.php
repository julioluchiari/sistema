<?php
//bloqueia acesso direto pela url
if (eregi("produto.class.php", $_SERVER['SCRIPT_NAME']))
{
	header("Location: ../index.php");
	die();
}

//define a url da aplica��o
function base_url($nome = null)
{
	return "http://localhost/sistema/{$nome}";
}