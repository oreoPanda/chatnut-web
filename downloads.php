<?php
    require_once("style.php");
    echo $stylesheet;

    $downloadslink = "-active";
    $h1main = "Downloads";
    $linuxhref = "";
    $windowshref = "";
    //<h2> is the version title or maybe other titles later on
    $pmain = "<p class='main'>Here you can download chatnut. Version 0.9.3 is currently the only one that can be downloaded here, the others can be found on GitHub. I will post other versions and a link to the chatnut repository on GitHub later on.</p>
    <h2>Version 0.9.3</h2>
    <p class='link'>Linux (source code as tar.gz): <a href='".$linuxhref."'>...</a></p>
    <p class='link'>Linux (source code as zip): <a href='".$linuxhref."'>...</a></p>
    <p class='link'>Windows (Installer as exe): <a href='".$windowshref."'>...</a></p>
    <p class='link'>Windows (source code and 64-bit executable as zip): <a href='".$windowshref."'>...</a></p>";
    require_once("layout.template.php");
    echo $site;
?>
