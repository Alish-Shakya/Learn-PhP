<?php

setcookie("myfile", "gett.php", time() + (86400 * 7), "/");

require  "gett.php";
include "post.php";
include "request.php";
include "server.php";
include "file.php";
include "env.php";
include "cookies.php";

?>
