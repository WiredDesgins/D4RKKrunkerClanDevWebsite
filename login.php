<?php

/* Discord Oauth v.4.0
 * Demo Login Script
 * @author : MarkisDev
 * @copyright : https://markis.dev
 */
 
# Enabling error display
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
# Including all the required scripts for demo
require __DIR__ . "/discord.php";
require __DIR__ . "/functions.php";
 
# Initializing all the required values for the script to work
init ("https://d4rkdev.herokuapp.com/login.php", "760766489367281705", "5AwqKdfbfHf6FrcwKLTBRdQNx2-s6VI8");
 
# Fetching user details | (identify scope)
get_user();
 
# Fetching user guild details | (guilds scope)
$_SESSION['guilds'] = get_guilds();
 
# Redirecting to home page once all data has been fetched
redirect("index.php");

?>
