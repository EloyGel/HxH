$(document).ready(function(){
  //Ocultar Div
  $("#proceso").css("display","none");
  $("#paro").css("display","none");
  
  $('#estatus').change(function(){
    if($('#estatus').val() == 'proceso'){   //Selección del estatus proceso
      $("#proceso").css("display","block");
      $("#paro").css("display","none");

      //$("#piezas").css("display","block");
    }
    if($('#estatus').val() == 'paro'){     //Selección del estatus paro
      $("#paro").css("display","block");
      $("#proceso").css("display","none");
    }
  })
});
 
  
