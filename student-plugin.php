<?php
/*
    Plugin Name: College ID API
    Version: 1
    Author: Shabu
    Author URI: https://www.shabujamespaul.com
    Text Domain: sjp
    Requires PHP: 7.2
*/




include "connect.php";

function collegeid()
{

    //Comment the below line to work on your query.
    return 'Howdy!!!';
    //Comment the above line to make your function work.

    // I really dont know why you are using normal php database instead of wordpress default query.

    $db = new mysqli('localhost', $dbuser, $dbpass, $dbname);
    $queryusers = "SELECT 'id' FROM `Colleges` ";
    $dbc = mysqli_query($db, $queryusers);
    return $dbc;
}


add_action( 'rest_api_init', function () {
    register_rest_route( 'schfind/v2', '/schools/', array(
        'methods' => 'GET',
        'callback' => 'collegeid',
        'permission_callback'=>'__return_true' 
    ) );
} );

?>
