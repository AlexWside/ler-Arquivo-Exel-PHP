<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'/../src/SimpleXLSX.php';

echo '<h1> Titulo como Key do Array</h1>';
if ( $xlsx = SimpleXLSX::parse('countries_and_population.xlsx')) {
    
    // Produz os array keys do primeiro array com os titulos
	$header_values = $rows = [];

	foreach ( $xlsx->rows() as $k => $r ) {
		if ( $k === 0 ) {
			$header_values = $r;
			continue;
		}
		$rows[] = array_combine( $header_values, $r );
	}
	print_r( $rows );

}



