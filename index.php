<?php
    echo "Hello";

    $doc = new DOMDocument();
    $doc->loadHTMLFile("home.html");

    echo $doc->saveHTML();
?>