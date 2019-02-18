<?php
//declare global variables
$username = $_POST[user_username];
$password = $_POST[user_password]; 

function authenticate_connection(){
    connection = new database_connection("authentication");
    
}
?>
