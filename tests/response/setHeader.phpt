--TEST--
PhpResponse::setHeader
--SKIPIF--
<?php if( !extension_loaded('request') ) die('skip '); ?>
--FILE--
<?php
$response = new PhpResponse();
$response->setHeader('', 'should-not-show');
$response->setHeader('Should-Not-Show', '');
$response->setHeader('Foo-Bar', 'baz');
$response->setHeader('foo-bar', 'dib');
var_dump($response->getHeaders());
--EXPECT--
array(1) {
  ["Foo-Bar"]=>
  array(1) {
    [0]=>
    string(3) "dib"
  }
}