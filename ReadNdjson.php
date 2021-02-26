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
/*{"id":1,"name":"Text 1"}
{"id":2,"name":"Text 2"}
{"id":3,"name":"Text 3"}
{"id":4,"name":"Text 4"}
{"id":5,"name":"Text 5"}*/
//Data Save inot New File
file_put_contents('listofusers.ndjson', $ndReady);//FILE_APPEND
$readlines = file('listofusers.ndjson');

foreach ($readlines as $line) {
    
    $data = json_decode($line, true);
    echo "Name: ".$data['name']."<br/>";

}

?>
