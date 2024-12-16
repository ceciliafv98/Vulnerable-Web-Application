<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../../Resources/hmbct.png" />
      <title> Level 1 </title>
   </head>

   <body>    
      <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileinc.html';">Main Page</button>  
      </div>
      
      <div align="center"><b><h3>This is Level 1</h3></b></div>
      <div align="center">
      <a href=lvl1.php?file=1.php><button>Button</button></a>
      <a href=lvl1.php?file=2.php><button>The Other Button!</button></a>
      </div>
      <?php
echo "</br></br>";

// Lista de archivos permitidos
$allowed_files = ['file1.php', 'file2.php', 'file3.php']; // Los archivos que pueden ser incluidos

// Verificamos si 'file' está presente en la URL y si es un archivo permitido
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Verificamos que el archivo esté en la lista de archivos permitidos
    if (in_array($file, $allowed_files)) {
        
        // Incluir el archivo de manera segura
        @include($file);
        
        // Mostrar el nombre del archivo de manera segura
        echo "<div align='center'><b><h5>" . htmlspecialchars($file, ENT_QUOTES, 'UTF-8') . "</h5></b></div>";
    } else {
        // Si el archivo no es permitido
        echo "Este archivo no está permitido.";
    }
}
?>

     // <?php
     //   echo "</br></br>";
        
    //    if (isset( $_GET[ 'file' ]))        
        {
      //    @include($_GET[ 'file' ]);
      //   echo"<div align='center'><b><h5>".$_GET[ 'file' ]."</h5></b></div> ";       
      //  }
    //  ?>
   </body>
</html>

