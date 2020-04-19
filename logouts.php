<?php

session_start();

session_destroy();

header("location:library_login.php?msg=you logged out");
?>