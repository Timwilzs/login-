<?php

    $con=mysqli_connect('localhost', 'root', '', 'osrs');

    if(!$con)
    {
            die('Please chexk your connection' .mysqli_error());
    }
    
?>