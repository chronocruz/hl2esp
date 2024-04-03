<?php
if ($_SERVER['REQUEST_METHOD'] == "HEAD") {
        header("Content-type: image/jpeg");
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
        header("Content-type: image/jpeg");
        header("Location: ".$_GET['r']."");
}
?>
