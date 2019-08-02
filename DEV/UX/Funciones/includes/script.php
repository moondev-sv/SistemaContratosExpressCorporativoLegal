<script>
//Script Calculadora
function calculadora{
   
    
   //Declaracion de las variables estaticas.
   function fee(empleados) { //Funcion que define el fee por la cantidad de empleados ingresados, entre mas empleados mas pequeño el multiplicador
       var empleados=empleados;
       if (empleados>=0 && empleados <=150 ) {
           empleados=5;
           return empleados;
       }
       else  if (empleados>=151 && empleados <=300 ) {
           empleados=4;
           return empleados;
       }
       else  if (empleados>=301 && empleados <=500 ) {
           empleados=3.2;
           return empleados;
       }
       else  if (empleados>=501 && empleados <=1000 ) {
           empleados=3;
           return empleados;
       }
       else  if (empleados>=1001 && empleados <=5000 ) {
           empleados=2.5;
           return empleados;
       }
       else  if (empleados>=5001) {
           empleados=2;
           return empleados;
       }
       return empleados=0;
   }
 
   var FeePorEmp_SER=5; //Calculado por tablas dinamicas
   var DescPorAno=0.0833; //Estatico para todos


//***********************************SOR************************************************ */

/**   ------------------ % descuento por año de contratacion------------------- */
$( "#PerConServ_SOR" ).change(function() {
   var PorDescAnCon_SOR = ((($("#PerConServ_SOR").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SOR").text(PorDescAnCon_SOR+"%"); 

//    -------------------Fee Mensual aplicacion --------------- 
   var FeePorEmp_SOR = fee($("#CantEmpAct_SOR").val());
   var FeeMenApp_SOR = (($("#CantEmpAct_SOR").val())*FeePorEmp_SOR)-($("#PerConServ_SOR").val())*(($("#CantEmpAct_SOR").val())*FeePorEmp_SOR)*DescPorAno;
   if (FeeMenApp_SOR <=1983.33 && FeeMenApp_SOR >=150) {
       var feemensualsor = FeeMenApp_SOR.toFixed(0);
       $("#FeeMenApp_SOR").text("$"+formatMoney(feemensualsor)); 
     
   } else if(FeeMenApp_SOR > 1983.33){
       FeeMenApp_SOR=1983.33;
       var feemensualsor = FeeMenApp_SOR.toFixed(0);
       $("#FeeMenApp_SOR").text("$"+formatMoney(feemensualsor)); 
   }else{
        FeeMenApp_SOR=150;
       var feemensualsor = FeeMenApp_SOR.toFixed(0);
       $("#FeeMenApp_SOR").text("$"+formatMoney(feemensualsor)); 
   }

//------------------- Inversion Annual --------------- 
var InvAnu_SOR = (FeeMenApp_SOR*12) + parseFloat(4900);
   var anualsor = InvAnu_SOR.toFixed(0);
   $("#InvAnu_SOR").text("$"+formatMoney(anualsor)); 
  

//------------------- Inversion Mensual --------------- 
var InvMen_SOR = parseFloat(InvAnu_SOR)/12;
var mensualsor = InvMen_SOR.toFixed(0);
   $("#InvMen_SOR").text("$"+formatMoney(mensualsor)); 
});
$( "#CantEmpAct_SOR" ).change(function() {
   var PorDescAnCon_SOR = ((($("#PerConServ_SOR").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SOR").text(PorDescAnCon_SOR+"%"); 

//    -------------------Fee Mensual aplicacion --------------- 
   var FeePorEmp_SOR = fee($("#CantEmpAct_SOR").val());
   var FeeMenApp_SOR = (($("#CantEmpAct_SOR").val())*FeePorEmp_SOR)-($("#PerConServ_SOR").val())*(($("#CantEmpAct_SOR").val())*FeePorEmp_SOR)*DescPorAno;
   if (FeeMenApp_SOR <=1983.33 && FeeMenApp_SOR >=150) {
       var feemensualsor = FeeMenApp_SOR.toFixed(0);
       $("#FeeMenApp_SOR").text("$"+formatMoney(feemensualsor)); 
     
   } else if(FeeMenApp_SOR > 1983.33){
       FeeMenApp_SOR=1983.33;
       var feemensualsor = FeeMenApp_SOR.toFixed(0);
       $("#FeeMenApp_SOR").text("$"+formatMoney(feemensualsor)); 
   }else{
        FeeMenApp_SOR=150;
       var feemensualsor = FeeMenApp_SOR.toFixed(0);
       $("#FeeMenApp_SOR").text("$"+formatMoney(feemensualsor)); 
   }
//------------------- Inversion Annual --------------- 
   var InvAnu_SOR = parseFloat(FeeMenApp_SOR*12) + parseFloat(4900);
   var anualsor = InvAnu_SOR.toFixed(0);
   $("#InvAnu_SOR").text("$"+formatMoney(anualsor)); 
  

//------------------- Inversion Mensual --------------- 
var InvMen_SOR = parseFloat(InvAnu_SOR)/12;
var mensualsor = InvMen_SOR.toFixed(0);
   $("#InvMen_SOR").text("$"+formatMoney(mensualsor)); 
});




//***********************************SER************************************************ */

/**   ------------------ % descuento por año de contratacion------------------- */
$( "#PerConServ_SER" ).change(function() {
   var PorDescAnCon_SER = ((($("#PerConServ_SER").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SER").text(PorDescAnCon_SER+"%");

   var FeePorEmp_SER = fee($("#CantEmpAct_SER").val());
//    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SER = ((($("#CantEmpAct_SER").val())*FeePorEmp_SER)-($("#PerConServ_SER").val())*(($("#CantEmpAct_SER").val())*FeePorEmp_SER)*DescPorAno)*0.35;
   
   if (FeeMenApp_SER<=654.50 && FeeMenApp_SER >=100) {
       $("#FeeMenApp_SER").text("$"+FeeMenApp_SER.toFixed(0)); 
   } else if (FeeMenApp_SER > 654.50){
       FeeMenApp_SER=654.50;
       $("#FeeMenApp_SER").text("$"+FeeMenApp_SER.toFixed(0)); 
   }else{
    FeeMenApp_SER=100;
       $("#FeeMenApp_SER").text("$"+FeeMenApp_SER.toFixed(0)); 
   }

  
   
   //------------------- Inversion Annual --------------- 
   var InvAnu_SER = parseFloat(FeeMenApp_SER*12) + parseFloat(2150);
   var anualser = InvAnu_SER.toFixed(2);
   $("#InvAnu_SER").text("$"+formatMoney(anualser)); 
   
   //------------------- Inversion Mensual --------------- 
   var InvMen_SER = parseFloat(InvAnu_SER)/12;   
   var mensualser= InvMen_SER.toFixed(2);
   $("#InvMen_SER").text("$"+formatMoney(mensualser)); 
});
$( "#CantEmpAct_SER" ).change(function() {
   var PorDescAnCon_SER = ((($("#PerConServ_SER").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SER").text(PorDescAnCon_SER+"%");

   var FeePorEmp_SER = fee($("#CantEmpAct_SER").val());
//    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SER = ((($("#CantEmpAct_SER").val())*FeePorEmp_SER)-($("#PerConServ_SER").val())*(($("#CantEmpAct_SER").val())*FeePorEmp_SER)*DescPorAno)*0.35;
   if (FeeMenApp_SER<=654.50 && FeeMenApp_SER >=100) {
       $("#FeeMenApp_SER").text("$"+FeeMenApp_SER.toFixed(0)); 
   } else if (FeeMenApp_SER > 654.50){
       FeeMenApp_SER=654.50;
       $("#FeeMenApp_SER").text("$"+FeeMenApp_SER.toFixed(0)); 
   }else{
    FeeMenApp_SER=100;
       $("#FeeMenApp_SER").text("$"+FeeMenApp_SER.toFixed(0)); 
   }

   //------------------- Inversion Annual --------------- 
   var InvAnu_SER = parseFloat(FeeMenApp_SER*12) + parseFloat(2150);
   var anualser = InvAnu_SER.toFixed(2);
   $("#InvAnu_SER").text("$"+formatMoney(anualser)); 
   
   //------------------- Inversion Mensual --------------- 
   var InvMen_SER = parseFloat(InvAnu_SER)/12;   
   var mensualser= InvMen_SER.toFixed(2);
   $("#InvMen_SER").text("$"+formatMoney(mensualser)); 
   
});




//***********************************SIP************************************************ */

/**   ------------------ % descuento por año de contratacion------------------- */
$( "#PerConServ_SIP" ).change(function() {
   var PorDescAnCon_SIP = ((($("#PerConServ_SIP").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SIP").text(PorDescAnCon_SIP+"%");
   var FeePorEmp_SER = fee($("#CantEmpAct_SIP").val());
   //    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SIP = ((($("#CantEmpAct_SIP").val())*FeePorEmp_SER)-($("#PerConServ_SIP").val())*(($("#CantEmpAct_SIP").val())*FeePorEmp_SER)*DescPorAno)*0.35;
   

   if (FeeMenApp_SIP<=654.50 && FeeMenApp_SIP >=100) {
       $("#FeeMenApp_SIP").text("$"+FeeMenApp_SIP.toFixed(0)); 
   } else if (FeeMenApp_SIP > 654.50){
       FeeMenApp_SIP=654.50;
       $("#FeeMenApp_SIP").text("$"+FeeMenApp_SIP.toFixed(0)); 
   }else{
    FeeMenApp_SIP=100;
       $("#FeeMenApp_SIP").text("$"+FeeMenApp_SIP.toFixed(0)); 
   }

    //------------------- Inversion Annual --------------- 
    var InvAnu_SIP = parseFloat(FeeMenApp_SIP*12) + parseFloat(2150);
    var anualsip = InvAnu_SIP.toFixed(0);
   $("#InvAnu_SIP").text("$"+formatMoney(anualsip)); 
   

    //------------------- Inversion Mensual --------------- 
    var InvMen_SIP = parseFloat((InvAnu_SIP)/12);   
    var mensualsip = InvMen_SIP.toFixed(0);
   $("#InvMen_SIP").text("$"+formatMoney(mensualsip)); 
});
$( "#CantEmpAct_SIP" ).change(function() {
   var PorDescAnCon_SIP = ((($("#PerConServ_SIP").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SIP").text(PorDescAnCon_SIP+"%");
   var FeePorEmp_SER = fee($("#CantEmpAct_SIP").val());
   //    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SIP = ((($("#CantEmpAct_SIP").val())*FeePorEmp_SER)-($("#PerConServ_SIP").val())*(($("#CantEmpAct_SIP").val())*FeePorEmp_SER)*DescPorAno)*0.35;
   
   if (FeeMenApp_SIP<=654.50 && FeeMenApp_SIP >=100) {
       $("#FeeMenApp_SIP").text("$"+FeeMenApp_SIP.toFixed(0)); 
   } else if (FeeMenApp_SIP > 654.50){
       FeeMenApp_SIP=654.50;
       $("#FeeMenApp_SIP").text("$"+FeeMenApp_SIP.toFixed(0)); 
   }else{
    FeeMenApp_SIP=100;
       $("#FeeMenApp_SIP").text("$"+FeeMenApp_SIP.toFixed(0)); 
   }
    //------------------- Inversion Annual --------------- 
    var InvAnu_SIP = parseFloat(FeeMenApp_SIP*12) + parseFloat(2150);
    var anualsip = InvAnu_SIP.toFixed(0);
   $("#InvAnu_SIP").text("$"+formatMoney(anualsip)); 
   

    //------------------- Inversion Mensual --------------- 
    var InvMen_SIP = parseFloat((InvAnu_SIP)/12);   
    var mensualsip = InvMen_SIP.toFixed(0);
   $("#InvMen_SIP").text("$"+formatMoney(mensualsip)); 
});




//***********************************SEP************************************************ */

/**   ------------------ % descuento por año de contratacion------------------- */
$( "#PerConServ_SEP" ).change(function() {
   var PorDescAnCon_SEP = ((($("#PerConServ_SEP").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SEP").text(PorDescAnCon_SEP+"%");
   var FeePorEmp_SER = fee($("#CantEmpAct_SEP").val());
//    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SEP = ((($("#CantEmpAct_SEP").val())*FeePorEmp_SER)-($("#PerConServ_SEP").val())*(($("#CantEmpAct_SEP").val())*FeePorEmp_SER)*DescPorAno)*0.35;
 
   if (FeeMenApp_SEP<=654.50 && FeeMenApp_SEP >=100) {
       $("#FeeMenApp_SEP").text("$"+FeeMenApp_SEP.toFixed(0)); 
   } else if (FeeMenApp_SEP > 654.50){
       FeeMenApp_SEP=654.50;
       $("#FeeMenApp_SEP").text("$"+FeeMenApp_SEP.toFixed(0)); 
   }else{
    FeeMenApp_SEP=100;
       $("#FeeMenApp_SEP").text("$"+FeeMenApp_SEP.toFixed(0)); 
   }

    //------------------- Inversion Annual --------------- 
    var InvAnu_SEP = (FeeMenApp_SEP*12) + parseFloat(2150);
    var annualsep = InvAnu_SEP.toFixed(0);
   $("#InvAnu_SEP").text("$"+formatMoney(annualsep)); 

    //------------------- Inversion Mensual --------------- 
    var InvMen_SEP = parseFloat((InvAnu_SEP)/12); 
    var mensualsep =  InvMen_SEP.toFixed(0);
   $("#InvMen_SEP").text("$"+formatMoney(mensualsep)); 
});
$( "#CantEmpAct_SEP" ).change(function() {
   var PorDescAnCon_SEP = ((($("#PerConServ_SEP").val())*DescPorAno)*100).toFixed(0);
   $("#PorDescAnCon_SEP").text(PorDescAnCon_SEP+"%");
   var FeePorEmp_SER = fee($("#CantEmpAct_SEP").val());
//    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SEP = ((($("#CantEmpAct_SEP").val())*FeePorEmp_SER)-($("#PerConServ_SEP").val())*(($("#CantEmpAct_SEP").val())*FeePorEmp_SER)*DescPorAno)*0.35;
   if (FeeMenApp_SEP<=654.50 && FeeMenApp_SEP >=100) {
       $("#FeeMenApp_SEP").text("$"+FeeMenApp_SEP.toFixed(0)); 
   } else if (FeeMenApp_SEP > 654.50){
       FeeMenApp_SEP=654.50;
       $("#FeeMenApp_SEP").text("$"+FeeMenApp_SEP.toFixed(0)); 
   }else{
    FeeMenApp_SEP=100;
       $("#FeeMenApp_SEP").text("$"+FeeMenApp_SEP.toFixed(0)); 
   }
    //------------------- Inversion Annual --------------- 
    var InvAnu_SEP = (FeeMenApp_SEP*12) + parseFloat(2150);
    var annualsep = InvAnu_SEP.toFixed(0);
   $("#InvAnu_SEP").text("$"+formatMoney(annualsep)); 

    //------------------- Inversion Mensual --------------- 
    var InvMen_SEP = parseFloat((InvAnu_SEP)/12); 
    var mensualsep =  InvMen_SEP.toFixed(0);
   $("#InvMen_SEP").text("$"+formatMoney(mensualsep)); 
});

  



//***********************************SEA************************************************ */

/**   ------------------ % descuento por año de contratacion------------------- */

$( "#CantEmpAct_SEA" ).change(function() {
   var PorDescAnCon_SEA = ((($("#PerConServ_SEA").val())*DescPorAno)*100).toFixed(0);
   //No se muestra el porcentaje $("#PorDescAnCon_SEA").text(PorDescAnCon_SEA+"%"); 
   var FeePorEmp_SER = fee($("#CantEmpAct_SEA").val());

//    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SEA = ((($("#CantEmpAct_SEA").val())*FeePorEmp_SER)-(($("#CantEmpAct_SEA").val())*FeePorEmp_SER)*DescPorAno)*0.3;
   var feemensualsea = FeeMenApp_SEA.toFixed(0);
   $("#FeeMenApp_SEA").text("$"+formatMoney(feemensualsea)); 
   
      //------------------- Inversion Annual --------------- 
      var InvAnu_SEA = parseFloat(FeeMenApp_SEA*12); // Se comento por que no recibe valor + parseFloat($("#FeeImplePU_SEA").val());
   //No se muestra la inversion anual  $("#InvAnu_SEA").text(InvAnu_SEA.toFixed(2)); 

    //------------------- Inversion Mensual --------------- 
    var InvMen_SEA = parseFloat(($("#InvAnu_SEA").text())/12);   
   //No se muestra la inversion mensual$("#InvMen_SEA").text(InvMen_SEA.toFixed(2)); 
});





//***********************************SES************************************************ */

/**   ------------------ % descuento por año de contratacion------------------- */

$( "#CantEmpAct_SES" ).change(function() {
   var PorDescAnCon_SES = ((($("#PerConServ_SES").val())*DescPorAno)*100).toFixed(0);
   //No se muestra el porcentaje $("#PorDescAnCon_SES").text(PorDescAnCon_SES+"%"); 
   var FeePorEmp_SER = fee($("#CantEmpAct_SES").val());

//    -------------------Fee Mensual aplicacion --------------- 
   var FeeMenApp_SES = ((($("#CantEmpAct_SES").val())*FeePorEmp_SER)-(($("#CantEmpAct_SES").val())*FeePorEmp_SER)*DescPorAno)*0.3;
   var feemensualses = FeeMenApp_SES.toFixed(0);
   $("#FeeMenApp_SES").text("$"+formatMoney(feemensualses)); 

      //------------------- Inversion Annual --------------- 
      var InvAnu_SES = 950// No se usaria este codigo   parseFloat(FeeMenApp_SES*12); // Se comento por que no recibe un valor + parseFloat($("#FeeImplePU_SES").val());
  //No se muestra la inversion anual $("#InvAnu_SES").text(InvAnu_SES); 

    /** ------------------- Inversion Mensual (No tiene SES)--------------- 
    var InvMen_SES = parseFloat(($("#InvAnu_SES").val())/12);   
   $("#InvMen_SES").val(InvMen_SES.toFixed(2)); 
*/
  
});



/**     -------------------Fee Implementacion unico y mensual solo de las primeras 4 apps--------------- */
   var FeeImplePM_SOR = ((4900)/12).toFixed(2);
   $("#FeeImplePM_SOR").text("$"+FeeImplePM_SOR); 

   var FeeImplePM_SER = ((2150)/12).toFixed(2);
   $("#FeeImplePM_SER").text("$"+FeeImplePM_SER); 

   var FeeImplePM_SIP = ((2150)/12).toFixed(2);
   $("#FeeImplePM_SIP").text("$"+FeeImplePM_SIP); 

   var FeeImplePM_SEP = ((2150)/12).toFixed(2);
   $("#FeeImplePM_SEP").text("$"+FeeImplePM_SEP); 
}
function justNumbers(e)
       {
       var keynum = window.event ? window.event.keyCode : e.which;
       if ((keynum == 8) || (keynum == 46))
       return true;
        
       return /\d/.test(String.fromCharCode(keynum));
       }
function formatMoney(n, c, d, t) {
 var c = isNaN(c = Math.abs(c)) ? 2 : c,
   d = d == undefined ? "." : d,
   t = t == undefined ? "," : t,
   s = n < 0 ? "-" : "",
   i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
   j = (j = i.length) > 3 ? j % 3 : 0;

 return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
</script>