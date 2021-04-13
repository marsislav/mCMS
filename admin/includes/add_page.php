<?php 
    if (isset($_POST['create_page'])){
       $page_title=$_POST['page_title'];

        $page_position=$_POST['page_position'];
        $page_content=$_POST['page_content'];
        //$post_date=date('d-m-y');
        //$post_comment_count=555;

        //move_uploaded_file($post_image_temp,"../img/$post_image");

        $query="INSERT INTO pages(page_title, page_position, page_content) VALUES('{$page_title}', {$page_position}, '{$page_content}')";

        $create_page_query=mysqli_query($connection, $query);
        
        confirm($create_page_query);
    }
?>
<form action="" method="post">
    <div class="form-group">
        <label for="title">Page Title</label>
        <input type="text" class="form-control" name="page_title">
    </div>


    <div class="form-group">
        <label for="author">Position in navigation </label>
        <span>Legend: 0: not visible in navigation, 1: First position, 2: Seccond position.... N: Last position</span>
        <input type="number" class="form-control" name="page_position">
    </div>

    <div class="form-group">
        <label for="post_content">Page Content</label>
        <textarea class="form-control" name="page_content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_page" value="Publish Page">
    </div>
</form>