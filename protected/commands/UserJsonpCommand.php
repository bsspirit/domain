<?php
class UserJsonpCommand extends CConsoleCommand {

	const URL_EXAMPLE = 'http://p.tianji.com/profile/jsonp/getContactCardByUserId/26978509?L=zh_CN&_=1324363354371';

	public function actionGetURL() { //获取URL地址
		//var_dump('start:'.memory_get_usage()); 
		$ids = $this->getUserIds(1, 1);
		//var_dump('urls:'.memory_get_usage()); 

		foreach ($ids as $id) {
			$url = $this->getURL($id);
			echo $url;
	
//			$ch = curl_init();
//			curl_setopt($ch, CURLOPT_URL, $url);
//			curl_setopt($ch, CURLOPT_HEADER, 0);
//			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");
//			curl_setopt($ch, CURLOPT_NOBODY, false); // remove body
//			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//			$head = curl_exec($ch);
//			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//			curl_close($ch);

			$httpCode=200;
			$head='fadfad';
			
			switch ($httpCode) {
				case 200 :
					echo "<br/>".$id.":200";
					break;
				case 500 :
					echo "<br/>".$id.":500";
					break;
				default :
					echo "<br/>".$id.":xxx";
					break;
			}

			//			sleep(5);//等5s
			//			var_dump('free:'.memory_get_usage()); 
		}
	}

	private function getUserIds($start = 1000, $num = 10) {
		$urls = array ();
		for ($i = 0; $i < $num; $i++) {
			array_push($urls, ($i + $start));
		}
		return $urls;
	}
	
	private function getURL($id){
		return 'http://p.tianji.com/profile/jsonp/getContactCardByUserId/'.$id.'?L=zh_CN&_=1324391826982&callback=tj';
	}

	private function writeFile($name, $data) {
		$f = fopen("../metadata/data/" . $name . ".txt", "w");
		fwrite($f, $data);
		fclose($f);
	}
}