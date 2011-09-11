<?php

class CutPageCommand extends CConsoleCommand {
	
	public function run() {
		$domains = $this->getDomains (106);//2,612
		foreach ( $domains as $domain ) {
			try{
				$this->outputImage ( $domain );
			}catch(Exception $e){
				echo $e;
			}
		}
	}
	
	private function outputImage($domain) {
		var_dump ( 'start:' . memory_get_usage () );
		$browser = new COM ( "InternetExplorer.Application" );
		$handle = $browser->HWND;
		$browser->Visible = true;
		$browser->FullScreen = true;
		
		$url = "http://www." . $domain;
		$file = "../metadata/screen/3000/" . $domain . ".png";
		echo $url . "\n";
		
		$browser->Navigate ( $url );
		while ( $browser->Busy ) {
			com_message_pump ( 1000 );
		}
		
		if (! file_exists ( $file )) {
			$im = imagegrabwindow ( $handle, 0 );
			imagepng ( $im, $file );
			imagedestroy ( $im );
		}
		
		$fp = fopen ( $file, 'rb' );
		fpassthru ( $fp );
		$browser->Quit ();
		
		var_dump('free:'.memory_get_usage()); 
	}
	
	private function getDomains($start=1) {
		$domains = array ();//array ("google.com","baidu.com");
		$file_handle = fopen ( "../metadata/data/100000/3000.txt", "r" );
		
		$i=0;
		while ( ! feof ( $file_handle ) ) {
			$line = fgets ( $file_handle );
			$i++;
			if($i<$start) continue;

			$name = substr ( $line, strpos ( $line, ',' ) + 1, -1 );
			if(!empty($name)){
				array_push ( $domains, $name );
			}
		}
		fclose ( $file_handle );
		return $domains;
	}

}
