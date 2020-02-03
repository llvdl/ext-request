--TEST--
ServerResponse::setHeader
--FILE--
<?php
$response = new ServerResponse();
$response->setHeader('Foo-Bar', 'baz');
$response->setHeader('foo-bar', 'dib');
var_dump($response->getHeaders());
$response->unsetHeaders();
var_dump($response->getHeaders());
$response->setHeader('Foo-Bar', 'baz');
$response->setHeader('foo-bar', 'dib');
var_dump($response->getHeaders());
--EXPECT--
array(1) {
  ["foo-bar"]=>
  string(3) "dib"
}
NULL
array(1) {
  ["foo-bar"]=>
  string(3) "dib"
}
