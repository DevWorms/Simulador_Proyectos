function PostFormulario(){}

function defeinicionProyecto01(){ //pantalla 01
    
    var nombre = $("#nombre_proyectodef01").val();
	var tipo = $("#tipo_proyectodef01").val();
	var unidad = $("#unidadmedida_proyectodef01").val();
	var descripcion = $("#descripcion_proyecto_def01").val();
	var caracterisitcas = $("#caracteristicas_proyecto_def01").val();

	var strPost = "nombre="+nombre+"&tipo="+tipo+"&unidad="+unidad+"&descripcion="+
					descripcion+"&caracterisitcas="+caracterisitcas;
	$.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST", 
        data: strPost+"&ID_pantalla=01",
        dataType: "text",
        url: "../class/PostTransaccion.php", 
        success: function (info) {          
        	if(info =="1"){
                $("#btnSiguiente").show();
                $("#btnDefinirProy").hide();
        	}
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function definicionMercado02(){ //pantalla 02
    if($("#defmerc_local").is(":checked")){
       var local = 1; 
    }else{
        var local = 0;
    }
    
    if($("#defmerc_regional").is(":checked")){
       var regional = 1; 
    }else{
        var regional = 0;
    }
    if($("#defmerc_nacional").is(":checked")){
       var nacional = 1; 
    }else{
        var nacional = 0;
    }
    if($("#defmerc_extranjero").is(":checked")){
       var extranjero = 1; 
    }else{
        var extranjero = 0;
    }

    var nse = $("#defmerc_nse").val();
    var escolaridad = $("#defmerc_escolaridad").val();
    var rangoedad = $("#defmerc_rangoedad").val();
    var descripcion = $("#defmerc_descripcion").val();

    var strPost = "local="+local+"&regional="+regional+"&nacional="+nacional+"&extranjero="+extranjero+
                    "&nse="+nse+"&escolaridad="+escolaridad+"&rangoedad="+rangoedad+"&descripcion="+descripcion;
    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST", 
        data: strPost+"&ID_pantalla=02",
        dataType: "text",
        url: "../class/PostTransaccion.php", 
        success: function (info) {          
            if(info =="1"){
                $("#btnSiguiente").show();
                $("#btnDefMerc").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

$(document).ready(function(){

    $("#btnSiguiente").hide();

    $("#btnSiguiente").click(function(){ $("#btnSiguiente").hide();});

	$("#btnDefinirProy").click(function(){defeinicionProyecto01();}); //pantalla 01
    $("#btnDefMerc").click(function(){definicionMercado02();}); //pantalla 02
    
});

//hola