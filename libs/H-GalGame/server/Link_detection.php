<?php
// Link_detection.php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $headers = get_headers($url, 1);
    if (strpos($headers[0], '200') !== false) {
        echo 'true';
    } else {
        echo 'false';
    }
}
?>
