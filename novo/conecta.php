<?php
    function conecta()
    {
       return $con = @ mysqli_connect("localhost","root","usbw","escola");
    }
?>