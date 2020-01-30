--TEST--
ServerResponse::addHeader
--FILE--
<?php
$response = new ServerResponse();
$response->addHeader('Foo-Bar', 'baz');
$response->addHeader('foo-bar', 'dib');
var_dump($response->getHeaders());
--EXPECT--
array(1) {
  ["foo-bar"]=>
  string(8) "baz, dib"
}
