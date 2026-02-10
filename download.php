<?php
$file = "uploads/" .$_GET['file'];

header("content-Disposition:attachment ; filename =" . basename($file));

readfile($file);

?>