<?php

$domain_name = "georgebuilds.com"; // 👈 Your domain name here

//----------------------------------------------------------------------------//

$redirects = require("../redirects.php");
$hostname = str_replace(".$domain_name", "", $_SERVER['HTTP_HOST']);

function redirect(string $url): void {
    header("Location: $url");
    exit;
}

if (in_array($hostname, array_keys($redirects))) redirect($redirects[$hostname]);

redirect("https://$domain_name");
