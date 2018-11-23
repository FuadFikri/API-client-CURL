<?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'http://10.33.34.151/server/books/read.php');

        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);
        // print_r($obj->books);
        $data = $obj->books;
        
?>
    <table border="1">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>author name</td>
            <td>price</td>
            <td>isbn</td>
            <td>category</td>
            <td>aksi</td>
        </tr>
        <?php
            foreach ($data as $d) {?>
                <tr>
                    <td><?=$d->id ?></td>
                    <td><?=$d->title ?></td>
                    <td><?=$d->author_name ?></td>
                    <td><?=$d->price ?></td>
                    <td><?=$d->isbn ?></td>
                    <td><?=$d->category ?></td>
                    <td> 
                        <a href="">edit</a>
                        <a href="">delete</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
