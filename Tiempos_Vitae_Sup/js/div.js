$(document).ready(function(){
  //Ocultar Div
  $("#proceso").css("display","none");
  $("#paro").css("display","none");
  $("#paro1").css("display","none");
  $("#paro2").css("display","none");
  $("#paro3").css("display","none");
  
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
}); 
 
  
