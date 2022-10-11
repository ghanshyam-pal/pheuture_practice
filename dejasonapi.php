<?php
$arr = array("a"=>"John", "b"=>"Mary","c"=> "Peter","d"=> "Sally");
//encode array into json
$enjson = json_encode($arr);
$dejson= json_decode($enjson);
print_r($dejson);



?>