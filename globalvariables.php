<?php
	$x=5;
	function testfunction(){
		global $x;
		echo "global variable is".$x."\n";
	}
	testfunction();

?>
