<?php

//Ver documentos inline
function verdoc($attr) {
return '<iframe src="http://docs.google.com/gview?url='.$attr.'&embedded=true" style="width:550px; height:650px;" frameborder="0"></iframe>';
}

$attr = ("http://localhost/CL/DEV/UX/Funciones/includes/117.pdf");

?>

<iframe src="http://docs.google.com/gview?url='<?php echo $attr; ?>'&embedded=true" style="width:550px; height:650px;" frameborder="0"></iframe>