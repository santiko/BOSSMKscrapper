<?php
$sampul = "
 \e[0;31m _____                        _ _ _       _____ __  __ _____  
 \e[0;31m|  __ \                      | (_) |     / ____|  \/  |  __ \ 
 \e[0;31m| |  | | __ _ _ __   ___   __| |_| | __ | |    | \  / | |  | |
 \e[0;31m| |  | |/ _` | '_ \ / _ \ / _` | | |/ / | |    | |\/| | |  | |
 \e[0;37m| |__| | (_| | |_) | (_) | (_| | |   <  | |____| |  | | |__| |
 \e[0;37m|_____/ \__,_| .__/ \___/ \__,_|_|_|\_\  \_____|_|  |_|_____/ 
              | |                                              
              |_| \e[0;31mPHP\e[0;37mScripting | \e[0;31mDonomulyo\e[0;37mCyberG4NGS73R
\e[0m";
print_r("\r".$sampul."\r");
echo "\n";
$url = "http://localhost:5774/updatePanelDashboard?_dc=1674757205397";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'GET /updatePanelDashboard?_dc=1675503946860 HTTP/1.1',
'Accept: */*',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8',
'Connection: keep-alive',
'Cookie: penugasan=oke; killme=dont; PHPSESSID=dsah6mcdrnt4agrsch90ns93tp; dapodik_rememberme=1; dapodik_username=samokit%40gmail.com; dapodik_password=%7B%22ct%22%3A%22EaLkN5UF6cYmkb3aBCJLnA%3D%3D%22%2C%22iv%22%3A%22ee8844f1f3d0ac9966d8df8cb2e176e2%22%2C%22s%22%3A%22eb0e784395defeaf%22%7D',
'Host: localhost:5774',
'Referer: http://localhost:5774/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
'X-Requested-With: XMLHttpRequest',
'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
	));

$hasil = curl_exec($curl);
if ($salah = curl_error($curl)){
	echo $salah;
}else{
	$dcoded = json_decode($hasil, true);
	print_r("\e[1;32m".str_repeat("\033[102m \033[0m", 50)); echo "\n";
	print_r("\e[1;32m".str_repeat("*", 50)); echo "\n";
	echo "\e[1;32m[+] Tool: \e[1;33mDapodik\e[1;34mCMD\n\e[0m";
	echo "\e[1;32m[+] Author: \e[1;33mpakTiko\n\e[0m";
	echo "\e[1;32m[+] Deskripsi: \e[1;33mhanya untuk mengisi kegabutan otak!\n\e[0m";
	echo "\e[1;32m[+] Versi: \e[1;33m2023.d\e[0m\n";
	print_r("\e[1;32m".str_repeat("*", 50)); echo "\n";
	print_r("\e[1;32m".str_repeat("\033[102m \033[0m", 50)); echo "\n";
	print_r("[-] \e[0;32mJumlah pegawai \e[0;37m=> \e[1;33m".$dcoded['data']['paneljumlahgtk']." orang\e[0m\n");
	print_r("[-] \e[0;32mGTK \e[0;37m=> \e[1;33m".$dcoded['data']['paneljumlahguru']." orang\e[0m\n");
	print_r("[-] \e[0;32mPTK \e[0;37m=> \e[1;33m".$dcoded['data']['paneljumlahtendik']." orang\e[0m\n");
	print_r("[-] \e[0;32mPeserta Didik \e[0;37m=> \e[1;33m".$dcoded['data']['paneljumlahpd']." orang\e[0m\n");
	print_r("[-] \e[0;32mRombel \e[0;37m=> \e[1;33m".$dcoded['data']['paneljumlahrombel']." orang\e[0m\n");
}
curl_close($curl);

?>