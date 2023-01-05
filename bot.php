<?php
system('clear');
error_reporting(0);
function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}




function timer($t){
     $time=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$time-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("◼",$res)."              \r";
}
      echo " \033[1;97mPlease \33[0;31mWait ".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}

function base64($str) {
        return base64_encode($str);
}


function http_visi($url,$data){


  $header = array(
	 "Content-Type: content-type: application/json", 
	 "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36"
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}

function http_get($url){

include 'cfg.php';

  $header = array(
	 "Host: api.solvemedia.com", 
     "Referer: https://claimbits.net/",
	 "Connection: keep-alive", 
     "user-agent: ".$us.""
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
  curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
  curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
  curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$Username:$Password");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}



// curl post

function http_post($url,$data){

include 'cfg.php';

  $header = array(
	 "Host: claimbits.net", 
     "origin: https://claimbits.net", 
      "referer: https://claimbits.net/",
	 "Content-Type: application/x-www-form-urlencoded", 
     "cookie: ".$cok."",
	 "user-agent: ".$us.""
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
  curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
  curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
  curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$Username:$Password");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}

function http_pos($url,$data){


include 'cfg.php';


  $header = array(
"Host: claimbits.net", 
"origin: https://claimbits.net", 
"referer: https://claimbits.net/",
"content-type: application/x-www-form-urlencoded; charset=UTF-8", 
"accept: application/json, text/javascript, */*; q=0.01", 
"x-requested-with: XMLHttpRequest", 
"cookie: ".$cok."",
"user-agent: ".$us.""
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
  curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
  curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
  curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$Username:$Password");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}






b:

date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);


include 'cfg.php';
$ua = array(
 "Host: claimbits.net", 
     "origin: https://claimbits.net", 
      "referer: https://claimbits.net/",
	 "Content-Type: application/x-www-form-urlencoded", 
     "cookie: ".$cok."",
	 "user-agent: ".$us.""
);
$login = "https://claimbits.net/faucet.html";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$Username:$Password");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIE, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
//curl_setopt( $ch, CURLOPT_REFERER, 'https://earndoge.xyz/faucet');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);

$ret = curl_exec($ch);
$pts = explode('<' ,explode('<div id="status"><div class="alert alert-warning" role="alert"><i class="fa fa-exclamation-triangle fa-fw"></i> <b>', $ret)[1])[0];
if($pts == "ANTIBOT"){
z:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$ua = array(
 "Host: claimbits.net", 
     "origin: https://claimbits.net", 
      "referer: https://claimbits.net/",
	 "Content-Type: application/x-www-form-urlencoded", 
     "cookie: ".$cok."",
	 "user-agent: ".$us.""
);
$login = "https://claimbits.net/faucet.html";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$Username:$Password");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIE, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
//curl_setopt( $ch, CURLOPT_REFERER, 'https://earndoge.xyz/faucet');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);

$ret = curl_exec($ch);
$cicy = explode("var token = '",$ret);
$cicy1 = explode("';",$cicy[1]);
$w = $cicy1[0];

$logiin = "https://claimbits.net/system/libs/captcha/request.php";
$dataa = "cID=0&rT=1&tM=light";
$rexio = http_pos($logiin,$dataa);
$cap = json_decode($rexio);


$logiin = "https://claimbits.net/system/libs/captcha/request.php";
$dataa = "cID=0&pC=".$cap[0]."&rT=2";
$rexio = http_pos($logiin,$dataa);


$logiin = "https://claimbits.net/system/ajax.php";
$dataa = "a=proccessAntibot&token=".$w."&type=1&captcha-idhf=0&captcha-hf=".$cap[0]."";
$rexio = http_pos($logiin,$dataa);

$jon = json_decode($rexio);
$s = $jon->status;
if($s == "200"){
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

echo "\033[1;97m".$wak." Sukses bypass Antibot \n";
sleep(3);
goto b;
}else{


goto z;
}
}






$tim = explode('<span id="claimTime">',$ret);
$tim1 = explode(' minutes</span>',$tim[1]);
$time = $tim1[0];

if($time == "4"){
sleep(300);
goto b;
}




//echo($ret);
$cicy = explode("var token = '",$ret);
$cicy1 = explode("';",$cicy[1]);
$w = $cicy1[0];

$kik = explode('<font class="text-success">',$ret);
$kik1 = explode('</font>',$kik[1]);
$wv = $kik1[0];
if($wv == ""){
goto b;
}

$bal = explode('<div class="text-primary"><b>',$ret);
$bal1 = explode('</b>',$bal[1]);
$wv1 = $bal1[0];


$kikk = explode('<div class="col-9 no-space">Current Bits Value <div class="text-warning"><b>',$ret);
$kikk1 = explode('</b></div>',$kikk[1]);
$wvk = $kikk1[0];

echo "\033[1;97m".$wak." \033[0;36mUser=\033[1;97m".$wv." \033[0;36mBalance=\033[1;97m".$wvk." \33[1;33m[".$wv1."]\n";



a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$ua = array(
 "Host: claimbits.net", 
     "origin: https://claimbits.net", 
      "referer: https://claimbits.net/",
	 "Content-Type: application/x-www-form-urlencoded", 
     "cookie: ".$cok."",
	 "user-agent: ".$us.""
);
$login = "https://claimbits.net/faucet.html";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$Username:$Password");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIE, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
//curl_setopt( $ch, CURLOPT_REFERER, 'https://earndoge.xyz/faucet');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);

$ret = curl_exec($ch);




$cicy = explode("var token = '",$ret);
$cicy1 = explode("';",$cicy[1]);
$w = $cicy1[0];

$rex = "https://api-secure.solvemedia.com/papi/_challenge.js?k=6edlGGIdc0PEFRANZBtwekP94pzMDN9Y;f=_ACPuzzleUtil.callbacks[0];l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/h264,v/ogg,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome108,os/nt,os/nt6.3,fwv/B9PYhQ.ilci45,jslib/jquery,htmlplus;am=.hm9jJhvKUz5ymZWmG8pTA;ca=ajax;ts=1671871712;ct=1671872447;th=white;r=0.6563864489251252";
$rex = http_get($rex);
//echo($rex);

$cic = explode('"',explode('"challenge":"', $rex)[1])[0];






$rexi = "http://api.solvemedia.com/papi/media?c=".$cic.";w=300;h=150;fg=000000;bg=f8f8f8";
$rexi = http_get($rexi);
$img = "bits.jpg";
$file = fopen($img, "w");
fwrite($file, $rexi);
fclose($file);
$gmbar = file_get_contents("bits.jpg");
//system('convert bits.jpg -gravity North -chop x15 bits.jpg 2>/dev/null');
$base = base64($gmbar);

$logiin = "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyDDotUJaMWtaKJrvbVC_s-sE-DTbnR065A";
$dataa = '{"requests":[{"image":{"content":"' . $base . '"},"features":[{"type":"TEXT_DETECTION"}]}]}';
$convert = http_visi($logiin,$dataa);

$pro = explode('"', explode('"text": "Enter the following:\n', $convert)[1])[0];
$jos = preg_replace("/[^a-zA-Z]/", "", str_replace('\n','',substr($pro,strpos($pro,'"'))));



$logiin = "https://claimbits.net/system/ajax.php";
$dataa = "a=getFaucet&token=".$w."&captcha=0&challenge=".$cic."&response=".$jos."";
$bits = http_post($logiin,$dataa);

$jon = json_decode($bits);
$s = $jon->status;
$ss = $jon->number;
$sss = $jon->reward;
if($s == "200"){
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);


echo "\033[1;97m".$wak." \33[0;32mSukses bypass captcha! \n";
echo "\033[0;92m[Congratulations, your lucky number was ".$ss." and you won ".$sss."]\n";
sleep(3);
}else{

goto a;
}



goto b;
