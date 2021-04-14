
<?php
if (isset ($_GET['page_id'])){
    $the_page_id=$_GET['page_id'];

}
    $query="SELECT * FROM pages WHERE page_id=$the_page_id";
    $select_pages_by_id=mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($select_pages_by_id)) {
    $page_id=$row['page_id'];
    $page_position=$row['page_position'];
    $page_title=$row['page_title'];
    $page_content=$row['page_content'];

    }

    if(isset($_POST['update_page'])){
    $page_author=$_POST['page_position'];
    $page_title=$_POST['page_title'];
    $page_category_id=$_POST['page_category'];
    $page_content=$_POST['page_content'];

    }

    $query = "UPDATE pages SET ";
    $query .="page_title  = '{$page_title}', ";
    $query .="page_position = {$page_position}, ";
    $query .="page_content= '{$page_content}', ";
    $query .= "WHERE page_id = {$the_page_id} ";

    $update_post=mysqli_query($connection, $query);
    confirm($update_post);

};
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="page_title" value="<?php echo $page_title; ?>">
    </div>
    
    <div class="form-group">
        <label for="author">Post Author</label>
        <input type="number" class="form-control" name="page_position" value="<?php echo $page_position;?>">
    </div>


    <div class="form-group">
        <label for="page_content">Page Content</label>
        <textarea class="form-control" name="page_content" id="" cols="30" rows="10"><?php echo $page_content;?></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_page" value="Update Page">
    </div>
</form>