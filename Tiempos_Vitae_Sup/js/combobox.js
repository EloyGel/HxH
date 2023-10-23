/********************************SELECCION DE OT**************************************************/ 

$(document).ready(function(){
  $("#ot").change(function () {
    $("#ot option:selected").each(function () { 
       var id_ot = $(this).val();
        $.post("../../Controller/Combobox.php", { lote: id_ot }, function(data){
            $("#lote").html(data);
        });         
        $.post("../../Controller/Combobox.php", { prod: id_ot }, function(data){
            $("#producto").html(data);
        });    
        $.post("../../Controller/Combobox.php", { maquina: id_ot }, function(data){
            $("#maquina1").html(data);
        }); 
    });
  })
////////////////////////////////////Rechazos//////////////////////////////////////////////////////

  $("#maquinaR").change(function () {
    $("#maquinaR option:selected").each(function () { 
       var id_maquina = $(this).val(); 
       $.post("../../Controller/Combobox.php", { rechazo: id_maquina }, function(data){
           $("#rechazo").html(data);
        });            
    });
  })

/////////////////////////////////////Motivo de paro/////////////////////////////////////////////////

  $("#maquina").change(function () {
    $("#maquina option:selected").each(function () { 
       $("#motivo1").val("");
       $("#motivo2").val("");
       $("#motivo3").val("");
       var id_motivo = $(this).val();
       $.post("../../Controller/Combobox.php", { motivo: id_motivo }, function(data){
           $("#motivo").html(data);
        });            
    });
  })

  $("#motivo").change(function () {
    $("#motivo option:selected").each(function () { 
       $("#motivo2").val("");
       $("#motivo3").val("");
       var id_motivo1 = $(this).val();
       $.post("../../Controller/Combobox.php", { motivo1: id_motivo1 }, function(data){
           $("#motivo1").html(data);
        });            
    });
  })

  $("#motivo1").change(function () {
    $("#motivo1 option:selected").each(function () { 
       $("#motivo3").val("");
       var id_motivo2 = $(this).val();
       $.post("../../Controller/Combobox.php", { motivo2: id_motivo2 }, function(data){
           $("#motivo2").html(data);
        });            
    });
  })

  $("#motivo2").change(function () {
    $("#motivo2 option:selected").each(function () { 
       var id_motivo3 = $(this).val();
       $.post("../../Controller/Combobox.php", { motivo3: id_motivo3 }, function(data){
           $("#motivo3").html(data);
        });            
    });
  })


}); //document ready

/********************************MOTIVO DE PARO**************************************************

$(document).ready(function(){
    $("#maquina").change(function () {
        $("#maquina option:selected").each(function () { 
            $("#motivo1").val("");
            $("#motivo2").val("");
            $("#motivo3").val("");
            var id_motivo = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo: id_motivo }, function(data){
                $("#motivo").html(data);
            });            
        });
    })

    $("#motivo").change(function () {
        $("#motivo option:selected").each(function () { 
            $("#motivo2").val("");
            $("#motivo3").val("");
            var id_motivo1 = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo1: id_motivo1 }, function(data){
                $("#motivo1").html(data);
            });            
        });
    })

    $("#motivo1").change(function () {
        $("#motivo1 option:selected").each(function () { 
            $("#motivo3").val("");
            var id_motivo2 = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo2: id_motivo2 }, function(data){
                $("#motivo2").html(data);
            });            
        });
    })

    $("#motivo2").change(function () {
        $("#motivo2 option:selected").each(function () { 
            var id_motivo3 = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo3: id_motivo3 }, function(data){
                $("#motivo3").html(data);
            });            
        });
    })

});

/*$(document).ready(function(){
    $("#motivo").change(function () {
        $("#motivo option:selected").each(function () { 
            var id_motivo1 = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo1: id_motivo1 }, function(data){
                $("#motivo1").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#motivo1").change(function () {
        $("#motivo1 option:selected").each(function () { 
            var id_motivo2 = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo2: id_motivo2 }, function(data){
                $("#motivo2").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#motivo2").change(function () {
        $("#motivo2 option:selected").each(function () { 
            var id_motivo3 = $(this).val();
            $.post("../../Controller/Combobox.php", { motivo3: id_motivo3 }, function(data){
                $("#motivo3").html(data);
            });            
        });
    })
});*/

/********************************MOTIVO DE RECHAZO************************************************

$(document).ready(function(){
    $("#maquina").change(function () {
        $("#maquina option:selected").each(function () { 
            var id_maquina = $(this).val();
            $.post("../../Controller/Combobox.php", { rechazo: id_maquina }, function(data){
                $("#rechazo").html(data);
            });            
        });
    })
});

/*
$(document).ready(function(){ 
    $("#ot").change(function () {
        $("#ot option:selected").each(function () { 
            var id_ot = $(this).val();
            $.post("../../Controller/Combobox.php", { maquina: id_ot }, function(data){
                $("#maquina1").html(data);
            });            
        });
    })
});*/

/*$(document).ready(function(){
    $("#producto").change(function () {
        $("#lote1").val("");
        $("#producto option:selected").each(function () { 
            var id_part = $(this).val();
            $.post("../../Controller/Combobox.php", { ot: id_part }, function(data){
                $("#ot").html(data);
            });            
        });
    })
});*/