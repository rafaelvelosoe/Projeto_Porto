

// usando apenas as funções do virtual
<?php
#
# usando apenas as funcoes do vita
define( 'VITAONLY', true );

# definicções básicas sobre base de dados
$_config['app_name'] = 'Webservice UserManagerAPI';
$_config['url']      = 'http://localhost:8080/Projeto_start/OtherLevel_colaborador/webService/webservice_init.php';
$_config['dbhost']   = 'localhost';
$_config['dbname']   = 'db_porto_santos';
$_config['dbuser']   = 'root';
$_config['dbpass']   = '';

# apresentar o debug completo ?
$_config['show_error_log'] = false;

# solicitando o vita loader
require_once 'vitaloader.php';

# -------------------------------------------------------
/**
 * Retorna uma resposta JSON para o Solicitante.
 * 
 * @param  boolean $__success - indica se houve sucesso na operação
 * @param  string  $__message - uma mensagem opcional
 * @param  array   $_dados    - dados a serem retornados
 * @return JSON REST
 */
function __output_header__( $__success = true, $__message = null, $_dados = array() )
{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(
        array(
            'success' => $__success,
            'message' => $__message,
            'dados'   => $_dados
        )
    );
    # por ser a ultima funcao, podemos matar o processo aqui.
    exit;
}

?>