--TEST--
PhpResponse::addHeader (array)
--SKIPIF--
<?php if( !extension_loaded('request') ) die('skip '); ?>
--FILE--
<?php
$response = new PhpResponse();
$response->addHeader('Foo', ['bar' => 'baz']);
$response->addHeader('Foo', ['dib' => ['zim', 'gir']]);
var_dump($response->getHeaders());
--EXPECT--
array(1) {
  ["Foo"]=>
  array(2) {
    [0]=>
    string(7) "bar=baz"
    [1]=>
    string(11) "dib;zim;gir"
  }
}