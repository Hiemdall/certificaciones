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

      // Llamar al archivo conexion.php para hacer la conexión a la base de datos
      include("conexion.php");

      //*********************************************************************************************************************************** */  

      
      // Verificar si se ha enviado el formulario
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Verificar si la clave "pregunta1" está definida en el array $_POST
          if (isset($_POST['pregunta1'])) {
              $respuestaPregunta1 = $_POST['pregunta1'];
              $resultado1 = "Incorrecta";
          } else {
              // La clave "pregunta1" no está definida en el array $_POST
              // Manejar el caso en que no se haya respondido la pregunta 1
              $resultado1 = "Incorrecta";
          }
      
          // Verificar si la clave "pregunta2" está definida en el array $_POST
          if (isset($_POST['pregunta2'])) {
              $respuestaPregunta2 = $_POST['pregunta2'];
              $resultado2 = "Incorrecta";
          } else {
              // La clave "pregunta2" no está definida en el array $_POST
              // Manejar el caso en que no se haya respondido la pregunta 2
              $resultado2 = "Incorrecta";
          }
      
          // Verificar si la clave "pregunta3" está definida en el array $_POST
          if (isset($_POST['pregunta3'])) {
              $respuestaPregunta3 = $_POST['pregunta3'];
              $resultado3 = "Incorrecta";
          } else {
              // La clave "pregunta3" no está definida en el array $_POST
              // Manejar el caso en que no se haya respondido la pregunta 3
              $resultado3 = "Incorrecta";
          }
      
          // Verificar si la clave "pregunta4" está definida en el array $_POST
          if (isset($_POST['pregunta4'])) {
              $respuestaPregunta4 = $_POST['pregunta4'];
              $resultado4 = "Incorrecta";
          } else {
              // La clave "pregunta4" no está definida en el array $_POST
              // Manejar el caso en que no se haya respondido la pregunta 4
              $resultado4 = "Incorrecta";
          }
      
          // Verificar si la clave "pregunta5" está definida en el array $_POST
          if (isset($_POST['pregunta5'])) {
              $respuestaPregunta5 = $_POST['pregunta5'];
              $resultado5 = "Incorrecta";
          } else {
              // La clave "pregunta5" no está definida en el array $_POST
              // Manejar el caso en que no se haya respondido la pregunta 5
              $resultado5 = "Incorrecta";
          }
      
          // Resto del código para procesar las respuestas del formulario
      }


//*********************************************************************************************************************************** */  




      // Obtener datos del formulario
      $cedula = $_POST['cedula'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];

        // Obtener respuestas del formulario
  $respuesta1 = isset($_POST['pregunta1']) ? $_POST['pregunta1'] : "";
  $respuesta2 = isset($_POST['pregunta2']) ? $_POST['pregunta2'] : "";
  $respuesta3 = isset($_POST['pregunta3']) ? $_POST['pregunta3'] : "";
  $respuesta4 = isset($_POST['pregunta4']) ? $_POST['pregunta4'] : "";
  $respuesta5 = isset($_POST['pregunta5']) ? $_POST['pregunta5'] : "";
  
  // Definir respuestas correctas
  $correcta1 = 'a';
  $correcta2 = 'a';
  $correcta3 = 'a';
  $correcta4 = 'b';
  $correcta5 = 'c';
  
  // Verificar respuestas
  $resultado1 = ($respuesta1 == $correcta1) ? 'Correcta' : 'Incorrecta';
  $resultado2 = ($respuesta2 == $correcta2) ? 'Correcta' : 'Incorrecta';
  $resultado3 = ($respuesta3 == $correcta3) ? 'Correcta' : 'Incorrecta';
  $resultado4 = ($respuesta4 == $correcta4) ? 'Correcta' : 'Incorrecta';
  $resultado5 = ($respuesta5 == $correcta5) ? 'Correcta' : 'Incorrecta';
  
  // Mostrar resumen de respuestas
  echo '<h2>Resumen de respuestas:</h2>';
  echo '<p>Pregunta 1: ' . $resultado1 . '</p>';
  echo '<p>Pregunta 2: ' . $resultado2 . '</p>';
  echo '<p>Pregunta 3: ' . $resultado3 . '</p>';
  echo '<p>Pregunta 4: ' . $resultado4 . '</p>';
  echo '<p>Pregunta 5: ' . $resultado5 . '</p>';
  
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
  if ($respuesta4 == $correcta4) {
    $puntaje++;
  }
  if ($respuesta5 == $correcta5) {
    $puntaje++;
  }
  
  
  // Mostrar puntaje
  echo '<h2>Puntaje:</h2>';
  echo '<p>Obtuviste ' . $puntaje . ' de 5 puntos posibles.</p>';


  // Base de datos
  //$cedula = "14721994";
  //$nombre = "Heimdall";
  //$apellido = "Rojas";
  $pregunta_1 = $resultado1;
  $pregunta_2 = $resultado2;
  $pregunta_3 = $resultado3;
  $pregunta_4 = $resultado4;
  $pregunta_5 = $resultado5;
  $Total = $puntaje;

  $nom_certificado = "Componentes de Computador";

  // Insertar datos en la tabla de usuarios
$sql = "INSERT INTO historial_com (cedula, nombre, apellido, pregunta_1, pregunta_2, pregunta_3, pregunta_4, pregunta_5, puntaje, nom_certificado)
VALUES ('$cedula','$nombre','$apellido','$pregunta_1','$pregunta_2','$pregunta_3','$pregunta_4','$pregunta_5','$Total','$nom_certificado')";

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



