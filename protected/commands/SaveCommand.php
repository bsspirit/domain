<?php

class SaveCommand extends CConsoleCommand {
	
	public function actionDomain() {
		$domain = $this->getDomains ();
//		foreach ( $domain as $d ) {
//			$arr = explode ( ',', $d );
//			echo $arr [0] . ':' . $arr [1] . "\n";
//			
////			$this->saveDomain($arr [1],$arr [0],$arr [1]);
//		}
//		$this->saveDomain('21212',111,'12121');
		$this->saveDomain();
	}
	
	public function saveDomain(){
		$model=new Domain;
////		$model->domain = $domain;
////		$model->image = $image;
////		$model->grade = $grade;
////		$model->save(false);
	}
	
	private function getDomains($start = 1) {
		$domains = array ();
		$file_handle = fopen ( "../metadata/data/100000/1000.txt", "r" );
		
		$i = 0;
		while ( ! feof ( $file_handle ) ) {
			$line = fgets ( $file_handle );
			
			$i ++;
			if (empty ( $line ) || $i < $start) {
				continue;
			}
			
			$line = substr ( $line, 0, - 1 );
			array_push ( $domains, $line );
		}
		fclose ( $file_handle );
		return $domains;
	}

}