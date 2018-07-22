<?php
session_start();
echo $_SESSION['message'];
unset(echo $_SESSION['message']);
session_destroy()
?>