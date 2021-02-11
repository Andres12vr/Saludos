<!DOCTYPE html>
<html>
<head>
	<title>Saludo</title>
</head>
<body style="background-image: linear-gradient(to right,gray,#2980B9,#FDEBD0);">
<style type=""> 

    .city { background-color: #48C9B0; color: white; padding: 0.99%; }


</style>

<?php  //habrimos php para declarar una variable 
$var = @$_POST['txtnombre'];

 ?>
<br>
	<div align="center" class="city"><h2>Pagina de saludos igrese su nombre</h2><br>

<form action="Saludo.php" method="post">
    <label>Su nombre: </label>	
    <input type="text" name="txtnombre">
     <button>Saludo</button>
</form>

<br><br>
<label>Hola:</label>
<input type="text" name="caja2" value="<?php echo @$var; ?>">

    </div>
</body>
</html>
