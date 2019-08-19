<?php

    $command = "curl --user multichainrpc:F1oHsbZnRtbxqSr5T5NVXYbfFUMmkT73DV7vYTE7Fi93 --data '";
    $command = $command . '{"method":"getinfo", "params":[], "id":"4"}';
    $command = $command . "' -H 'content-type: text/plain;' localhost:2686/";
    echo $command;
    echo exec($command);
?>