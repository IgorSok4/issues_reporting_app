<?php
session_start();
session_unset();
session_destroy();

header("Location: /issues_reporting_app/frontend/index.php");
exit;
?>
