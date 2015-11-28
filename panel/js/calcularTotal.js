$(document).ready(function () {
    $("#invAct_Precio1").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad1").val();
        $("#invAct_Total1").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });

    $("#invAct_Precio2").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad2").val();
        $("#invAct_Total2").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Precio3").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad3").val();
        $("#invAct_Total3").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Precio4").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad4").val();
        $("#invAct_Total4").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Precio5").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad5").val();
        $("#invAct_Total5").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Precio6").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad6").val();
        $("#invAct_Total6").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Precio7").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Cantidad7").val();
        $("#invAct_Total7").val(total);
        //parseInt($('#Total1').val(), 10)
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });

    $("#invAct_Cantidad1").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio1").val();
        $("#invAct_Total1").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Cantidad2").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio2").val();
        $("#invAct_Total2").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Cantidad3").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio3").val();
        $("#invAct_Total3").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Cantidad4").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio4").val();
        $("#invAct_Total4").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Cantidad5").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio5").val();
        $("#invAct_Total5").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Cantidad6").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio6").val();
        $("#invAct_Total6").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invAct_Cantidad7").on('change keyup paste', function () {
        var total = $(this).val() * $("#invAct_Precio7").val();
        $("#invAct_Total7").val(total);
        var totalT = (parseFloat($('#invAct_Total1').val(), 10) +
                parseFloat($('#invAct_Total2').val(), 10) +
                parseFloat($('#invAct_Total3').val(), 10) +
                parseFloat($('#invAct_Total4').val(), 10) +
                parseFloat($('#invAct_Total5').val(), 10) +
                parseFloat($('#invAct_Total6').val(), 10) +
                parseFloat($('#invAct_Total7').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invAct_Total8").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });

    //Seccion B
    $("#invActb_Monto1").on('change keyup paste', function () {
        var totalT = (parseFloat($('#invActb_Monto1').val(), 10) +
                parseFloat($('#invActb_Monto2').val(), 10) +
                parseFloat($('#invActb_Monto3').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invActb_Monto4").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    $("#invActb_Monto2").on('change keyup paste', function () {
        var totalT = (parseFloat($('#invActb_Monto1').val(), 10) +
                parseFloat($('#invActb_Monto2').val(), 10) +
                parseFloat($('#invActb_Monto3').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invActb_Monto4").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });
    
    $("#invActb_Monto3").on('change keyup paste', function () {
        var totalT = (parseFloat($('#invActb_Monto1').val(), 10) +
                parseFloat($('#invActb_Monto2').val(), 10) +
                parseFloat($('#invActb_Monto3').val(), 10)
                );
        totalT = Math.round(totalT*10)/10;
        $("#invActb_Monto4").val(totalT);
        
        var total2 = parseFloat($('#invAct_Total8').val(), 10) + parseFloat($('#invActb_Monto4').val(), 10);
        $("#invActc_Capital").val(total2);
    });

    //Seccion C
    $("#invActc_pocentaje1").on('change keyup paste', function () {
        var totalT = (parseFloat($('#invActc_pocentaje1').val(), 10) *
                parseFloat($('#invActc_Capital').val(), 10)
                ) / 100;
        totalT = Math.round(totalT*10)/10;
        $("#invActc_Monto1").val(totalT);
    });
    $("#invActc_pocentaje2").on('change keyup paste', function () {
        var totalT = (parseFloat($('#invActc_pocentaje2').val(), 10) *
                parseFloat($('#invActc_Capital').val(), 10)
                ) / 100;
        totalT = Math.round(totalT*10)/10;
        $("#invActc_Monto2").val(totalT);
    });
});