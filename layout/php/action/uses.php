<?php

include '../config/db.php';
if (!$conn) {
    echo ("Error load");
} else {
$result = "test";
    echo json_encode($result);
}

?>