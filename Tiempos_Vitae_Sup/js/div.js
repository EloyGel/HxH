$(document).ready(function(){
  //Ocultar Div
  $("#setup").css("display","none");
  $("#proceso").css("display","none");
  $("#paro").css("display","none");
  $("#FinTurno").css("display","none");
  
  $('#estatus').change(function(){
    if($('#estatus').val() == 'setup'){    //Selección del estatus SETUP
      $("#setup").css("display","block");
      $("#proceso").css("display","none");
      $("#paro").css("display","none");
      $("#FinTurno").css("display","none"); 

      $("#inspector").css("display","none");
      $("#observaciones1").css("display","none");

      $('#MotSetup').change(function(){
       if($('#MotSetup').val() == '5')
        {$("#inspector").css("display","block");
         $("#observaciones1").css("display","block");}
       else
        {$("#inspector").css("display","none");
         $("#observaciones1").css("display","block");}
      });

    }
    if($('#estatus').val() == 'proceso'){   //Selección del estatus proceso
      $("#proceso").css("display","block");
      $("#setup").css("display","none");
      $("#paro").css("display","none");
      $("#FinTurno").css("display","none");

      $("#piezas").css("display","none");
      $("#observaciones2").css("display","none");

      $('#TipoProceso').change(function(){
       if($('#TipoProceso').val() != '11')
        {$("#piezas").css("display","none");
         $("#observaciones2").css("display","block");}
       else
        {$("#piezas").css("display","block");
         $("#observaciones2").css("display","none");}
      });
    }
    if($('#estatus').val() == 'paro'){     //Selección del estatus paro
      $("#paro").css("display","block");
      $("#setup").css("display","none");
      $("#proceso").css("display","none");
      $("#FinTurno").css("display","none");;
    }
    if($('#estatus').val() == 'fin'){       //Selección del estatus fin
      $("#FinTurno").css("display","block");
      $("#setup").css("display","none");
      $("#proceso").css("display","none");
      $("#paro").css("display","none");
    }
  })
});
 
  
