<?php

function run($cmd,&$return=null){
	$output = '';
	$cmd = '/usr/bin/sudo /bin/bash -c "'.addslashes($cmd).'"';
	exec($cmd,$output,$return);
	$output = implode("\n",$output);
	dolog($cmd.': '.$output);
	return $output;
}
