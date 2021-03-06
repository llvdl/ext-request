--TEST--
ServerRequest::__set
--FILE--
<?php
$_SERVER['HTTP_HOST'] = 'localhost';
$request = new ServerRequest($GLOBALS);
try {
    $request->method = 'PATCH';
} catch( Exception $e ) {
    var_dump(get_class($e), $e->getMessage());
}
try {
    $request->noSuchProperty = 'foo';
} catch( Exception $e ) {
    var_dump(get_class($e), $e->getMessage());
}
--EXPECT--
string(16) "RuntimeException"
string(36) "ServerRequest::$method is read-only."
string(16) "RuntimeException"
string(46) "ServerRequest::$noSuchProperty does not exist."
