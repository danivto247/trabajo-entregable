<?php
    function conectar();
        $user="id18812490_root"
        $pass="|b/0&K[X]QegN<}&"
        $server="localhost"
        $db="id18812490_app"
        $con=mysqli_connect($server,$user,$pass) or die ("error al conectar a la base de datos".mysql_error());
        mysqli_select_db('id18812490_app', $con)
?>