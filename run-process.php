<?php
	
	//Runs through a series of shell commands in the background
	//Usage:  php run_process.php [urlencoded, json_encoded array of shell commands to run]
	
	if($argv[1]) {
		error_log($argv[1]);
		$process_parallel = json_decode(urldecode($argv[1]));

		
		for($cnt = 0; $cnt < count($process_parallel); $cnt++) {
			
			error_log($process_parallel[$cnt]);
			$ret = shell_exec($process_parallel[$cnt]);
	
		}
	} else {
		echo "Sorry, you need to pass a urlencoded, json_encoded array of shell commands to run.";
		
	}

?>