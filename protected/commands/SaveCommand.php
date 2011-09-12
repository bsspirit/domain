<?php

class SaveCommand extends CConsoleCommand {

	public function actionDomain() {
		
		$files = $this->getFiles();
		foreach($files as $file){
			var_dump ( 'start:' . memory_get_usage () );
			$domain = $this->getDomains ($file);
			foreach ( $domain as $d ) {
				$arr = explode ( ',', $d );
				echo $arr [0] . ':' . $arr [1] . "\n";
				$this->saveDomain($arr[1],$arr[0],$arr[1]);
				
				unset($arr);
				unset($d);
			}
			var_dump ( 'end:' . memory_get_usage () );
		}
	}

	private function getFiles(){
		$files = array();
		$dir = '../metadata/data/100000/';
		$handle = opendir($dir);
		$i = 0;
		while(false !== $file=(readdir($handle))){
			if($file != '.' && $file != '..'){
				$i++ ;
				array_push($files, $dir.$file);
				echo $dir.$file."\n";
			}
		}
		closedir($handle);
//		echo $i;
		return $files;
	}



	private function getDomains($file, $start = 1) {
		$domains = array ();
		//$file_handle = fopen ( "../metadata/data/100000/1000.txt", "r" );
		$file_handle = fopen ( $file, "r" );

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

	private function saveDomain($domain,$grade,$image){
		$model=new Domain;
		$model->domain = $domain;
		$model->image = $image.'.png';
		$model->grade = $grade;
		$model->save(false);
	}

}