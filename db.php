<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "glow";
    $link = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $link->error);

    return $link;
}

function CloseCon($link)
{
    $link->close();
}
