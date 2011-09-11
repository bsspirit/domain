<?php

class SaveCommand extends CConsoleCommand {
	
	public function actionDomain(){
		$domain = $this->getDomains();
		foreach($domain as $d){
			$arr = explode(',',$d);
			echo $arr[0].':'.$arr[1];
		}
		
		
//		$model=new Domain;
//		$model->domain = '';
//		$model->image = '';
//		$model->grade = 0;
//		$model->save();
	}
	
	private function getDomains($start=1) {
		$domains = array ();//array ("google.com","baidu.com");
		$file_handle = fopen ( "../metadata/data/100000/1000.txt", "r" );
		
		$i=0;
		while ( ! feof ( $file_handle ) ) {
			$line = fgets ( $file_handle );		
			
			$i++;
			if($i<$start) {continue;}			
			
//			$name = substr ( $line, strpos ( $line, ',' ) + 1, -1 );
//			if(!empty($name)){
//				array_push ( $domains, $name );
//			}
			array_push ( $domains, $line );
		}
		fclose ( $file_handle );
		return $domains;
	}
	
}