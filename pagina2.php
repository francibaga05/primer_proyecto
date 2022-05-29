
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $nombre_archivo = $_FILES['foto']['name'];
  $nombre_archivo="/fotos/imagen".rand().".jpg";
  if($nombre_archivo!=""){
    if(file_exists("/fotos")){
      $moved = move_uploaded_file($_FILES['foto']['tmp_name'],$nombre_archivo);

      if($moved){

       echo("imagen guardad");
      }else{
        echo("error al mover la imnagen");
      }
    } else{
    if(!mkdir("/fotos", 0700)){
      echo ("fallo al crear carpeta"); 
    } else{

      $moved = move_uploaded_file($_FILES['foto']['tmp_name'], $nombre_archivo);

      if($moved){

       echo("imagen guardada");
      }else{
        echo("error al mover la imnagen");
      }
   }
  }
  } else {
    echo("no subiste ningun archivo");
  }
  ?>
</body>

</html>