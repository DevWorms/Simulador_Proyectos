$(document).ready(function () {

    $("#utilidad_costos1").on('change keyup paste', function () {
        var porcentaje = $(this).val() * $("#ventas_costos1").val();
        var resultado = $("#ventas_costos1").val() - porcentaje;
        $("#total_costos1").val(resultado);
    });
    $("#utilidad_costos2").on('change keyup paste', function () {
        var porcentaje = $(this).val() * $("#ventas_costos2").val();
        var resultado = $("#ventas_costos2").val() - porcentaje;
        $("#total_costos2").val(resultado);
    });
    $("#utilidad_costos3").on('change keyup paste', function () {
        var porcentaje = $(this).val() * $("#ventas_costos3").val();
        var resultado = $("#ventas_costos3").val() - porcentaje;
        $("#total_costos3").val(resultado);
    });
    $("#utilidad_costos4").on('change keyup paste', function () {
        var porcentaje = $(this).val() * $("#ventas_costos4").val();
        var resultado = $("#ventas_costos4").val() - porcentaje;
        $("#total_costos4").val(resultado);
    });
    $("#utilidad_costos5").on('change keyup paste', function () {
        var porcentaje = $(this).val() * $("#ventas_costos5").val();
        var resultado = $("#ventas_costos5").val() - porcentaje;
        $("#total_costos5").val(resultado);
    });

    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    $("#porc_prod_costos1").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos1").val();
        $("#produccion_costos1").val(resultado);
    });
    $("#porc_prod_costos2").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos2").val();
        $("#produccion_costos2").val(resultado);
    });
    $("#porc_prod_costos3").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos3").val();
        $("#produccion_costos3").val(resultado);
    });
    $("#porc_prod_costos4").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos4").val();
        $("#produccion_costos4").val(resultado);
    });
    $("#porc_prod_costos5").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos5").val();
        $("#produccion_costos5").val(resultado);
    });

    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    $("#porc_admin_costos1").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos1").val();
        $("#admin_costos1").val(resultado);
    });
    $("#porc_admin_costos2").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos2").val();
        $("#admin_costos2").val(resultado);
    });
    $("#porc_admin_costos3").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos3").val();
        $("#admin_costos3").val(resultado);
    });
    $("#porc_admin_costos4").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos4").val();
        $("#admin_costos4").val(resultado);
    });
    $("#porc_admin_costos5").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos5").val();
        $("#admin_costos5").val(resultado);
    });

    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    $("#porc_ventas_costos1").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos1").val();
        $("#g_ventas_costos1").val(resultado);
    });
    $("#porc_ventas_costos2").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos2").val();
        $("#g_ventas_costos2").val(resultado);
    });
    $("#porc_ventas_costos3").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos3").val();
        $("#g_ventas_costos3").val(resultado);
    });
    $("#porc_ventas_costos4").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos4").val();
        $("#g_ventas_costos4").val(resultado);
    });
    $("#porc_ventas_costos5").on('change keyup paste', function () {
        var resultado = $(this).val() * $("#total_costos5").val();
        $("#g_ventas_costos5").val(resultado);
    });


});