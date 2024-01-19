import json
import pandas as pd
import http.client

conn = http.client.HTTPSConnection("bos.kemdikbud.go.id")

payload = "draw=1&columns%5B0%5D%5Bdata%5D=SyncRekeningBankSekolah.tahun_salur&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=true&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=RefSekolah.npsn&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=DataPembayaran.no_rekening&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=DataPembayaran.nilai_penyaluran&columns%5B4%5D%5Bname%5D=&columns%5B4%5D%5Bsearchable%5D=true&columns%5B4%5D%5Borderable%5D=true&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=0&order%5B0%5D%5Bdir%5D=desc&order%5B1%5D%5Bcolumn%5D=1&order%5B1%5D%5Bdir%5D=asc&order%5B2%5D%5Bcolumn%5D=2&order%5B2%5D%5Bdir%5D=asc&start=0&length=50&search%5Bvalue%5D=&search%5Bregex%5D=false"

headers = {
    'cookie': "PHPSESSID=2o4tl5l3i9hu0def74e60up23t; _ga=GA1.3.1703716312.1677257673; _gid=GA1.3.803150826.1677257673; _gat_gtag_UA_97389054_8=1",
    'Accept': "application/json, text/javascript, */*; q=0.01",
    'Accept-Language': "en-GB,en-US;q=0.9,en;q=0.8",
    'Connection': "keep-alive",
    'Content-Type': "application/x-www-form-urlencoded; charset=UTF-8",
    'Origin': "https://bos.kemdikbud.go.id",
    'Referer': "https://bos.kemdikbud.go.id/rekening/sekolah",
    'Sec-Fetch-Dest': "empty",
    'Sec-Fetch-Mode': "cors",
    'Sec-Fetch-Site': "same-origin",
    'User-Agent': "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36",
    'X-Requested-With': "XMLHttpRequest",
    'sec-ch-ua': '"Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"',
    'sec-ch-ua-mobile': "?0",
    'sec-ch-ua-platform': '"Windows"'
    }

conn.request("POST", "/datatables/rekening_sekolah", payload, headers)

res = conn.getresponse()
data = res.read()

jo = json.loads(data)
jf = json.dumps(jo, indent=2)
print(jf)