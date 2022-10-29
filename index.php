<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

        $hng = [
            "slackUsername"=> "olusameze",
            "backend"=>TRUE,
            "age"=> 23,
            "bio"=> "I am Ezekiel Olumide, A soon to be graduate transitioning into tech. Happy to join the internship"
        
        ];
    
    echo json_encode($hng);

?>

