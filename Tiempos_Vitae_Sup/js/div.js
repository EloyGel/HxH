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

  $('#motivos').change(function(){
   if($('#motivos').val() == 'RECHAZO'){
    $('#n1').val(null);
    $('#n2').val("");
    $('#n3').val("");
    $('#n4').val("");
    $("#n1").css("display","block");
    $("#n2").css("display","none");
    $("#n3").css("display","none");
    $("#n4").css("display","none");

   }else
   {
    $("#n1").css("display","block");
    $('#n1').change(function(){
     if($('#n1').val() != null){
      $("#n2").css("display","block");
      $('#n2').change(function(){
       if($('#n2').val() != null){
        $("#n3").css("display","block");
        $('#n3').change(function(){
         if($('#n3').val() != null){
          $("#n4").css("display","block");
          }  
        }) //nivel 3
       }
      }) //nivel 2
     }
    }) //nivel 1

    
    
    
   }


  })
}); 
 
  
