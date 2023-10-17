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
});

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