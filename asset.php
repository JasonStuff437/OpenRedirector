<?php
if(isset($_GET['i'])) {
    header('Location: https://assetdelivery.roblox.com/v1/asset?id=' . $_GET['i']);
    exit;
} 
?>
