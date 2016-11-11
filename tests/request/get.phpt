--TEST--
ServerRequest::$get
--SKIPIF--
<?php if( !extension_loaded('request') ) die('skip '); ?>
--GET--
foo=bar&baz=bat
--FILE--
<?php
$_SERVER['HTTP_HOST'] = 'example.com';
$request = new ServerRequest();
var_dump($request->get);
--EXPECT--
array(2) {
  ["foo"]=>
  string(3) "bar"
  ["baz"]=>
  string(3) "bat"
}