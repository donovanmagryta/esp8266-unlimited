<?php 
 if(isset($_POST["lednum"])) { 
$lednum = $_POST["lednum"];
$lednum = ($lednum - 1);
$url = $_POST["url"];
$find = $_POST["find"];
$calcdo = $_POST["matches"];
 $file = fopen("program.json","a+") or die ("file not found"); 
$json = file_get_contents('program.json');
$data = json_decode($json, true); 
$data[$lednum][$url] = $url;
$data[$lednum][$find]=$find;
$data[$lednum][$calcdo]=$calcdo;
$newjson = json_encode($data); file_put_contents('program.json', $newjson); fclose($file);
$message = ( $lednum . $url . $find . $calcdo) ;
}
else {
echo "<html> <body> <form action="" method="post"> <?php echo $message; ?> <input type="text" name="lednum"/><input type ="text" name="url"/><input type ="text" name="find"/><input type="text" name="matches"/><input type="submit" name="SubmitButton"/> </form> </body> </html>";
}
?>



