<?php
header('Content-Type: application/json');

// Get remote Gooogle Spreadshet
$data = file_get_contents("https://spreadsheets.google.com/feeds/list/1cJLHd3TsG9BeuHQ_0HaII1qhwRT9wOb2hsW2hY4-tKw/1/public/full?alt=json");
$json = json_decode($data, true);

// Setup array
$comments = array();

// Go through array and grab all entries that are approved
foreach ($json["feed"]["entry"] as $entry) {
  if ($entry['gsx$approved']['$t'] == "x"){

    $item["comment"] = $entry['gsx$yourmessage']['$t'];
    $item["name"] = $entry['gsx$firstname']['$t']." ".substr($entry['gsx$lastname']['$t'],0,1);

    array_push($comments, $item);
  }
}

// Encode as JSON
$output = json_encode($comments);
echo $output;
?>
