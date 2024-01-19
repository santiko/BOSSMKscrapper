<?php
$sampul = "
   _____ _____        _       _            _ _ _    
  / ____|  __ \      | |     | |          | (_) |   
 | (___ | |__) |   __| | __ _| |_ __ _  __| |_| | __
  \___ \|  ___/   / _` |/ _` | __/ _` |/ _` | | |/ /
  ____) | |      | (_| | (_| | || (_| | (_| | |   < 
 |_____/|_|       \__,_|\__,_|\__\__,_|\__,_|_|_|\_\                                                    

[+] \e[1;33murl\e[0m => \e[1;92mhttps://sp.datadik.kemdikbud.go.id/app/#/akun\e[0m\n
";
exec("cls");
print_r($sampul); echo "\n";

$url = "https://sp.datadik.kemdikbud.go.id/sekolah/ptk?_s=57eded8f850a4f87875cdad8dc1e3022";
$payload = "tahun=2022";
$headers = array(
		'POST /sekolah/ptk?_s=57eded8f850a4f87875cdad8dc1e3022 HTTP/1.1',
'Accept: application/json, text/javascript, */*; q=0.01',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8',
'Connection: keep-alive',
'Content-Length: 10',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Cookie: __dtsu=10401673703733CFC631ADD9073FCFDE; _cc_id=3d4fbd3374ab0405b39cce1c5cb93a3e; x-bni-fpc=d8e54c64f943863b62be4aed36d2daa9; __gads=ID=160c0f25a64857a0:T=1674856844:S=ALNI_MZjbDgSjIAWWMdnyOJddOgjr2uf1w; __gpi=UID=00000baf011c4d0e:T=1674856844:RT=1674856844:S=ALNI_MbILv0kuL7__492PjCJ8VvnGlzm8w; panoramaId_expiry=1676170437549; panoramaId=1ae8b26231698443d3b994e15b9816d5393866988d05ae21fedeae37436c3d1e; appConfig={}; spCook=.eJwdzk1uwyAQBeCrWKwzFeCxGWdVjEGVuuwJUCAt8l9UbFVR1bsXe_vm05v3y3LMOQV2ZY2KIQa6AzXcA95JAanmBsEHCjcRay4lu7DHibkyTg3IwQx2ACEsgq51B3U_9A4HTYYfeM_xu-js53VM2-vn7NP0clvnctqej8iugl_Y4mdf0IdftjT66n3Pyz5Vb31Mh_tJk3_6r-NnI4iLqiphjuM6naFRFp3iHThBNSBKU1aTBKup7xw56_BcvY0F14hair6HRtoW0HQt6LZDsMp2phSU8cT-_gGDIEoy.i_88LnvI2SsFQSbSOKlw9AwFO6A; BNES_spCook=qaFeV4wB+ypmOKNSYv2cZyB33LE93jJLHhNos8xd5Uckx4nY/OC2Y49r7mCOPF8KeejpNL441mVwodZLY9ancrHjI4puxZO1fyNXHnWRhcikQIUEqYJaawL5Yh9CspUlXputEyB+5j0GO/5VCJV0GsA/x2VfMOPI7mEisvg5rEwJMAxuLQQON+02pb40gpM1llyNGYy6zMgaEzLIR56o83hQpY0uKASXJJ2R9WXFo9l/UuGx9GX5H9srV9GP8rpePPm6rUPCYZlq5lIsr/cO3IkAvIGAvMza5gt+pdSgJuJtjtH3v5nPtQ7RyLBNLM2B9XuKrK4hxk2Oj+NhcJT2H7fLp4lc6Xe4jxObGfFTHqudH/nTniKQsmA8ATWqZ0+JWXH7BHhVloAjgZS6L3Z1B7Db1Wh9gor0aT0Zu0hDwv8difEOPu6sK/EjCsilCxmfEgBL8NvdgQC3IrRacKACKCNCNJi9g80ZvXHUl+qCILnOkEc0YTDgVw==; x-bni-rncf=1675778214643; _ga=GA1.1.781830448.1673949639; _ga_W23E9BM8EH=GS1.1.1675781055.3.1.1675781138.0.0.0',
'Host: sp.datadik.kemdikbud.go.id',
'Origin: https://sp.datadik.kemdikbud.go.id',
'Referer: https://sp.datadik.kemdikbud.go.id/app/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
'X-Requested-With: XMLHttpRequest',
'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'traceparent: 00-c2d4cdf0c31bc7c01c5dea3ef37068a9-1e1fb1a1265b95bf-01',
		);
$ci = curl_init();
curl_setopt_array($ci, array(
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_SSL_VERIFYHOST => false,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $payload,
	CURLOPT_HTTPHEADER => $headers,
	CURLOPT_FOLLOWLOCATION => true
));
$resp = curl_exec($ci);
if ($kesalahan = curl_error($ci)){
	echo $kesalahan;
}else{
	$resp = json_decode($resp, true);
	print_r(str_repeat("*", 100)."\n");
	print_r("\e[1;33mID \e[1;92m=> \e[1;34mPTK \e[1;92m=> \e[1;31mTANGGAL LAHIR \e[1;92m=> \e[1;36mNIK \e[1;92m=> \e[1;37mNO. SURAT TUGAS\n");
	print_r(str_repeat("*", 100)."\n");
	for ($x = 1; $x < sizeof($resp); $x++){
		print_r("\e[1;33m$x \e[1;92m=> \e[1;34m".$resp[$x]['nama']." \e[1;92m=> \e[1;31m".$resp[$x]['tanggal_lahir']." \e[1;92m=> \e[1;36m".$resp[$x]['nik']." \e[1;92m=> \e[1;37m".$resp[$x]['nomor_surat_tugas']."\n");
	}
	print_r(str_repeat("*", 100)."\n");
	//print_r($resp[0]);
	/*  ["ptk_terdaftar_id"]=>
    string(36) "d57506b8-383e-4e6d-ae76-7a4ded173426"
    ["ptk_id"]=>
    string(36) "a05abfae-97d1-4082-9327-5e3c37c7d3b3"
    ["nama"]=>
    string(20) "KUKUH PANCA SETYAWAN"
    ["jenis_kelamin"]=>
    string(1) "L"
    ["tanggal_lahir"]=>
    string(10) "1993-01-13"
    ["nik"]=>
    string(16) "3107011301930001"
    ["nuptk"]=>
    NULL
    ["nip"]=>
    NULL
    ["nrg"]=>
    NULL
    ["kepegawaian"]=>
    string(7) "GTY/PTY"
    ["jenis_ptk"]=>
    string(27) "Tenaga Administrasi Sekolah"
    ["nomor_surat_tugas"]=>
    string(22) "149.6/YPID/SK/VII/2021"
    ["tanggal_surat_tugas"]=>
    string(10) "2021-07-01"
    ["tmt_tugas"]=>
    string(10) "2021-07-02"
    ["ptk_induk"]=>
    string(2) "Ya"
    ["last_update"]=>
    string(26) "2022-09-02T20:06:59.510000"*/



    /*
	\e[1;32m	Green
	\e[1;33m	Yellow
	\e[1;34m	Blue
	\e[1;31m	Purple
	\e[1;36m	Cyan
	\e[1;37m	White


    */
}

curl_close($ci);
?>


