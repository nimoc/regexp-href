<?php
echo "多次 replace 拼接";
$regStr = <<<STR
|<(a(rea)?)(.*?)\shref=['"]*\s*([^'"<>]+\s*)['"]*|
STR;
echo preg_replace_callback(
    $regStr,
    function ($matches) {
        return '<' . $matches[1] . $matches[3] . ' ' . 'href="' . 'http://bufmail.com/link?url=' . urlencode($matches[4]) . '"';
    },
    '<img src="http://www.baidu.com" /><br /><a class="demo" href="http://www.baidu.com?a=1&b=2">link</a>'
);
?>


<?php
/*
(?:pattern)
匹配 pattern 但不捕获该匹配的子表达式，即它是一个非捕获匹配，不存储供以后使用的匹配。这对于用“or”字符 (|) 组合模式部件的情况很有用。例如，'industr(?:y|ies) 是比 'industry|industries' 更经济的表达式。
*/
echo "使用非捕获匹配";
$regStr = <<<STR
|(?:<(?:a(?:rea)?)(?:.*?)\shref=['"]*\s*)([^'"<>]+\s*)(?:['"]*)|
STR;
echo preg_replace_callback(
    $regStr,
    function ($matches) {
        return str_replace($matches[1], 'http://bufmail.com/link?url=' . urlencode($matches[1]), $matches[0]);
    },
    '<img src="http://www.baidu.com" /><br /><a class="demo" href="http://www.baidu.com?a=1&b=2">link</a>'
);
?>
