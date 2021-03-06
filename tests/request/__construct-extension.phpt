--TEST--
ServerRequest::__construct without calling parent
--FILE--
<?php
class ExtRequest extends ServerRequest
{
    public function __construct()
    {
    }
}
$ext = new ExtRequest();
var_dump($ext);
var_dump($ext->accept);
--EXPECT--
object(ExtRequest)#1 (27) {
  ["_initialized":"ServerRequest":private]=>
  bool(false)
  ["accept"]=>
  NULL
  ["acceptCharset"]=>
  NULL
  ["acceptEncoding"]=>
  NULL
  ["acceptLanguage"]=>
  NULL
  ["authDigest"]=>
  NULL
  ["authPw"]=>
  NULL
  ["authType"]=>
  NULL
  ["authUser"]=>
  NULL
  ["content"]=>
  NULL
  ["contentCharset"]=>
  NULL
  ["contentLength"]=>
  NULL
  ["contentMd5"]=>
  NULL
  ["contentType"]=>
  NULL
  ["cookie"]=>
  NULL
  ["files"]=>
  NULL
  ["forwarded"]=>
  NULL
  ["forwardedFor"]=>
  NULL
  ["forwardedHost"]=>
  NULL
  ["forwardedProto"]=>
  NULL
  ["headers"]=>
  NULL
  ["input"]=>
  NULL
  ["method"]=>
  NULL
  ["query"]=>
  NULL
  ["server"]=>
  NULL
  ["uploads"]=>
  NULL
  ["url"]=>
  NULL
}
NULL
