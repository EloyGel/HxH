$(document).ready(function(){
    $("#producto").change(function () {
        console.log("Evento change del elemento #producto se ha disparado");
        $("#lote1").val("");
        $("#producto option:selected").each(function () { 
            var id_part = $(this).val();
            $.post("../Controller/Combobox.php", { ot: id_part }, function(data){
                $("#ot").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#ot").change(function () {
        $("#ot option:selected").each(function () { 
            var id_ot = $(this).val();
            $.post("../Controller/Combobox.php", { lote: id_ot }, function(data){
                $("#lote").html(data);
            });            
        });
    })
});