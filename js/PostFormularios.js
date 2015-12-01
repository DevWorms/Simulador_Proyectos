function PostFormulario() {}

function defeinicionProyecto01() { //pantalla 01

    var nombre = $("#nombre_proyectodef01").val();
    var tipo = $("#tipo_proyectodef01").val();
    var unidad = $("#unidadmedida_proyectodef01").val();
    var descripcion = $("#descripcion_proyecto_def01").val();
    var caracterisitcas = $("#caracteristicas_proyecto_def01").val();

    var strPost = "nombre=" + nombre + "&tipo=" + tipo + "&unidad=" + unidad + "&descripcion=" +
            descripcion + "&caracterisitcas=" + caracterisitcas;
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=01",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btnDefinirProy").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function definicionMercado02() { //pantalla 02
    if ($("#defmerc_local").is(":checked")) {
        var local = 1;
    } else {
        var local = 0;
    }

    if ($("#defmerc_regional").is(":checked")) {
        var regional = 1;
    } else {
        var regional = 0;
    }
    if ($("#defmerc_nacional").is(":checked")) {
        var nacional = 1;
    } else {
        var nacional = 0;
    }
    if ($("#defmerc_extranjero").is(":checked")) {
        var extranjero = 1;
    } else {
        var extranjero = 0;
    }

    var nse = $("#defmerc_nse").val();
    var escolaridad = $("#defmerc_escolaridad").val();
    var rangoedad = $("#defmerc_rangoedad").val();
    var descripcion = $("#defmerc_descripcion").val();

    var strPost = "local=" + local + "&regional=" + regional + "&nacional=" + nacional + "&extranjero=" + extranjero +
            "&nse=" + nse + "&escolaridad=" + escolaridad + "&rangoedad=" + rangoedad + "&descripcion=" + descripcion;
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=02",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btnDefMerc").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function inversionInicialActivos05A() { //pantalla 05 - A
    var concepto1 = $("#invAct_Concepto1").val();
    var concepto2 = $("#invAct_Concepto2").val();
    var concepto3 = $("#invAct_Concepto3").val();
    var concepto4 = $("#invAct_Concepto4").val();
    var concepto5 = $("#invAct_Concepto5").val();
    var concepto6 = $("#invAct_Concepto6").val();
    var concepto7 = $("#invAct_Concepto7").val();

    var unidad1 = $("#invAct_Unidad1").val();
    var unidad2 = $("#invAct_Unidad2").val();
    var unidad3 = $("#invAct_Unidad3").val();
    var unidad4 = $("#invAct_Unidad4").val();
    var unidad5 = $("#invAct_Unidad5").val();
    var unidad6 = $("#invAct_Unidad6").val();
    var unidad7 = $("#invAct_Unidad7").val();

    var cantidad1 = $("#invAct_Cantidad1").val();
    var cantidad2 = $("#invAct_Cantidad2").val();
    var cantidad3 = $("#invAct_Cantidad3").val();
    var cantidad4 = $("#invAct_Cantidad4").val();
    var cantidad5 = $("#invAct_Cantidad5").val();
    var cantidad6 = $("#invAct_Cantidad6").val();
    var cantidad7 = $("#invAct_Cantidad7").val();

    var precio1 = $("#invAct_Precio1").val();
    var precio2 = $("#invAct_Precio2").val();
    var precio3 = $("#invAct_Precio3").val();
    var precio4 = $("#invAct_Precio4").val();
    var precio5 = $("#invAct_Precio5").val();
    var precio6 = $("#invAct_Precio6").val();
    var precio7 = $("#invAct_Precio7").val();

    var total1 = $("#invAct_Total1").val();
    var total2 = $("#invAct_Total2").val();
    var total3 = $("#invAct_Total3").val();
    var total4 = $("#invAct_Total4").val();
    var total5 = $("#invAct_Total5").val();
    var total6 = $("#invAct_Total6").val();
    var total7 = $("#invAct_Total7").val();

    var strPost = "concepto1=" + concepto1 + "&concepto2=" + concepto2 + 
            "&concepto3=" + concepto3 + "&concepto4=" + concepto4 + 
            "&concepto5=" + concepto5 + "&concepto6=" + concepto6 + 
            "&concepto7=" + concepto7 + "&unidad1=" + unidad1 + 
            "&unidad2=" + unidad2 + "&unidad3=" + unidad3 + 
            "&unidad4=" + unidad4 + "&unidad5=" + unidad5 + 
            "&unidad6=" + unidad6 + "&unidad7=" + unidad7 + 
            "&cantidad1=" + cantidad1 + "&cantidad2=" + cantidad2 + 
            "&cantidad3=" + cantidad3 + "&cantidad4=" + cantidad4 + 
            "&cantidad5=" + cantidad5 + "&cantidad6=" + cantidad6 + 
            "&cantidad7=" + cantidad7 + "&precio1=" + precio1 + 
            "&precio2=" + precio2 + "&precio3=" + precio3 + 
            "&precio4=" + precio4 + "&precio5=" + precio5 + 
            "&precio6=" + precio6 + "&precio7=" + precio7 + 
            "&total1=" + total1 + "&total2=" + total2 + "&total3=" + total3 + 
            "&total4=" + total4 + "&total5=" + total5 + "&total6=" + total6 + 
            "&total7=" + total7;
     
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=05A",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                inversionInicialActivos05B();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function inversionInicialActivos05B() { //pantalla 05 - A
    var concepto1b = $("#invActb_Concepto1").val();
    var concepto2b = $("#invActb_Concepto2").val();
    var concepto3b = $("#invActb_Concepto3").val();
    var concepto4b = $("#invActb_Concepto4").val();
    
    var monto1 = $("#invActb_Monto1").val();
    var monto2 = $("#invActb_Monto2").val();
    var monto3 = $("#invActb_Monto3").val();
    var monto4 = $("#invActb_Monto4").val();
    
    var strPost = "concepto1b=" + concepto1b + 
            "&concepto2b=" + concepto2b + "&concepto3b=" + concepto3b +
            "&concepto4b=" + concepto4b + "&monto1=" + monto1 + 
            "&monto2=" + monto2 + "&monto3=" + monto3 + "&monto4=" + monto4;
    
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=05B",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                inversionInicialActivos05C();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function inversionInicialActivos05C() { //pantalla 05 - C
    var capitalT = $("#invActc_Capital").val();
    var capitalPP = parseFloat($("#invActc_pocentaje1").val())/100;
    var capitalPM = $("#invActc_Monto1").val();
    var financiamientoP = parseFloat($("#invActc_pocentaje2").val())/100;
    var financiamientoPM = $("#invActc_Monto2").val();
    
    var strPost = "capital=" + capitalT + 
            "&pocentaje1=" + capitalPP + "&monto1=" + capitalPM +
            "&pocentaje2=" + financiamientoP + "&monto2=" + financiamientoPM;
    
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=05C",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btninvAct").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function getCapitales() { //pantalla 06,07 

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data:"&ID_pantalla=0607",
        dataType: "json",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            //if(info =! null){
                alert(info.Monto_propio);
                $("#capitalPropio").html("$ "+info.Monto_propio);
                $("#capitalFinanciar").html("$ "+info.Monto_financ);
            //}
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function financimiento08() { //pantalla 08 x
    var tipoFinac = $("#tipoFinac").val();
    var interesFinac = $("#interesFinac").val();
    var plazoFinac = $("#plazoFinac").val();
    var graciaFinac = $("#graciaFinac").val();
    var amortizacionFinac = $("#amortizacionFinac").val();
    
    var strPost = "tipoFinac=" + tipoFinac + 
            "&interesFinac=" + interesFinac + "&plazoFinac=" + plazoFinac +
            "&graciaFinac=" + graciaFinac + "&amortizacionFinac=" + amortizacionFinac;
    
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=08",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                getCapitales();
                $("#btn_financiamiento").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    }); //test
}

function impuestos10(){// pantalla 10 y 11
    var tipoImp = $("#tipoImpf10").val();
    var porcentaje = $("#porcentajef10").val();
    var sobreconcep = $("#sobreConcf10").val();
    var tasaDescu = $("#tasaDescf11").val();
    var strPost = "tipoImp=" + tipoImp + 
            "&porcentaje=" + porcentaje + "&sobreconcep=" + sobreconcep +
            "&tasaDescu=" + tasaDescu;

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=0902",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {  
                getDeuda09();
                $("#tipoImpf10").prop('disabled', true);
                $("#porcentajef10").prop('disabled', true);
                $("#sobreConcf10").prop('disabled', true);
                $("#tasaDescf11").prop('disabled', true);
            }else{
                alert("Lo sentimos ocurrió un error inesperado")
            }

        },
        error: function (error) {
            console.log(error);
        }
    }); 
}

function getDeuda09() {//pantalla 9
        
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: "&ID_pantalla=0901",
        dataType: "json",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            $("#btnSiguiente").show();
            $("#btnDeudas").hide();
            llenarTablaDeuda(info);
        },
        error: function (error) {
            alert(error + "no se quepedo");
            console.log(error);
        }
    });
}

function validarPantalla08(){

    $("#interesFinac").numerosDecimales();
    $("#interesFinac").rangoPorcentaje();
    $("#plazoFinac").numerosEnteros();
    $("#graciaFinac").numerosEnteros();
    
}

function llenarTablaDeuda(tabla) {//pantalla 9
    
    var fila = "";   
    var ajuste="";
    for(var i = 0; i < tabla.length; i++){
        fila = "<tr>";
        for(var j = 0; j < tabla[0].length; j++){
            var str=tabla[i][j].split(".");
            ajuste = str[0];
            if(str.length==2){
                ajuste +="."+str[1].substr(0,2);
            }

            fila += "<td>"+ ajuste +"</td>";
        }
        fila += "</tr>";
        $("#tablaDeuda").append(fila);
    }    
}
//**** FUNCIONES DE VALIDACION DE CAMPOS ******
$.fn.numerosDecimales = function(){
    $(this).keypress(function(tecla){
         if(tecla.charCode >= 48 && tecla.charCode <= 57 || tecla.charCode == 0 || tecla.charCode == 46 ) {
            return true;
        }
        else{
            return false;
        }
    });
}; 

$.fn.numerosEnteros = function(){
    $(this).keypress(function(tecla){
         if(tecla.charCode >= 48 && tecla.charCode <= 57 || tecla.charCode == 0 ) {
            return true;
        }
        else{
            return false;
        }
    });
}; 

$.fn.soloLetrasyEspacio = function(){
    $(this).keypress(function(tecla){
         if(tecla.charCode >= 65 & tecla.charCode <= 90 || tecla.charCode >= 97 & tecla.charCode <= 122 || tecla.charCode == 32  || tecla.charCode == 0) {
            return true;
        }
        else{
            return false;
        }
    });
}; 

$.fn.rangoPorcentaje=function(){ // VALIDACION PORCENTAJE DE  0 A 100
    $.caja = $(this);
    $(this).keyup(function(tecla){
        if(parseFloat($.caja.val()) < 0 || parseFloat($.caja.val()) > 100 ){
            $.caja.val("");
        }
    });
}; 

$.fn.noEmpty = function(){
    var valida = 0;
    var last_index=0;

    $.formulario = $(this).parents(".step").children(".row").children("div").children("input,textarea");
    $.formulario.each(function(indice,elemento){
        if($(elemento).val() != ""){
            valida++;
        } 
        last_index = indice;
    });
    if(valida == (last_index + 1)){
       return true;
    }
    else{
        alert("No puede haber campos vacios")
       return false; 
    }
};  

$(document).ready(function () {

    $("#btnSiguiente").hide();

    $("#btnSiguiente").click(function () {
        $("#btnSiguiente").hide();
    });



    $("#btnDefinirProy").click(function () {
        if($("#btnDefinirProy").noEmpty()){
            defeinicionProyecto01();
        }
    }); //pantalla 01

    $("#btnDefMerc").click(function () {
        if($("#btnDefMerc").noEmpty()){
            definicionMercado02();
        }
    }); //pantalla 02
    $("#btninvAct").click(function () {
        inversionInicialActivos05A();
    }); //pantalla 05

    $("#btn_financiamiento").click(function(){
        if($("#btn_financiamiento").noEmpty()){
            financimiento08();
        }
    });//pantalla08

    validarPantalla08();

    $("#btnDeudas").click(function(){
        impuestos10();
    });//pantalla09

    // ejemplo de validaciones
    /* Estas funciones son bajo keypress asi que borrara todo lo que no sea permitido en automatico
        $("#id").soloLetrasyEspacio();
        $("#id").soloEnteros();
        $("#id").numerosDecimales();
        $("#id").rangoPorcentaje();

        La funcion que sigue valida todos los input y text area que esten detro de div.step well > div.row > div > input,textarea
        tengo entendio que todos pusiero nsus forms en esa estructura asi que debe servir para todos y regresa un booleano,como 
        ven funcina a partir de selccionar el boton del div donde estemos ya que de ahi va seleccionando su padre y este a lso input, se usa asi

        $("#btnDefinirProy").click(function () {
            if($("#btnDefinirProy").noEmpty()){
                defeinicionProyecto01();
            }
        }); 
         
         esta es importante por que por l oque veo la BD permite nulos y se peude neviuar un formulario totalmente vacio

    */
});

