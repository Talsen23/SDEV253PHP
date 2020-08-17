<?php
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.sdev253.net/home.html", $site);
$page = $site[1];
preg_match('/[^.]+\.[^.]+$/', $page, $site);
echo "domain name is: {$site[0]}\n";
?>