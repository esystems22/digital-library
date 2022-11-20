<?php

$conn = mysqli_connect("localhost", "root", "", "digitalib") or die(mysqli_error());
if(!$conn){
    echo "Failed to connect to the Server";
}

?>