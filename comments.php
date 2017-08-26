<?php

$data = file_get_contents("https://spreadsheets.google.com/feeds/list/1cJLHd3TsG9BeuHQ_0HaII1qhwRT9wOb2hsW2hY4-tKw/1/public/full?alt=json");

$json = json_decode($data, true);


foreach ($json["feed"]["entry"] as $entry) {
  if ($entry['gsx$approved']['$t'] == "x"){
    echo $entry['gsx$yourmessage']['$t']."\n";
    echo $entry['gsx$firstname']['$t']." ".substr($entry['gsx$lastname']['$t'],0,1)."."."\n";
    echo "\n";
  }
}


?>
