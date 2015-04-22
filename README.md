# regexp-href

使用正则捕获 `<a>` 和 `<area>` 标签中的 href 属性内容

请看测试用例：[http://nimojs.github.io/regexp-href](http://nimojs.github.io/regexp-href)

<a href="http://nimojs.github.io/regexp-href"><img src="https://cloud.githubusercontent.com/assets/3949015/7268951/2d9bc5c8-e901-11e4-9154-f34e17593075.gif" /></a>

```
/<a.*?\shref=['"]*([^'"\s<>]+)['"]*/i
```