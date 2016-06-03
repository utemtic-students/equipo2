<?php
error_reporting (7); 
$cnx = @mysql_connect("localhost", "root", "");
@mysql_select_db("inteligentConta", $cnx) or die ("No hay conexion a la BD");
$bandera =0;

if (isset($_POST['usu'])){
$bandera = $_POST['bandera'];
}
//echo $bandera;
 if ($bandera ==1){

         $_SESSION["valida"]='false';


                if (isset($_POST['usu'])&&isset($_POST['pass'])) {
                    
                        $usuario = $_POST['usu'];
                        $pass = $_POST['pass'];       
                } else {
                        $usuario = "";
                        $pass = "";
                }

                $sql = "SELECT * FROM inteligentConta.usuarios WHERE user='".$usuario."' and passwd='".$pass."'";
                    $ejecuta = mysql_query ($sql,$cnx);
                    $rows = mysql_num_rows ($ejecuta);
                    $resul = ($ejecuta);

                    if($rows > 0){

                            $_SESSION["correo"]=$usuario;
                             $_SESSION["valida"]='true';
                        
                                mysql_close($cnx);
                               
                                header ('Location: home.php');


                   }else{
                    echo "<script type='text/javascript'>
                            alert('Usuario o contraseña no validos');
                            </script>";
                   }
}else{

}


?>