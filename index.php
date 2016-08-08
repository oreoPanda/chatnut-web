<?php
    require_once("style.php");
    echo $stylesheet;
    
    $homelink = "-active";
    $h1main = "Welcome";
    $pmain = "<p class='main'>This is chatnut! Go ahead and explore the website a little bit if you like. In the Downloads section you can download chatnut and its source code for Linux and Windows. In the Documentation section I might put some documentation later, this is something that is yet to come. Other things I'm thinking about doing is translating this site to german and including some tutorials on programming topics that are relevant to the development of chatnut..</p>";
    require_once("layout.template.php");
    echo $site;
?>
