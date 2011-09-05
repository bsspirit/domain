<?php
require_once 'simple_html_dom.php';

class URLCommand extends CConsoleCommand {
	
	const URL_EXAMPLE = 'http://stuffgate.com/stuff/website/top-xxxx-sites';
	
	public function actionGetURL() {//获取URL地址
		//var_dump('start:'.memory_get_usage()); 
		$urls = $this->getURL(100,1000);
		//var_dump('urls:'.memory_get_usage()); 
		
		foreach($urls as $url){
			echo $url."\n";
			
			$html = file_get_html($url);   
			var_dump("html:".memory_get_usage()); 
			
			$table = $html->find('table', 0);			
			$data = '';
			foreach($table->children() as $tr){
				if($tr->children(1)->tag == 'th'){
					continue;
				}
				$a = $tr->children(1)->children(0);
				$start = strpos($a,'>')+1;
				$end = strrpos($a,'<');
				
				$tmp = $tr->children(0)->innertext.','.substr($a,$start,$end-$start)."\n";
				//echo $tmp;
				
				$data.=$tmp;
			}
			
			$this->writeFile(substr($url,strrpos($url,'/')+5,-6),$data);
			sleep(5);//等5s
			//echo 'wait 5 second....'."\n";
			$html->clear();
			var_dump('free:'.memory_get_usage()); 
		}
	}
	
	private function getURL($num,$start=1000){
		$urls = array();
		for($i=0;$i<$num;$i++){
			array_push($urls, 'http://stuffgate.com/stuff/website/top-'.(1000*$i+$start).'-sites');
		}
		return $urls;
	}
	
	private function writeFile($name,$data){
		$f = fopen("../metadata/data/".$name.".txt", "w");
		fwrite($f, $data);
		fclose($f);
	}
}