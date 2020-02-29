<?php
include 'dbh.php';
?>
<html>
    <head>
        <title>Guia 2 web 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            //jquey
            $(document).ready(function () {
                var contadorComentarios = 2;
                $("button").click(function () {
                    contadorComentarios = contadorComentarios + 2;
                    $("#comentarios").load("carga-comentario.php", {
                        nuevoContadorComentarios: contadorComentarios
                    });
                });
            });
        </script>
    </head>
    <body>
        <div id="comentarios" class="container-fluid">
            <?php
            $sql = "SELECT * FROM COMENTARIOS LIMIT 2";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>";
                    echo $row['autor'];
                    echo "<br>";
                    echo $row['mensaje'];
                    echo "</p>";
               
                    }
            } else {
                echo "No hay comentarios";
            }
            ?>
        </div>
        <button class="btn-info">Mostrar más comentarios</button>
    </body>
</html>
