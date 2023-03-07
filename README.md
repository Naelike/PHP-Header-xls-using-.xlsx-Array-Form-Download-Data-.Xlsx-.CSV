# PHP-Header-xls-using-.xlsx-Array-Form-Download-Data-.Xlsx-.CSV

PHP Header xls using .xlsx &amp; Array Form Download  Data .Xlsx .CSV

# Data Array Demo
```
$results = array();
$results = array(
	'0' => array(
		'ON' => '1',
		'Name' => 'Bame a',
	),
	'2' => array(
		'ON' => '2',
		'Name' => 'Bame B',
	),
);
```

# PHP Header
```
header("Content-type: text/xlsx; charset=UTF-8");
header("Content-Disposition: attachment; filename=name_file");
```

# PHP Form Express
```
$results = array();
$results = array(
  '0' => array(
    'ON' => '1',
    'Name' => 'Bame a',
  ),
  '2' => array(
    'ON' => '2',
    'Name' => 'Bame B',
  ),
);
header("Content-type: text/xlsx; charset=UTF-8");
header("Content-Disposition: attachment; filename=name_file");
$output = fopen("php://output", "w");
$header = array_keys($results[0]);
fputcsv($output, $header);
foreach($results as $row) {
  fputcsv($output, $row);
}
fclose($output);
exit;
```

# Developer : NaeLike เนไลก์

<img class="rounded" src="http://img.in.th/images/c938fdabdf2a1d4b2deda8ffea4fa189.jpg" width="120" alt="NaeLike"> 

> Naelike เนไลก์

@เว็บไซต์ :+1: Web :  <https://naelike.com> ..! :shipit:
<br>
@ติดตาม :+1: Web :  <https://naelike.com/addmee> ..! :shipit:

TikTok :  <https://www.tiktok.com/@naelike6564>
<br>
Facebook :  <https://web.facebook.com/NaeLikePage>
<br>
Instagram :  <https://www.instagram.com/naelike_ig>
<br>


<a href="https://link.ckpzmc.xyz/dispnae"> 
   <img class="rounded" src="https://i.pinimg.com/originals/1a/9a/f1/1a9af177bdcd0bd93568e59bb7600cbe.png" width="120" alt="NaeLike"> 
   </br>
   <b class="fs-12">Discord คลิก..!</b> 
</a>
