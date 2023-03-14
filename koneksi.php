<?php 

        $dbServer = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $db = 'classicmodels';

        $con = mysqli_connect($dbServer, $dbUser, $dbPass, $db);

        mysqli_select_db($con, $db)

?>