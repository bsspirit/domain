<?php
class UserJsonpCommand extends CConsoleCommand {

	const URL_EXAMPLE = 'http://p.tianji.com/profile/jsonp/getContactCardByUserId/26978509?L=zh_CN&_=1324363354371';

	public function actionGetURL($start=null,$num=null) { //获取URL地址
		if (!empty($start) && !empty($num)){
			$ids = $this->getUserIds($start, $num);
			foreach ($ids as $id) {
				$url = $this->getURL($id);
				echo $id.' : ';//.$url;
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");
				curl_setopt($ch, CURLOPT_NOBODY, false); // remove body
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$head = curl_exec($ch);
				$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				curl_close($ch);
						
				switch ($httpCode) {
					case 200 :
						echo '  200   ok';
						$model=TianjiUserJson::model()->findByPk($id);
						if($model===null){
							$model=new TianjiUserJson;
							$model->userid=$id;
							$model->json=$head;
							$model->save();
						}
						break;
					case 500 :
						echo '  500';
						break;
					default :
						echo '  '.$httpCode;
						break;
				}
				echo "\n";
			}
		
		} else {
			echo "Hello World!!!";	
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