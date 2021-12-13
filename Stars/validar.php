<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$link=mysqli_connect('bndontbbsfp1ahpbpbph-mysql.services.clever-cloud.com','uswjjjzddjjytlzu','zUs8KIG5VWcKaow8gNF4');
                            
mysqli_select_db($link,'bndontbbsfp1ahpbpbph');

$consulta="select * from usuarios where Usuario ='$usuario' and Contrasena ='$contraseña'";
$resultado=mysqli_query($link,$consulta);

$filas=mysqli_fetch_array($resultado);
if($filas['id_cargo']==1)
{
    header("location:admin.html");
}else
    if($filas['id_cargo']==2){
        header("location:usuario.html");
    }
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error en la autentificacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($link);
