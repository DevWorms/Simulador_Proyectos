function PostFormulario() {}

/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            
                           LLENADO DE FORMULARIOS

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

function defeinicionProyecto01() { //PANTALLA 1

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

function definicionMercado02() { //PANTALLA 2
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

function proyMercado3() { //PANTALLA 3
    //
    var proymerc_periodo1 = $("#proymerc_periodo1").val();    
    var proymerc_periodo2 = $("#proymerc_periodo2").val();
    var proymerc_periodo3 = $("#proymerc_periodo3").val();
    var proymerc_periodo4 = $("#proymerc_periodo4").val();
    var proymerc_periodo5 = $("#proymerc_periodo5").val();

    
    var proymerc_univenta1 =$("#proymerc_univenta1").val();
    var proymerc_univenta2 =$("#proymerc_univenta2").val();
    var proymerc_univenta3 =$("#proymerc_univenta3").val();
    var proymerc_univenta4 =$("#proymerc_univenta4").val();
    var proymerc_univenta5 =$("#proymerc_univenta5").val();

    
    var proymerc_precio1 =$("#proymerc_precio1").val();
    var proymerc_precio2 =$("#proymerc_precio2").val();
    var proymerc_precio3 =$("#proymerc_precio3").val();
    var proymerc_precio4 =$("#proymerc_precio4").val();
    var proymerc_precio5 =$("#proymerc_precio5").val();

    
    var proymerc_inflacion1 =$("#proymerc_inflacion1").val();
    var proymerc_inflacion2 =$("#proymerc_inflacion2").val();
    var proymerc_inflacion3 =$("#proymerc_inflacion3").val();
    var proymerc_inflacion4 =$("#proymerc_inflacion4").val();
    var proymerc_inflacion5 =$("#proymerc_inflacion5").val();

    
    var proymerc_precioventa1 =$("#proymerc_precioventa1").val();
    var proymerc_precioventa2 =$("#proymerc_precioventa2").val();
    var proymerc_precioventa3 =$("#proymerc_precioventa3").val();
    var proymerc_precioventa4 =$("#proymerc_precioventa4").val();
    var proymerc_precioventa5 =$("#proymerc_precioventa5").val();

    var strPost = "proymerc_periodo1=" + proymerc_periodo1 +
    "&proymerc_periodo2=" + proymerc_periodo2 +
    "&proymerc_periodo3=" + proymerc_periodo3 +
    "&proymerc_periodo4=" + proymerc_periodo4 +
    "&proymerc_periodo5=" + proymerc_periodo5 +
    "&proymerc_univenta1=" + proymerc_univenta1 +
    "&proymerc_univenta2=" + proymerc_univenta2 +
    "&proymerc_univenta3=" + proymerc_univenta3 +
    "&proymerc_univenta4=" + proymerc_univenta4 +
    "&proymerc_univenta5=" + proymerc_univenta5 +
    "&proymerc_precio1=" + proymerc_precio1 +
    "&proymerc_precio2=" + proymerc_precio2 +
    "&proymerc_precio3=" + proymerc_precio3 +
    "&proymerc_precio4=" + proymerc_precio4 +
    "&proymerc_precio5=" + proymerc_precio5 +
    "&proymerc_inflacion1=" + proymerc_inflacion1 +
    "&proymerc_inflacion2=" + proymerc_inflacion2 +
    "&proymerc_inflacion3=" + proymerc_inflacion3 +
    "&proymerc_inflacion4=" + proymerc_inflacion4 +
    "&proymerc_inflacion5=" + proymerc_inflacion5 +
    "&proymerc_precioventa1=" + proymerc_precioventa1 +
    "&proymerc_precioventa2=" + proymerc_precioventa2 +
    "&proymerc_precioventa3=" + proymerc_precioventa3 +
    "&proymerc_precioventa4=" + proymerc_precioventa4 +
    "&proymerc_precioventa5=" + proymerc_precioventa5;
                 

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=03",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                llenarForma4();
                $("#btnProyPrecMerc").hide();
            }   else {             
            }
        },
        error: function (error) {
            console.log(error);
        }
    });

}   

function proyDemandaEsperada4() { //PANTALLA 4

    var proyDemandaEsperada_Per1 = $("#proyDemandaEsperada_Per1").val();
    var proyDemandaEsperada_Per2 = $("#proyDemandaEsperada_Per2").val();
    var proyDemandaEsperada_Per3 = $("#proyDemandaEsperada_Per3").val();
    var proyDemandaEsperada_Per4 = $("#proyDemandaEsperada_Per4").val();
    var proyDemandaEsperada_Per5 = $("#proyDemandaEsperada_Per5").val();

    var proyDemandaEsperada_VtasE1 = $("#proyDemandaEsperada_VtasE1").val();
    var proyDemandaEsperada_VtasE2 = $("#proyDemandaEsperada_VtasE2").val();
    var proyDemandaEsperada_VtasE3 = $("#proyDemandaEsperada_VtasE3").val();
    var proyDemandaEsperada_VtasE4 = $("#proyDemandaEsperada_VtasE4").val();
    var proyDemandaEsperada_VtasE5 = $("#proyDemandaEsperada_VtasE5").val();

    var proyDemandaEsperada_PrecioVta1 = $("#proyDemandaEsperada_PrecioVta1").val();
    var proyDemandaEsperada_PrecioVta2 = $("#proyDemandaEsperada_PrecioVta2").val();
    var proyDemandaEsperada_PrecioVta3 = $("#proyDemandaEsperada_PrecioVta3").val();
    var proyDemandaEsperada_PrecioVta4 = $("#proyDemandaEsperada_PrecioVta4").val();
    var proyDemandaEsperada_PrecioVta5 = $("#proyDemandaEsperada_PrecioVta5").val();

    var proyDemandaEsperada_VtasED1 = $("#proyDemandaEsperada_VtasED1").val();
    var proyDemandaEsperada_VtasED2 = $("#proyDemandaEsperada_VtasED2").val();
    var proyDemandaEsperada_VtasED3 = $("#proyDemandaEsperada_VtasED3").val();
    var proyDemandaEsperada_VtasED4 = $("#proyDemandaEsperada_VtasED4").val();
    var proyDemandaEsperada_VtasED5 = $("#proyDemandaEsperada_VtasED5").val();

    var proyDemandaEsperada_VtasEP1 = $("#proyDemandaEsperada_VtasEP1").val();
    var proyDemandaEsperada_VtasEP2 = $("#proyDemandaEsperada_VtasEP2").val();
    var proyDemandaEsperada_VtasEP3 = $("#proyDemandaEsperada_VtasEP3").val();
    var proyDemandaEsperada_VtasEP4 = $("#proyDemandaEsperada_VtasEP4").val();
    var proyDemandaEsperada_VtasEP5 = $("#proyDemandaEsperada_VtasEP5").val();

    var proyDemandaEsperada_Monto1 = $("#proyDemandaEsperada_Monto1").val();
    var proyDemandaEsperada_Monto2 = $("#proyDemandaEsperada_Monto2").val();
    var proyDemandaEsperada_Monto3 = $("#proyDemandaEsperada_Monto3").val();
    var proyDemandaEsperada_Monto4 = $("#proyDemandaEsperada_Monto4").val();
    var proyDemandaEsperada_Monto5 = $("#proyDemandaEsperada_Monto5").val();

    var proyDemandaEsperada_VtasEP21 = $("#proyDemandaEsperada_VtasEP21").val();
    var proyDemandaEsperada_VtasEP22 = $("#proyDemandaEsperada_VtasEP22").val();
    var proyDemandaEsperada_VtasEP23 = $("#proyDemandaEsperada_VtasEP23").val();
    var proyDemandaEsperada_VtasEP24 = $("#proyDemandaEsperada_VtasEP24").val();
    var proyDemandaEsperada_VtasEP25 = $("#proyDemandaEsperada_VtasEP25").val();

    var proyDemandaEsperada_Monto21 = $("#proyDemandaEsperada_Monto21").val();
    var proyDemandaEsperada_Monto22 = $("#proyDemandaEsperada_Monto22").val();
    var proyDemandaEsperada_Monto23 = $("#proyDemandaEsperada_Monto23").val();
    var proyDemandaEsperada_Monto24 = $("#proyDemandaEsperada_Monto24").val();
    var proyDemandaEsperada_Monto25 = $("#proyDemandaEsperada_Monto25").val();

    var strPost = "proyDemandaEsperada_VtasEP1=" + proyDemandaEsperada_VtasEP1 + "&proyDemandaEsperada_VtasEP2=" + proyDemandaEsperada_VtasEP2 + "&proyDemandaEsperada_VtasEP3=" + proyDemandaEsperada_VtasEP3 + "&proyDemandaEsperada_VtasEP4=" + proyDemandaEsperada_VtasEP4 + "&proyDemandaEsperada_VtasEP5=" + proyDemandaEsperada_VtasEP5 + "&proyDemandaEsperada_Monto1=" +
proyDemandaEsperada_Monto1 + "&proyDemandaEsperada_Monto2=" + proyDemandaEsperada_Monto2 + "&proyDemandaEsperada_Monto3=" + proyDemandaEsperada_Monto3 + "&proyDemandaEsperada_Monto4=" + proyDemandaEsperada_Monto4 + "&proyDemandaEsperada_Monto5=" + proyDemandaEsperada_Monto5 + "&proyDemandaEsperada_VtasEP21=" + proyDemandaEsperada_VtasEP21 + "&proyDemandaEsperada_VtasEP22=" +
proyDemandaEsperada_VtasEP22 + "&proyDemandaEsperada_VtasEP23=" + proyDemandaEsperada_VtasEP23 + "&proyDemandaEsperada_VtasEP24=" + proyDemandaEsperada_VtasEP24 + "&proyDemandaEsperada_VtasEP25=" + proyDemandaEsperada_VtasEP25 + "&proyDemandaEsperada_Monto21=" + proyDemandaEsperada_Monto21 + "&proyDemandaEsperada_Monto22=" + proyDemandaEsperada_Monto22 + "&proyDemandaEsperada_Monto23=" + proyDemandaEsperada_Monto23 + "&proyDemandaEsperada_Monto24=" + proyDemandaEsperada_Monto24 + "&proyDemandaEsperada_Monto25=" + proyDemandaEsperada_Monto25 + "&proyDemandaEsperada_Per1=" + proyDemandaEsperada_Per1 +
    "&proyDemandaEsperada_Per2=" + proyDemandaEsperada_Per2 + "&proyDemandaEsperada_Per3=" +
    proyDemandaEsperada_Per3 + "&proyDemandaEsperada_Per4=" + proyDemandaEsperada_Per4 +
    "&proyDemandaEsperada_Per5=" + proyDemandaEsperada_Per5 + "&proyDemandaEsperada_VtasE1=" +
    proyDemandaEsperada_VtasE1 + "&proyDemandaEsperada_VtasE2=" + proyDemandaEsperada_VtasE2 +
    "&proyDemandaEsperada_VtasE3=" + proyDemandaEsperada_VtasE3 + "&proyDemandaEsperada_VtasE4=" +
    proyDemandaEsperada_VtasE4 + "&proyDemandaEsperada_VtasE5=" + proyDemandaEsperada_VtasE5 +
    "&proyDemandaEsperada_PrecioVta1=" + proyDemandaEsperada_PrecioVta1 + "&proyDemandaEsperada_PrecioVta2=" +
    proyDemandaEsperada_PrecioVta2 + "&proyDemandaEsperada_PrecioVta3=" + proyDemandaEsperada_PrecioVta3 +
    "&proyDemandaEsperada_PrecioVta4=" + proyDemandaEsperada_PrecioVta4 + "&proyDemandaEsperada_PrecioVta5=" +
    proyDemandaEsperada_PrecioVta5 + "&proyDemandaEsperada_VtasEP1=" + proyDemandaEsperada_VtasEP1 +
    "&proyDemandaEsperada_VtasEP2=" + proyDemandaEsperada_VtasEP2 + "&proyDemandaEsperada_VtasEP3=" +
    proyDemandaEsperada_VtasEP3 + "&proyDemandaEsperada_VtasEP4=" + proyDemandaEsperada_VtasEP4 +
    "&proyDemandaEsperada_VtasEP5=" + proyDemandaEsperada_VtasEP5;

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=04",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btnproyDemandaEsperada").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function inversionInicialActivos05A() { //PANTALLA 5-A
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

function inversionInicialActivos05B() { ///PANTALLA 5-B
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

function inversionInicialActivos05C() { ////PANTALLA 5-C
    var capitalT = $("#invActc_Capital").val();
    var capitalPP = parseFloat($("#invActc_pocentaje1").val()) / 100;
    var capitalPM = $("#invActc_Monto1").val();
    var financiamientoP = parseFloat($("#invActc_pocentaje2").val()) / 100;
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
                getCapitales();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function getCapitales() { //PANTALLAS 5, 6 & 7

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: "&ID_pantalla=0607",
        dataType: "json",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            $("#capitalPropio").html("$ " + info.Monto_propio);
            $("#capitalFinanciar").html("$ " + info.Monto_financ);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function financimiento08() { //PANTALLA 8
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
                llenarForma9();
                $("#btn_financiamiento").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function deuda9() { //PANTALLA 9
    //
    var periodo_deuda1 = $("#periodo_deuda1").val();          
    var periodo_deuda2 = $("#periodo_deuda2").val();
    var periodo_deuda3 = $("#periodo_deuda3").val();
    var periodo_deuda4 = $("#periodo_deuda4").val();
    var periodo_deuda5 = $("#periodo_deuda5").val();

    var monto_deuda1 = $("#monto_deuda1").val();                
    var monto_deuda2 = $("#monto_deuda2").val();    
    var monto_deuda3 = $("#monto_deuda3").val();    
    var monto_deuda4 = $("#monto_deuda4").val();    
    var monto_deuda5 = $("#monto_deuda5").val();    

    var fijo_deuda1 = $("#fijo_deuda1").val();                
    var fijo_deuda2 = $("#fijo_deuda2").val();      
    var fijo_deuda3 = $("#fijo_deuda3").val();      
    var fijo_deuda4 = $("#fijo_deuda4").val();      
    var fijo_deuda5 = $("#fijo_deuda5").val();      

    var interes_deuda1 = $("#interes_deuda1").val();                
    var interes_deuda2 = $("#interes_deuda2").val();
    var interes_deuda3 = $("#interes_deuda3").val();
    var interes_deuda4 = $("#interes_deuda4").val();
    var interes_deuda5 = $("#interes_deuda5").val();

    var capital_deuda1 = $("#capital_deuda1").val();                   
    var capital_deuda2 = $("#capital_deuda2").val();
    var capital_deuda3 = $("#capital_deuda3").val();
    var capital_deuda4 = $("#capital_deuda4").val();
    var capital_deuda5 = $("#capital_deuda5").val();


    var strPost = 
    "periodo_deuda1=" + periodo_deuda1 +
    "&periodo_deuda2=" + periodo_deuda2 +
    "&periodo_deuda3=" + periodo_deuda3 +
    "&periodo_deuda4=" + periodo_deuda4 +
    "&periodo_deuda5=" + periodo_deuda5 +
    "&monto_deuda1=" + monto_deuda1 +
    "&monto_deuda2=" + monto_deuda2 +
    "&monto_deuda3=" + monto_deuda3 +
    "&monto_deuda4=" + monto_deuda4 +
    "&monto_deuda5=" + monto_deuda5 +
    "&fijo_deuda1=" + fijo_deuda1 +
    "&fijo_deuda2=" + fijo_deuda2 +
    "&fijo_deuda3=" + fijo_deuda3 +
    "&fijo_deuda4=" + fijo_deuda4 +
    "&fijo_deuda5=" + fijo_deuda5 +
    "&interes_deuda1=" + interes_deuda1 +
    "&interes_deuda2=" + interes_deuda2 +
    "&interes_deuda3=" + interes_deuda3 +
    "&interes_deuda4=" + interes_deuda4 +
    "&interes_deuda5=" + interes_deuda5 +
    "&capital_deuda1=" + capital_deuda1+
    "&capital_deuda2=" + capital_deuda2+
    "&capital_deuda3=" + capital_deuda3+
    "&capital_deuda4=" + capital_deuda4+
    "&capital_deuda5=" + capital_deuda5;



    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=09",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {

            console.log(strPost);
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btn_Deuda").hide();
            }   else {             
            }
        },
        error: function (error) {
            console.log(error);
        }
    });

}

function impuesto10() { //PANTALLA 10
    var impuesto = $("#impuesto").val();
    var porcentaje = $("#porcentaje").val();
    var concepto = $("#concepto").val();

    var strPost = "impuesto=" + impuesto +
            "&porcentaje=" + porcentaje + "&concepto=" + concepto;

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=10",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btn_financiamiento").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function descuento11() { //PANTALLA 11
    var descuento = $("#descuento").val();

    var strPost = "descuento=" + descuento;

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=11",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                llenarForma12();
                $("#btn_financiamiento").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function costos12() { //PANTALLA 12
    var periodo_costos1 = $("#periodo_costos1").val();
    var periodo_costos2 = $("#periodo_costos2").val();
    var periodo_costos3 = $("#periodo_costos3").val();
    var periodo_costos4 = $("#periodo_costos4").val();
    var periodo_costos5 = $("#periodo_costos5").val();

    var ventas_costos1 = $("#ventas_costos1").val();
    var ventas_costos2 = $("#ventas_costos2").val();
    var ventas_costos3 = $("#ventas_costos3").val();
    var ventas_costos4 = $("#ventas_costos4").val();
    var ventas_costos5 = $("#ventas_costos5").val();

    var utilidad_costos1 = $("#utilidad_costos1").val();
    var utilidad_costos2 = $("#utilidad_costos2").val();
    var utilidad_costos3 = $("#utilidad_costos3").val();
    var utilidad_costos4 = $("#utilidad_costos4").val();
    var utilidad_costos5 = $("#utilidad_costos5").val();

    var total_costos1 = $("#total_costos1").val();
    var total_costos2 = $("#total_costos2").val();
    var total_costos3 = $("#total_costos3").val();
    var total_costos4 = $("#total_costos4").val();
    var total_costos5 = $("#total_costos5").val();

    var porc_prod_costos1 = $("#porc_prod_costos1").val();
    var porc_prod_costos2 = $("#porc_prod_costos2").val();
    var porc_prod_costos3 = $("#porc_prod_costos3").val();
    var porc_prod_costos4 = $("#porc_prod_costos4").val();
    var porc_prod_costos5 = $("#porc_prod_costos5").val();

    var produccion_costos1 = $("#produccion_costos1").val();
    var produccion_costos2 = $("#produccion_costos2").val();
    var produccion_costos3 = $("#produccion_costos3").val();
    var produccion_costos4 = $("#produccion_costos4").val();
    var produccion_costos5 = $("#produccion_costos5").val();

    var porc_admin_costos1 = $("#porc_admin_costos1").val();
    var porc_admin_costos2 = $("#porc_admin_costos2").val();
    var porc_admin_costos3 = $("#porc_admin_costos3").val();
    var porc_admin_costos4 = $("#porc_admin_costos4").val();
    var porc_admin_costos5 = $("#porc_admin_costos5").val();

    var admin_costos1 = $("#admin_costos1").val();
    var admin_costos2 = $("#admin_costos2").val();
    var admin_costos3 = $("#admin_costos3").val();
    var admin_costos4 = $("#admin_costos4").val();
    var admin_costos5 = $("#admin_costos5").val();

    var porc_ventas_costos1 = $("#porc_ventas_costos1").val();
    var porc_ventas_costos2 = $("#porc_ventas_costos2").val();
    var porc_ventas_costos3 = $("#porc_ventas_costos3").val();
    var porc_ventas_costos4 = $("#porc_ventas_costos4").val();
    var porc_ventas_costos5 = $("#porc_ventas_costos5").val();

    var g_ventas_costos1 = $("#g_ventas_costos1").val();
    var g_ventas_costos2 = $("#g_ventas_costos2").val();
    var g_ventas_costos3 = $("#g_ventas_costos3").val();
    var g_ventas_costos4 = $("#g_ventas_costos4").val();
    var g_ventas_costos5 = $("#g_ventas_costos5").val();


    var strPost = 
    "periodo_costos1=" + periodo_costos1 +  "&ventas_costos1=" + ventas_costos1 + "&utilidad_costos1=" + utilidad_costos1 +
    "&periodo_costos2=" + periodo_costos2 + "&ventas_costos2=" + ventas_costos2 + "&utilidad_costos2=" + utilidad_costos2 +
    "&periodo_costos3=" + periodo_costos3 + "&ventas_costos3=" + ventas_costos3 + "&utilidad_costos3=" + utilidad_costos3 +
    "&periodo_costos4=" + periodo_costos4 + "&ventas_costos4=" + ventas_costos4 + "&utilidad_costos4=" + utilidad_costos4 +
    "&periodo_costos5=" + periodo_costos5 + "&ventas_costos5=" + ventas_costos5 + "&utilidad_costos5=" + utilidad_costos5 +
    "&total_costos1=" + total_costos1 + "&porc_prod_costos1=" + porc_prod_costos1 + "&produccion_costos1=" + produccion_costos1 +  
    "&total_costos2=" + total_costos2 + "&porc_prod_costos2=" + porc_prod_costos2 + "&produccion_costos2=" + produccion_costos2 +  
    "&total_costos3=" + total_costos3 + "&porc_prod_costos3=" + porc_prod_costos3 + "&produccion_costos3=" + produccion_costos3 +  
    "&total_costos4=" + total_costos4 + "&porc_prod_costos4=" + porc_prod_costos4 + "&produccion_costos4=" + produccion_costos4 +  
    "&total_costos5=" + total_costos5 + "&porc_prod_costos5=" + porc_prod_costos5 + "&produccion_costos5=" + produccion_costos5 +
    "&porc_admin_costos1=" + porc_admin_costos1 + "&admin_costos1=" + admin_costos1 + "&porc_ventas_costos1=" + porc_ventas_costos1 +
    "&porc_admin_costos2=" + porc_admin_costos2 + "&admin_costos2=" + admin_costos2 + "&porc_ventas_costos2=" + porc_ventas_costos1 +
    "&porc_admin_costos3=" + porc_admin_costos3 + "&admin_costos3=" + admin_costos3 + "&porc_ventas_costos3=" + porc_ventas_costos1 +
    "&porc_admin_costos4=" + porc_admin_costos4 + "&admin_costos4=" + admin_costos4 + "&porc_ventas_costos4=" + porc_ventas_costos1 +
    "&porc_admin_costos5=" + porc_admin_costos5 + "&admin_costos5=" + admin_costos5 + "&porc_ventas_costos5=" + porc_ventas_costos1 +
    "&g_ventas_costos1=" + g_ventas_costos1 +
    "&g_ventas_costos2=" + g_ventas_costos2 +
    "&g_ventas_costos3=" + g_ventas_costos3 +
    "&g_ventas_costos4=" + g_ventas_costos4 +
    "&g_ventas_costos5=" + g_ventas_costos5;


    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: strPost + "&ID_pantalla=12",
        dataType: "text",
        url: "../class/PostTransaccion.php",
        success: function (info) {

            console.log(strPost);
            if (info == "1") {
                $("#btnSiguiente").show();
                $("#btn_financiamiento").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}


/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            
                           AUXILIARES DE FORMULARIOS

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

function validarPantalla08(){

    $("#interesFinac").numerosDecimales();
    $("#interesFinac").rangoPorcentaje();
    $("#plazoFinac").numerosEnteros();
    $("#graciaFinac").numerosEnteros();

}

function llenarForma4() {
    var precioVta1 = $("#proymerc_precioventa1").val();
    var precioVta2 = $("#proymerc_precioventa2").val();
    var precioVta3 = $("#proymerc_precioventa3").val();
    var precioVta4 = $("#proymerc_precioventa4").val();
    var precioVta5 = $("#proymerc_precioventa5").val();

    $("#proyDemandaEsperada_PrecioVta1").val(precioVta1);
    $("#proyDemandaEsperada_PrecioVta2").val(precioVta2);
    $("#proyDemandaEsperada_PrecioVta3").val(precioVta3);
    $("#proyDemandaEsperada_PrecioVta4").val(precioVta4);
    $("#proyDemandaEsperada_PrecioVta5").val(precioVta5);

}

function llenarForma9() {

    //  Monto 0
    $("#monto_deuda0").val($("#invActc_Monto2").val());

    var montoInicial = $("#monto_deuda0").val();

    // FÓRMULA Y LLENADO DE PAGO FIJO
    var dividendo;
    var divisor;
    var resultado;

    var interesFinal = $("#interesFinac").val();
    var plazoFinal = $("#plazoFinac").val();

    dividendo = interesFinal * [Math.pow((1+interesFinal), plazoFinal)];
    divisor = [Math.pow((1+interesFinal), plazoFinal)] - 1;

    pago_fijo = (dividendo/divisor)*montoInicial;

    $("#fijo_deuda1").val(pago_fijo);
    $("#fijo_deuda2").val(pago_fijo);
    $("#fijo_deuda3").val(pago_fijo);
    $("#fijo_deuda4").val(pago_fijo);
    $("#fijo_deuda5").val(pago_fijo);


    /*  LLENADO DE TABLA */

    //  FILA 1                   
    $("#interes_deuda1").val($("#interesFinac").val() * montoInicial);
    $("#capital_deuda1").val($("#fijo_deuda1").val() - $("#interes_deuda1").val());
    $("#monto_deuda1").val(montoInicial - $("#capital_deuda1").val());

    //  FILA 2                   
    $("#interes_deuda2").val($("#interesFinac").val() * $("#monto_deuda1").val());
    $("#capital_deuda2").val($("#fijo_deuda2").val() - $("#interes_deuda2").val());
    $("#monto_deuda2").val($("#monto_deuda1").val() - $("#capital_deuda2").val()); 

    //  FILA 3                   
    $("#interes_deuda3").val($("#interesFinac").val() * $("#monto_deuda2").val());
    $("#capital_deuda3").val($("#fijo_deuda3").val() - $("#interes_deuda3").val());
    $("#monto_deuda3").val($("#monto_deuda2").val() - $("#capital_deuda3").val()); 

    //  FILA 4                   
    $("#interes_deuda4").val($("#interesFinac").val() * $("#monto_deuda3").val());
    $("#capital_deuda4").val($("#fijo_deuda4").val() - $("#interes_deuda4").val());
    $("#monto_deuda4").val($("#monto_deuda3").val() - $("#capital_deuda4").val()); 

    //  FILA 5                   
    $("#interes_deuda5").val($("#interesFinac").val() * $("#monto_deuda4").val());
    $("#capital_deuda5").val($("#fijo_deuda5").val() - $("#interes_deuda5").val());
    $("#monto_deuda5").val($("#monto_deuda4").val() - $("#capital_deuda5").val());
}


function llenarForma12() {

    $("#ventas_costos1").val($("#proyDemandaEsperada_VtasED1").val());
    $("#ventas_costos2").val($("#proyDemandaEsperada_VtasED2").val());
    $("#ventas_costos3").val($("#proyDemandaEsperada_VtasED3").val());
    $("#ventas_costos4").val($("#proyDemandaEsperada_VtasED4").val());
    $("#ventas_costos5").val($("#proyDemandaEsperada_VtasED5").val());

}


/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            
                           FUNCIONES AUXILIARES

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

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


    //pantalla 01
    $("#btnDefinirProy").click(function () {
        if($("#btnDefinirProy").noEmpty()){
            defeinicionProyecto01();
        }
    }); 

    //pantalla 02
    $("#btnDefMerc").click(function () {
        if($("#btnDefMerc").noEmpty()){
            definicionMercado02();
        }
    });

    //pantalla 03
    $("#btnProyPrecMerc").click(function () {
        if($("#btnProyPrecMerc").noEmpty()){
            proyMercado3();
        }
    });

    //pantalla 04
    $("#btnproyDemandaEsperada").click(function () {
            proyDemandaEsperada4();
    });

    //pantalla 05
    $("#btninvAct").click(function () {      
            inversionInicialActivos05A();
    }); 

    //pantalla 08
    $("#btn_financiamiento").click(function () {
            financimiento08();
    });

    //pantalla 09
    $("#btn_Deuda").click(function () {
        if($("#btn_Deuda").noEmpty()){
            deuda9();
        }
    });

    //pantalla 10
    $("#btn_Impuesto").click(function () {
            impuesto10();
    });  

    //pantalla 11
    $("#btn_Descuento").click(function () {
        if($("#btn_Descuento").noEmpty()){
            descuento11();
        }
    });   

    //pantalla 12
    $("#btn_Costos").click(function () {
            costos12();
    });   

});
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
