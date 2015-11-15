<?php header('Content-Type: application/json; charset=utf-8'); ?>
<?php
#FILE SERVER UPLOADED
$url="1.json";
$json_fileup=file_get_contents($url);
var_dump($json_fileup);
#SEND THROUGH AJAX / FORM HTML!
 function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
    if (is_ajax()){
        
$data = json_decode(stripslashes($_POST['data']));
echo "<br>";
var_dump(stripslashes($_POST['data']));
echo "NULL ?";var_dump($data); echo "NULL!!!";
echo "<br>";
echo "gia tri heading=".$data->heading;
 
 $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
 var_dump($json);
$json_dc = json_decode($json);

var_dump($json_dc);
echo "gia tri b=".$json_dc->b;

$json_dc2 = json_decode($json,true);
var_dump($json_dc2);
echo "gia tri e=".$json_dc2["e"];
 
    }
?>