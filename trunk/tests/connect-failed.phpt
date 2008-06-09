--TEST--
Host cannot be found
--FILE--
<?php
require_once dirname(__FILE__) . '/test-helper.php';
$client = new MogileFs();
try {
	$client->connect("foobarbaz", 100000, "foodomain");
} catch (MogileFsException $e) {
	var_dump($e->getMessage(), $e->getCode());
}
?>
==DONE==
--EXPECTF--
Warning: %s
string(%d) "Can't connect to %s:%d"
int(0)
==DONE==