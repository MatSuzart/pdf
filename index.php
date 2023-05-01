<?php
ob_start();

<h1> Olá Mundo</h1><h4>Sub title</h4>

<?php
$html = ob_get_contents();
ob_end_clean();

require 'vendor/autoload.php';

$mdpdf = new mPDF();
$mdpdf->writeHTML($html);
$mdpdf->Output('file.pdf', ''); //i = browser - d = download - f = save

$link = 'http://localhost/exem-pdf/file.pdf';

echo ="Download Link:</br>".$link;


?>