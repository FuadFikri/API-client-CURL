<form action="" method="post">
    <label for="title">title</label>
    <input type="text" name="title" id="">
    <br>
    <label for="author_name">author</label>
    <input type="text" name="author_name" id="">
    <br>
    <label for="price">price</label>
    <input type="text" name="price" id="">
    <br>
    <label for="isbn">isbn</label>
    <input type="text" name="isbn" id="">
    <br>
    <label for="category">category</label>
    <input type="text" name="category" id="">
    <br>
    <input type="submit"  name="aksi" value="tambah">
</form>

<?php
            $title = $_POST['title'];
            $author_name = $_POST['author_name'];
            $price = $_POST['price'];
            $isbn = $_POST['isbn'];
            $category = $_POST['category'];

        if (@$_POST['aksi'] == 'tambah') {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'http://10.33.34.151/server/books/create.php');
            curl_setopt($ch, CURLOPT_POST,1);

            
            curl_setopt($ch, CURLOPT_POSTFIELDS,"title=$title&author_name=$author_name&price=$price&isbn=$isbn&category=$category");
            
            $server_output = curl_exec($ch);
            curl_close($ch);
        }
           


       
        
?>