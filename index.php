<?php
    $doc = new DOMDocument();
    $doc->loadHTMLFile("home.html");

    echo $doc->saveHTML();
?>