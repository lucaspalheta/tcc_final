<?php

/** O nome do banco de dados*/
define('DB_NAME', 'wda_crud');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'usbw');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/crud-bootstrap-php/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('aspersor', ABSPATH . 'classes/aspersor.php');
define('bloco', ABSPATH . 'classes/bloco.php');
define('bomba', ABSPATH . 'classes/bomba.php');
define('cap', ABSPATH . 'classes/cap.php');
define('curva', ABSPATH . 'classes/curva.php');
define('derivacao', ABSPATH . 'classes/derivacao.php');
define('lateral', ABSPATH . 'classes/lateral.php');
define('principal', ABSPATH . 'classes/principal.php');
define('recalque', ABSPATH . 'classes/recalque.php');
define('reducao', ABSPATH . 'classes/reducao.php');
define('setor', ABSPATH . 'classes/setor.php');
define('te', ABSPATH . 'classes/te.php');
define('tubulacao', ABSPATH . 'classes/tubulacao.php');