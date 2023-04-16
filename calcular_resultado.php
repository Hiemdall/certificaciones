<!DOCTYPE html>
<html>
  <head>
    <title>Resultado del Examen de Componentes del Computador</title>
    <link rel="stylesheet" href="estilo_respuestas.css">
  </head>
  <body>
    <img src="logo.png" alt="Integratic" width="250" height="100">
    <h1>Resultado del Examen de Componentes del Computador</h1>
    <?php

      // Llamar a el archivo conexion.php para hacer la conexión a la base de datos
      include("conexion.php");

      // Obtener respuestas del formulario
      $respuesta1 = $_POST['pregunta1'];
      $respuesta2 = $_POST['pregunta2'];
      $respuesta3 = $_POST['pregunta3'];
      
      // Definir respuestas correctas
      $correcta1 = 'a';
      $correcta2 = 'a';
      $correcta3 = 'a';
      
      // Verificar respuestas
      $resultado1 = ($respuesta1 == $correcta1) ? 'Correcta' : 'Incorrecta';
      $resultado2 = ($respuesta2 == $correcta2) ? 'Correcta' : 'Incorrecta';
      $resultado3 = ($respuesta3 == $correcta3) ? 'Correcta' : 'Incorrecta';
      
      // Mostrar resumen de respuestas
      echo '<h2>Resumen de respuestas:</h2>';
      echo '<p>Pregunta 1: ' . $resultado1 . '</p>';
      echo '<p>Pregunta 2: ' . $resultado2 . '</p>';
      echo '<p>Pregunta 3: ' . $resultado3 . '</p>';
      
      // Calcular puntaje
      $puntaje = 0;
      if ($respuesta1 == $correcta1) {
        $puntaje++;
      }
      if ($respuesta2 == $correcta2) {
        $puntaje++;
      }
      if ($respuesta3 == $correcta3) {
        $puntaje++;
      }
      
      // Mostrar puntaje
      echo '<h2>Puntaje:</h2>';
      echo '<p>Obtuviste ' . $puntaje . ' de 3 puntos posibles.</p>';


// Base de datos
$cedula = "123";
$nombre = "Mario";
$apellido = "Fernando";
$pregunta_1 = $resultado1;
$pregunta_2 = $resultado2;
$pregunta_3 = $resultado3;
$Total = $puntaje;
$nom_certificado ="Componentes de un computador";

// Insertar datos en la tabla de usuarios
$sql = "INSERT INTO historial (cedula, nombre, apellido, pregunta_1, pregunta_2, pregunta_3, puntaje, nom_certificado) VALUES ('$cedula','$nombre','$apellido','$pregunta_1','$pregunta_2','$pregunta_3','$Total','$nom_certificado')";

if (mysqli_query($conn, $sql)) {
  echo "Registro exitoso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);




    ?>
  </body>
</html>