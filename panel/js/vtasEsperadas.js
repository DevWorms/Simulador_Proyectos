$(document).ready(function () {
	$("#proyDemandaEsperada_VtasE1").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_PrecioVta1").val();
        $("#proyDemandaEsperada_VtasED1").val(total);
    });
    $("#proyDemandaEsperada_VtasE2").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_PrecioVta2").val();
        $("#proyDemandaEsperada_VtasED2").val(total);
    });
    $("#proyDemandaEsperada_VtasE3").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_PrecioVta3").val();
        $("#proyDemandaEsperada_VtasED3").val(total);
    });
    $("#proyDemandaEsperada_VtasE4").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_PrecioVta4").val();
        $("#proyDemandaEsperada_VtasED4").val(total);
    });
    $("#proyDemandaEsperada_VtasE5").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_PrecioVta5").val();
        $("#proyDemandaEsperada_VtasED5").val(total);
    });
    //================
    $("#proyDemandaEsperada_PrecioVta1").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_VtasE1").val();
        $("#proyDemandaEsperada_VtasED1").val(total);
    });
    $("#proyDemandaEsperada_PrecioVta2").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_VtasE2").val();
        $("#proyDemandaEsperada_VtasED2").val(total);
    });
    $("#proyDemandaEsperada_PrecioVta3").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_VtasE3").val();
        $("#proyDemandaEsperada_VtasED3").val(total);
    });
    $("#proyDemandaEsperada_PrecioVta4").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_VtasE4").val();
        $("#proyDemandaEsperada_VtasED4").val(total);
    });
    $("#proyDemandaEsperada_PrecioVta5").on('change keyup paste', function () {
        var total = $(this).val() * $("#proyDemandaEsperada_VtasE5").val();
        $("#proyDemandaEsperada_VtasED5").val(total);
    });
    //================
    $("#proyDemandaEsperada_VtasEP1").on('change keyup paste', function () {
        var total = ($(this).val() * $("#proyDemandaEsperada_VtasED1").val())/100;
        $("#proyDemandaEsperada_Monto1").val(total);
    });
    $("#proyDemandaEsperada_VtasEP2").on('change keyup paste', function () {
        var total = ($(this).val() * $("#proyDemandaEsperada_VtasED2").val())/100;
        $("#proyDemandaEsperada_Monto2").val(total);
    });
    $("#proyDemandaEsperada_VtasEP3").on('change keyup paste', function () {
        var total = ($(this).val() * $("#proyDemandaEsperada_VtasED3").val())/100;
        $("#proyDemandaEsperada_Monto3").val(total);
    });
    $("#proyDemandaEsperada_VtasEP4").on('change keyup paste', function () {
        var total = ($(this).val() * $("#proyDemandaEsperada_VtasED4").val())/100;
        $("#proyDemandaEsperada_Monto4").val(total);
    });
    $("#proyDemandaEsperada_VtasEP5").on('change keyup paste', function () {
        var total = ($(this).val() * $("#proyDemandaEsperada_VtasED5").val())/100;
        $("#proyDemandaEsperada_Monto5").val(total);
    });
    //================
    $("#proyDemandaEsperada_VtasEP21").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED1").val() - $("#proyDemandaEsperada_Monto1").val();
        $("#proyDemandaEsperada_Monto21").val(total);
    });
    $("#proyDemandaEsperada_VtasEP22").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED2").val() - $("#proyDemandaEsperada_Monto2").val();
        $("#proyDemandaEsperada_Monto22").val(total);
    });
    $("#proyDemandaEsperada_VtasEP23").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED3").val() - $("#proyDemandaEsperada_Monto3").val();
        $("#proyDemandaEsperada_Monto23").val(total);
    });
    $("#proyDemandaEsperada_VtasEP24").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED4").val() - $("#proyDemandaEsperada_Monto4").val();
        $("#proyDemandaEsperada_Monto24").val(total);
    });
    $("#proyDemandaEsperada_VtasEP25").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED5").val() - $("#proyDemandaEsperada_Monto5").val();
        $("#proyDemandaEsperada_Monto25").val(total);
    });
    //================
    $("#proyDemandaEsperada_VtasED1").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED1").val() - $("#proyDemandaEsperada_Monto1").val();
        $("#proyDemandaEsperada_Monto21").val(total);
    });
    $("#proyDemandaEsperada_VtasED2").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED2").val() - $("#proyDemandaEsperada_Monto2").val();
        $("#proyDemandaEsperada_Monto22").val(total);
    });
    $("#proyDemandaEsperada_VtasED3").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED3").val() - $("#proyDemandaEsperada_Monto3").val();
        $("#proyDemandaEsperada_Monto23").val(total);
    });
    $("#proyDemandaEsperada_VtasED4").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED4").val() - $("#proyDemandaEsperada_Monto4").val();
        $("#proyDemandaEsperada_Monto24").val(total);
    });
    $("#proyDemandaEsperada_VtasED5").on('change keyup paste', function () {
        var total = $("#proyDemandaEsperada_VtasED5").val() - $("#proyDemandaEsperada_Monto5").val();
        $("#proyDemandaEsperada_Monto25").val(total);
    });
});