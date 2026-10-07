<?php
$metodo =$_SERVER['REQUEST_METHOD'];
echo $metodo;

$uri = strtolower(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
echo $uri;
if($metodo == "GET" && $uri == "/parque/"){
    echo "ESTOU NO PARQUE!";
}
elseif($metodo == "GET" && $uri == "/parque/roda-gigante/"){
    echo "ESTOU NA RODA GIGANTE!";
}
elseif($metodo == "GET" && $uri == "/parque/carrosel/"){
    echo "ESTOU NO CARROSEL!";
 }
 elseif($metodo == "GET" && $uri == "/parque/escorregador/"){
    echo "ESTOU NO ESCORREGADOR!";
 }
 elseif($metodo == "GET" && $uri == "/parque/praça de alimentação/"){
    echo "ESTOU NA PRAÇA DE ALIMENTAÇÃO!";
 }
 elseif($metodo == "GET" && $uri == "/parque/montanha russa/"){
    echo "ESTOU NA MONTANHA RUSSA!";
 }
 elseif($metodo == "GET" && $uri == "/parque/carrinho bate bate/"){
    echo "ESTOU No CARRINHO BATE BATE!";
 }
 elseif($metodo == "GET" && $uri == "/parque/tiro ao alvo/"){
    echo "ESTOU NO TIRO AO ALVO!";
 }
?>