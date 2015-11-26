function PostFormulario(){}

function defeinicionProyecto01(){
    
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

$(document).ready(function(){
    $("#btnSiguiente").hide();

    $("#btnSiguiente").click(function(){
        alert("siguiente");
        $("#btnSiguiente").hide();
    });

	$("#btnDefinirProy").click(function(){defeinicionProyecto01();});
    
});

//hola