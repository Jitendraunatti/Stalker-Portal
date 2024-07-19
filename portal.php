<?php
include "config.php";
if (@$_GET['id'] != "")
{
    $id = @$_GET['id'];
    $JITENDRA_PRO_DEV_X_ASUR = jitendra_kumar($id);
    $JITENDRA_PRO_DEV_X_ASUR = $JITENDRA_PRO_DEV_X_ASUR["JITENDRAUNATTI"]["rolex"];
    if(isset($JITENDRA_PRO_DEV_X_ASUR) != "")
    {
      header("Location: " . $JITENDRA_PRO_DEV_X_ASUR);
    
    } 
    else 
    {
      header("Content-Type: application/x-mpegURL");
      echo video();
      echo "#CURRENTLY THIS CHANNEL IS NOT WORKING";
    }
    exit();
}
?>