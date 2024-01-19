<?php
$covers ="
 \e[0;31m _____        _          ____   ____   _____    _____           _     _               
 \e[0;31m|  __ \      | |        |  _ \ / __ \ / ____|  / ____|         | |   | |              
 \e[0;31m| |  | | __ _| |_ __ _  | |_) | |  | | (___   | |  __ _ __ __ _| |__ | |__   ___ _ __ 
 \e[0;37m| |  | |/ _` | __/ _` | |  _ <| |  | |\___ \  | | |_ | '__/ _` | '_ \| '_ \ / _ \ '__|
 \e[0;37m| |__| | (_| | || (_| | | |_) | |__| |____) | | |__| | | | (_| | |_) | |_) |  __/ |   
 \e[0;37m|_____/ \__,_|\__\__,_| |____/ \____/|_____/   \_____|_|  \__,_|_.__/|_.__/ \___|_| 

 \e[0;31mPHP\e[0;37mScripting | \e[0;31mDonomulyo\e[0;37mCyber\e[0;31mG4NGS73R | \e[0;37m@\e[0;31mpak\e[0;37mTiko
\e[0m";
exec("cls");
$ip = gethostbyname(gethostname());
echo str_repeat("*", 90);
print_r	($covers); echo "\n";
switch (connection_status()) {
	case CONNECTION_NORMAL:
		echo str_repeat("*", 90);echo "\n";
		echo "Status koneksi internet: \e[1;92mTERHUBUNG\e[0m\n";
		echo "Alamat IP: \e[1;92m$ip\e[0m\n";
		echo str_repeat("*", 90);echo "\n\n";
		break;
	case CONNECTION_ABORT:
		echo str_repeat("*", 90);echo "\n";
		echo "\e[0;31mTidak terhubung dengan internet!\e[0m";
		echo str_repeat("*", 90);echo "\n\n";
		break;	
	default:
		break;
}
$username = readline('Input username => ');
$password = readline('Input password => ');
if ($username = 'paktikocakep' && $password = '#tooEasy'){

	$curls = curl_init();
	$alamat = "https://bos.kemdikbud.go.id/datatables/rekening_sekolah";

	curl_setopt_array($curls, array(
		CURLOPT_URL => $alamat,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => 'draw=1&columns%5B0%5D%5Bdata%5D=SyncRekeningBankSekolah.tahun_salur&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=true&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=RefSekolah.npsn&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=DataPembayaran.no_rekening&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=DataPembayaran.nilai_penyaluran&columns%5B4%5D%5Bname%5D=&columns%5B4%5D%5Bsearchable%5D=true&columns%5B4%5D%5Borderable%5D=true&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=0&order%5B0%5D%5Bdir%5D=desc&order%5B1%5D%5Bcolumn%5D=1&order%5B1%5D%5Bdir%5D=asc&order%5B2%5D%5Bcolumn%5D=2&order%5B2%5D%5Bdir%5D=asc&start=0&length=50&search%5Bvalue%5D=&search%5Bregex%5D=false',
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HTTPHEADER => array(
			'POST /datatables/rekening_sekolah HTTP/1.1',
			'Accept: application/json, text/javascript, */*; q=0.01',
			'Accept-Encoding: gzip, deflate, br',
			'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8',
			'Connection: keep-alive',
			'Content-Length: 1364',
			'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
			'Cookie: __dtsu=10401673703733CFC631ADD9073FCFDE; _cc_id=3d4fbd3374ab0405b39cce1c5cb93a3e; __gads=ID=160c0f25a64857a0:T=1674856844:S=ALNI_MZjbDgSjIAWWMdnyOJddOgjr2uf1w; __gpi=UID=00000baf011c4d0e:T=1674856844:RT=1674856844:S=ALNI_MbILv0kuL7__492PjCJ8VvnGlzm8w; _ga_W23E9BM8EH=GS1.1.1675246695.2.1.1675246919.0.0.0; _ga=GA1.3.781830448.1673949639; panoramaId=86542351ed20a6506e41581cb4bc16d53938ca8970ba69dad8d05d2753fddd8c; panoramaId_expiry=1675869857371; PHPSESSID=pdkmo3dfn8neq9d553276hvoi7; _gid=GA1.3.1094622502.1675502577',
			'Host: bos.kemdikbud.go.id',
			'Origin: https://bos.kemdikbud.go.id',
			'Referer: https://bos.kemdikbud.go.id/rekening/sekolah',
			'Sec-Fetch-Dest: empty',
			'Sec-Fetch-Mode: cors',
			'Sec-Fetch-Site: same-origin',
			'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
			'X-Requested-With: XMLHttpRequest',
			'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
			'sec-ch-ua-mobile: ?0',
			'sec-ch-ua-platform: "Windows"'
		),
	));

	$result = curl_exec($curls);
	if ($salah = curl_error($curls)){
		echo 'Kode kesalahan:'.$salah;
	}else{
		$hasil = json_decode($result, true);
		//print_r($hasil);
		print_r($hasil['data'][0]['SalurKppn']);
	}
	curl_close($curls);
}else{
	exit();
	echo 'Ora oleh akses!';
}
?>