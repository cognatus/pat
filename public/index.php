<?php
	// somewhere early in your project's loading, require the Composer autoloader
	// see: http://getcomposer.org/doc/00-intro.md
	require '../vendor/autoload.php';

	$data = array(
		'name' => 'Alfonso Ríos',
		'course' => 'Laravel 5'
	);

	$html = App\Template::render('pdf/certificate',$data);
	App\Pdf::getPDF('certificate', $html);
?>