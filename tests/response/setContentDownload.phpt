--TEST--
StdResponse::setContentDownload
--SKIPIF--
<?php if( !extension_loaded('request') ) die('skip '); ?>
--EXTENSIONS--
json
--FILE--
<?php
$response = new StdResponse();
$fh = fopen('php://temp', 'rb');
$response->setContentDownload(
    $fh,
    'filename.tmp',
    'inline',
    $params = ['foo' => 'bar']
);
var_dump($response->getHeaders());
var_dump($fh === $response->getContent());
--EXPECT--
array(3) {
  ["content-type"]=>
  string(24) "application/octet-stream"
  ["content-transfer-encoding"]=>
  string(6) "binary"
  ["content-disposition"]=>
  string(38) "inline;foo=bar;filename="filename.tmp""
}
bool(true)
