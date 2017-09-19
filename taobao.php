<?php
require_once 'grab.php';
$grad = new Grab();
$data = $grad->filterUrl('https://item.taobao.com/item.htm?spm=a230r.1.14.1.76bf523XEDA6E&id=553929911940&ns=1&abbucket=20#detail');
print_r($data);
?>
