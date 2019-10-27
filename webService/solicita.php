<?php
#
#
$ci = curl_init();

curl_setopt( $ci, CURLOPT_URL, "http://localhost:8080/Projeto_start/OtherLevel_colaborador/webService/get.php" ); 
curl_setopt( $ci, CURLOPT_POST, true);
curl_setopt( $ci, CURLOPT_POSTFIELDS, array(
    'email' => 'cat_boris@hotmail.com',
    'senha' => 'minha_senha_cadastrada'
));
curl_setopt( $ci, CURLOPT_HEADER, false );
curl_setopt( $ci, CURLOPT_RETURNTRANSFER, 1 );

$result = curl_exec( $ci );

$_retorno = json_decode( $result, true );
var_dump($_retorno);

#

?>