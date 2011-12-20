<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>


<?php

$url = 'http://p.tianji.com/profile/jsonp/getContactCardByUserId/1?L=zh_CN&_=1324391826982&callback=jsonp_http_callback';
			
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
curl_setopt($ch, CURLOPT_NOBODY, false); // remove body
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$head = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch); 

switch($httpCode){
	case 200:
		echo $head;
		break;
	case 500:
		echo '500 error!';
		break;
	default:
		echo 'xxx error';
		break;
}
?>