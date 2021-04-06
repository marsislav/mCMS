<?php 
    if (isset($_POST['create_post'])){
        $post_title=$_POST['title'];
        $post_author=$_POST['author'];
        $post_category_id=$_POST['post_category_id'];
        $post_status=$_POST['post_status'];
        $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
        $post_tags=$_POST['post_tags'];
        $post_content=$_POST['post_content'];
        $post_date=date('d-m-y');
        $post_comment_count=555;

        move_uploaded_file($post_image_temp,"../img/$post_image");

        $query="INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status)";
        $query.="VALUES({$post_category_id},'{$post_title}', '{$post_author}', now(), '{$post_image}','{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";

        $create_post_query=mysqli_query($connection, $query);
        
        confirm($create_post_query);
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="post_category">Post Category</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>
    <div class="form-group">
        <label for="author">Post Author</label>
        <input type="text" class="form-control" name="author">
    </div>
    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>
    <div class="form-group">
        <label for="title">Post Images</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label for="title">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
        <label for="post_content">Post Conetent</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>
</form>