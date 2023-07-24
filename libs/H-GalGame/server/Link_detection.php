<?php

function checkUrl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200) {
        return true;
    } else {
        return false;
    }
}

$links = array(
    "百度网盘" => "https://pan.baidu.com/",
    "OneDrive" => "https://onedrive.live.com/",
    "阿里云盘" => "https://www.aliyundrive.com/",
    "Google盘" => "https://drive.google.com/"
);

foreach ($links as $name => $url) {
    if (checkUrl($url)) {
        echo $name . ' 链接有效' . "\n";
    } else {
        echo $name . ' 链接无效' . "\n";
    }
}

?>
