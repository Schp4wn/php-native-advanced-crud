<?php
/**
 * Created by PhpStorm.
 * User: tyr
 * Date: 19/06/18
 * Time: 22:39
 */


session_start();
session_destroy();
header("Location:index.php");
?>