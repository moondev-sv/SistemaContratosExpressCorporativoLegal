
    <?php
    require_once $_SERVER['DOCUMENT_ROOT']."/CL/DEV/UX/Plugins/dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
           if (isset($_POST['enviar'])) {
               $nombre =$_POST['nommedRec'];
            $contenido ='<html>';
            $contenido .='<head>';
            $contenido .='</head>';
            $contenido .='<body>';
            $contenido .='<h1>TEST</h1>';
            $contenido .='<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati at ut vitae exercitationem perspiciatis iste quidem cum nulla, harum autem voluptatem, atque a dolorum impedit explicabo officiis dolorem natus ipsum.';
            $contenido .='</p>';
            $contenido .='<h2>'.$nombre.'</h2>';
            $contenido .='</body>';
            $contenido .='</html>';
            echo $contenido;
                // instantiate and use the dompdf class
                $dompdf = new Dompdf();
                $dompdf->loadHtml(ob_get_clean());
                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'landscape');
                // Render the HTML as PDF
                $dompdf->render();
                $nombre_archivo = 'comprobante.pdf';
                $pdf = $dompdf->output(); //Obtiene el pdf
                $f;
                $l;
                if(headers_sent($f,$l))
                {
                    echo $f,'<br/>',$l,'<br/>';
                    die('now detect line');
                }
                // Output the generated PDF to Browser
                $dompdf->stream($nombre_archivo,array("Attachment"=>0));
         }
         else {
             echo "No se ha ingresado a la condicion del pdf por lo tanto no se generará"; die;
         }
    ?>action="/CL/DEV/UX/funciones/includes/imprimirRecetas.php"