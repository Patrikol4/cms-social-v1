<?php 
include_once "includes/config.php";

?>
<?php echo "
<!DOCTYPE html>
<html>
<head>
	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
	<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

	<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
	<title>Dashboard</title>
</head>
<body>



  <nav>
    <div class='nav-wrapper'>
      <a href='#!' class='brand-logo'>CMS-Social v1</a>
      <a href='' data-target='mobile-demo' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
      <ul class='right hide-on-med-and-down'>
        <li><a href='sass.html'>Dashboard</a></li>
        <li><a href='collapsible.html'>Perfil de Usuário</a></li>
        <li><a href='mobile.html'>Referências</a></li>
        <li><a href='mobile.html'>Ganhar Dinheiro</a></li>
        <li><a href='mobile.html'>Sacar Dinheiro</a></li>
        <li><a href='mobile.html'>Logout</a></li>
      </ul>
    </div>
     
  </nav>

  <ul class='sidenav' id='mobile-demo'>
    <li><a href='dashboard.php'>Dashboard</a></li>
    <li><a href='profile.php'>Perfil de Usuário</a></li>
    <li><a href='refs.php'>Referências</a></li>
    <li><a href='earn.php'>Ganhar Dinheiro</a></li>
    <li><a href='withdraw.php'>Sacar Dinheiro</a></li>

    <li><a href='logout.php'>Logout</a>
    </li>
  </ul>

 

<script>
	$(document).ready(function(){
		$('.sidenav').sidenav();
	})

</script>


</body>
</html>

";?>

