<?php
        if (@$_GET['id']>0) {
        $id = $_GET['id'];
        $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'http://10.33.34.151/server/books/read_one.php');
            curl_setopt($ch, CURLOPT_POSTFIELDS,"id=$id");
            $server_output = curl_exec($ch);

            $result = curl_exec($ch);
            curl_close($ch);
            $obj = json_decode($result);
            print_r($obj);
    }
        
?>