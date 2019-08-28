<?php
$load = sys_getloadavg();
$proc = exec('nproc');
$normload = $load/$proc;
$x = 0.0001;
for ($i = 0; $i <= 1000000; $i++) {
	$x += sqrt($x);
}
echo "Pod Name: ";
echo php_uname('n');
echo "  - - - Hello All. This is a  test, simple webhook demo. Enjoy! "
echo sys_getloadavg
?>
