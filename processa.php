<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);


require_once __DIR__.'/src/SimpleXLSX.php';

echo '<h1> Teste xslx</h1><pre>';
if ( $xlsx = SimpleXLSX::parse($_FILES['arquivo']['tmp_name']) ) {
	print_r( $xlsx->rows() );
} else {
	echo SimpleXLSX::parseError();
}
echo '<pre>';