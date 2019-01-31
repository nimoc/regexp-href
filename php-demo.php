<?php
$regStr = <<<STR
|<(a(rea)?)(.*?)\shref=['"]*\s*([^'"<>]+\s*)['"]*|
STR;
echo preg_replace_callback(
    $regStr,
    function ($matches) {
        return '<' . $matches[1] . $matches[3] . 'href="' . 'http://bufmail.com/link?url=' . urlencode($matches[4]) . '"';
    },
    '<img src="http://www.baidu.com" /><br /><a class="demo" href="http://www.baidu.com?a=1&b=2">link</a>'
);
?>
