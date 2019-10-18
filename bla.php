<?php

	$apiKey = "3a15582ea29e2f551cfd21dde0ce1494";

	$curlUrl = "https://api.pushalert.co/rest/v1/segments";

	$headers = Array();
	$headers[] = "Authorization: api_key=".$apiKey;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $curlUrl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);

	$output = json_decode($result, true);
	if($output["success"]) {
                for($i=0; $i<count($output["segments"]); $i++){
                    echo "{$output["segments"][$i]["id"]} - {$output["segments"][$i]["name"]} - {$output["segments"][$i]["subscribers"]}n";
                }
	}
?>
