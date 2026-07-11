<?php

// $data = file_get_contents('https://jsonplaceholder.typicode.com/posts');

// $dataArray = json_decode($data, TRUE);
// $dataObject = json_decode($data);
// // var_dump($dataObject);
// // var_dump($dataArray);
// echo $dataArray[0]['title'];
// echo "<br/>";
// echo $dataObject[0]->title;
// die;

$curl = curl_init();
$title = 'title variabel';
$body = "body variabel";

curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts/100',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => "userId=1&title=$title&body=$body&id=100",
        CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
        ),
));

$response = curl_exec($curl);
curl_close($curl);
echo $response;
