<?php
    $headers = apache_request_headers();

    foreach ($headers as $header => $value) {
        echo "$header: $value <br />\n";
    }

    echo "<p><p>";
    $entityBody = file_get_contents ('php://input');
    echo "$entityBody";
?>