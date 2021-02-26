<?php
// Your code here!
//Generate A Dynamic Array and Convert it into JSON and Assign one New Array
$encodeData = [];
for($i=1;$i<=5;$i++){

    $randomArray = ["id"=>$i,"name"=>"Text ".$i];
    $encodeData[] = json_encode($randomArray,true); 

}
//Array convert inot String as New Line Formst
$ndReady = implode("\n",$encodeData);

//Data Save inot New File
file_put_contents('listofusers.ndjson', $ndReady);//FILE_APPEND
$readlines = file('listofusers.ndjson');
foreach ($readlines as $line) {
    $data = json_decode($line, true);
    echo "Name: ".$data['name']."<br/>";
}
?>
