--TEST--
hook shell_exec (webshell)
--SKIPIF--
<?php
include(__DIR__.'/../skipif.inc');
?>
--INI--
openrasp.root_dir=/tmp/openrasp
--GET--
a=cd
--FILE--
<?php
shell_exec($_GET['a']);
?>
--EXPECTREGEX--
<\/script><script>location.href="http[s]?:\/\/.*?request_id=[0-9a-f]{32}"<\/script>