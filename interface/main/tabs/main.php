<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$fake_register_globals=false;
$sanitize_all_escapes=true;

/* Include our required headers */
require_once('../../globals.php');
require_once($webserver_root."/interface/includes/include_utils.php");
?>
<!DOCTYPE html>
<script type="text/javascript">
<?php require($GLOBALS['srcdir'] . "/restoreSession.php"); ?>
    

//  Include this variable for backward compatibility 
var loadedFrameCount = 0;

function allFramesLoaded() {
// Stub function for backward compatibility with frame race condition mechanism
 return true;
}    
</script>
<script type="text/javascript" src="js/left_nav_proxy.js"></script>
<?php include_js_library("knockout/knockout-3.1.0.js") ?>
<?php include_js_library("jquery-2.1.1.min.js") ?>
<a href="../main_screen.php?tabs=false">No Tabs</a>
