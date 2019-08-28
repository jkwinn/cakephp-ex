<?php
$load = sys_getloadavg();
$proc = exec('nproc');
$x = 0.0001;
for ($i = 0; $i <= 1000000; $i++) {
	$x += sqrt($x);
}
function get_server_memory_usage(){
	
	$free = shell_exec('free');
	$free = (string)trim($free);
	$free_arr = explode("\n", $free);
	$mem = explode(" ", $free_arr[1]);
	$mem = array_filter($mem);
	$mem = array_merge($mem);
	$memory_usage = $mem[2]/$mem[1]*100;

	return $memory_usage;
}
function get_server_cpu_usage(){

	$load = sys_getloadavg();
	return $load[0];

}
echo "Pod Name: ";
echo php_uname('n');
echo "  - - - Hello All. This is a  test, simple webhook demo. Enjoy! ";
echo $proc;
echo <br><br>;
<p><span class="description">Server Memory Usage:</span> <span class="result">= get_server_memory_usage() ?&gt;%</span></p>;
<p><span class="description">Server CPU Usage: </span> <span class="result">= get_server_cpu_usage() ?&gt;%</span></p>
?>
