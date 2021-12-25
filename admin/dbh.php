<?php

$conn = mysqli_connect('localhost', 'root', '', 'apple_phones');

if(!$conn){
    die("Connection failed");
}