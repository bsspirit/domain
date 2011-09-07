<?php
function getDomains($start=1) {
	$domains = array ();//array ("google.com","baidu.com");
	//$file_handle = fopen ( "../metadata/data/100000/1000.txt", "r" );
	$file_handle = fopen ( "D:/php/domain/metadata/data/100000/1000.txt", "r" );

	$i=0;
	while ( ! feof ( $file_handle ) ) {
		$line = fgets ( $file_handle );
			
		$i++;
		if($i<$start) {continue;}
			
		//$name = substr ( $line, strpos ( $line, ',' ) + 1, -1 );
		
		$arr = explode(',',$line);
		
		//echo $line;
		//echo $name."\n";
		if(!empty($arr)){
			array_push ( $domains, $arr );
		}
	}
	fclose ( $file_handle );
	return $domains;
}

foreach( getDomains() as $row){
	//foreach( $row as $data){
	if(!empty($row)){
		echo $row[0].':'.$row[1];
	}	
	//}
//	echo "\n";
}