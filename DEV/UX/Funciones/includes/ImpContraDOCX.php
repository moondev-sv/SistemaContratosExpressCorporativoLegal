
 <?php

 // [START PHPWORD] 
 require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/vendor/autoload.php";
 $pw = new \PhpOffice\PhpWord\PhpWord();
 
 // [THE HTML]
 $section = $pw->addSection();
 $html = "<h1>HELLO WORLD!</h1>";
 $html .= "<p>This is a paragraph of random text</p>";
 $html .= "<table><tr><td>A table</td><td>Cell</td></tr></table>";

$filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/ContratoVehiculo124.pdf";
 //Aqui iran los codigos




 
//Hasta Acá
 \PhpOffice\PhpWord\Shared\Html::addHtml($section, $filename);
 
 // [SAVE FILE ON THE SERVER] 
 // $pw->save("html-to-doc.docx", "Word2007");
 
 //* [OR FORCE DOWNLOAD] 
 header('Content-Type: application/octet-stream');
 header('Content-Disposition: attachment;filename="test.docx"');
 $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, 'Word2007');
 $objWriter->save('php://output');
 

//require_once  $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/phpdocx-free/classes/CreateDocx.inc";

//$docx = new CreateDocx();
//$filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/ContratoVehiculo124.pdf";
//$docx->transformDocument($filename, 'output.docx', 'msword');


//require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/phpdocx/Classes/Phpdocx/Create/CreateDocx.inc";

//$docx = new Phpdocx\Transform\TransformDocAdv();

//$docx->transformDocument('/CL/DOCS/CONTRATOS/ContratoVehiculo230.pdf', 'output.docx');
 ?>
 