--TEST--
PhpResponse::date (invalid)
--SKIPIF--
<?php if( !extension_loaded('request') ) die('skip '); ?>
--FILE--
<?php
$response = new PhpResponse();
try {
    var_dump($response->date(true));
    echo 'fail';
} catch( Exception $e ) {
    echo 'ok';
}
--EXPECT--
ok