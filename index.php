<?php

/* Home Page
 * The home page of the working demo of oauth2 script.
 * @author : MarkisDev
 * @copyright : https://markis.dev
 */
 
#Enable this to have Error Logging
#Click on OAuth Link to log in
# Enabling error display
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
 

# Including all the required scripts for demo
require __DIR__ . "/functions.php";
require __DIR__ . "/discord.php";

# ALL VALUES ARE STORED IN SESSION!
# RUN `echo var_export([$_SESSION]);` TO DISPLAY ALL THE VARIABLE NAMES AND VALUES.
# FEEL FREE TO JOIN MY SERVER FOR ANY QUERIES - https://join.markis.dev

?>

 <html>
     /p>
     <h3 style="display:inline;"><a href="
     <?php echo url("760766489367281705", "https://d4rkdev.herokuapp.com/login.php", "identify guilds"); ?>
     ">OAUTH LINK </a></h3>
     <?php
     # Displaying logout url only if user is logged in
     if(isset($_SESSION['user']))
     {
         echo '<h3 style="color:red; display:inline;"><a style="color:red; padding-left:10px;" href="logout.php">LOGOUT</a></h3>';
     }
     ?>
 </html>
