<?php 

include "header.php";


?>

<?php echo
"<div class='container'>".
  "<div class='row'>".

   " <form class='col s12'>".
      "<div class='row'>".
      "<h3>Crie uma conta</h3>".
      
        "<div class='input-field col s12'>".
          "<i class='material-icons prefix'>account_circle</i>".
          "<input id='icon_prefix' type='text' class='validate'>".
          "<label for='icon_prefix'>Nome de Usuário</label>".
        "</div>".

        "<div class='input-field col s12'>".
          "<i class='material-icons prefix'>assignment_ind</i>".
          "<input id='icon_telephone' type='text' class='validate'>".
          "<label for='icon_telephone'>E-mail</label>"."</div>".
          
          "<div class='input-field col s12'>".
          "<i class='material-icons prefix'>lock</i>".
          "<input id='icon_telephone' type='password' class='validate'>".
          "<label for='icon_telephone'>Escolha uma senha</label>"."</div>".
          

          "</div>".

      "<div class='input-field col s12'>".
        
  

  	"</div>".

    "</form>".
  "</div>".
  "</div>".

  " <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>";

?>