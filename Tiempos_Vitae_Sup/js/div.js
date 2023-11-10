$(document).ready(function(){
  //Ocultar Div
  $("#proceso").css("display","none");
  $("#paro").css("display","none");
  $("#paro1").css("display","none");
  $("#paro2").css("display","none");
  $("#paro3").css("display","none");
  $("#n1").css("display","none");
  $("#n2").css("display","none");
  $("#n3").css("display","none");
  $("#n4").css("display","none");
  
  $('#estatus').change(function(){
    if($('#estatus').val() == 'proceso'){   //Selección del estatus proceso
      $("#proceso").css("display","block");
      $("#paro").css("display","none");

      //$("#piezas").css("display","block");
    }
    if($('#estatus').val() == 'paro'){     //Selección del estatus paro
      $("#paro").css("display","block");
      $("#proceso").css("display","none");
      
     $('#paro').change(function(){
      $("#paro1").css("display","block");
     })

     $('#paro1').change(function(){
      $("#paro2").css("display","block");
     })

     $('#paro2').change(function(){
      $("#paro3").css("display","block"); 
     })

    }
  })

  $('#motivo').change(function(){
   if($('#motivo').val() == 'RECHAZO'){
    $("#n1").css("display","block");
    $("#n2").css("display","none");
    $("#n3").css("display","none");
    $("#n4").css("display","none");
   }else
   {
    $("#n1").css("display","block");
    $("#n2").css("display","block");
    $("#n3").css("display","block");
    $("#n4").css("display","block");
   }


  })
}); 
 
  
