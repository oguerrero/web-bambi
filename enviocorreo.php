<?php
if(!isset($_POST['submit'])){
    echo "redireccionando";
}
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$motivo = $_POST['motivo'];
$mensaje = $_POST['mensaje'];

if(empty($nombre) || empty($apellidos || empty($email) || empty($motivo) || empty($mensaje))){
	echo "<script>
                alert('Tiene que llenar todos los campos');
                window.location= 'https://jardindeninosbambi.com'
    	</script>";
	exit;
} 
$micorreo = 'kinderbambi2020@gmail.com';
$cuerpo = "Tienes un nuevo mensaje de $nombre $apellidos. \n".
		  "correo: $email\n".
		  "Mensaje:\n $mensaje, ".
$to = "kinderbambi2020@gmail.com";	  
$headers = "De: $micorreo \r\n";

mail($to, $motivo, $cuerpo, $headers);


$correok = 'facturacion.bambi@gmail.com';
$to2 = 'facturacion.bambi@gmail.com';
$headers2 = "De: $correok \r\n";
mail($to2, $motivo, $cuerpo, $headers2);
echo "<script>
                alert('Su correo fue enviado exitosamente');
                window.location= 'https://jardindeninosbambi.com'
    </script>";
?>