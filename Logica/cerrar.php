<?php
session_start();
error_reporting(0);
session_destroy();
echo "<script>
location.href='../index.php';
</script>";
?>