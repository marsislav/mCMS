<?php 
include "includes/db.php";
include "includes/header.php";
;?>
    <!-- Navigation -->
    <?php include "includes/navigation.php";?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
       
        <?php if (isset($_GET['p_id'])){
        $the_post_id=$_GET['p_id'];

      }
      ?>

        <?php $query = "SELECT * FROM posts WHERE post_id = $the_post_id"; 
        $select_all_posts_query=mysqli_query($connection, $query);
        while ($row=mysqli_fetch_assoc($select_all_posts_query)) {
          $post_title=$row['post_title'];
          $post_author=$row['post_author'];
          $post_date=$row['post_date'];
          $post_image=$row['post_image'];
          $post_content=$row['post_content'];
          ?>
          

<div class="col-md-8">
          <h1 class="page-header">
            Page Heading
            <small>Secondary Text</small>
          </h1>

          <!-- First Blog Post -->
          <h2>
            <a href="#"><?php echo $post_title;?></a>
          </h2>
          <p class="lead">by <a href="index.php"><?php echo $post_author;?></a></p>
          <p>
            <span class="glyphicon glyphicon-time"></span> <?php echo $post_date;?>
          </p>
          <hr />
          <img
            class="img-responsive"
            src="img/<?php echo $post_image; ?>"
            alt=""
          />
          <hr />
          <p>
          <?php echo $post_content;?>
          </p>

          <!-- Pager 
          <ul class="pager">
            <li class="previous">
              <a href="#">&larr; Older</a>
            </li>
            <li class="next">
              <a href="#">Newer &rarr;</a>
            </li>
          </ul>-->
        </div>
          <?php
        }
        ?>
        
        

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php";?>
      </div>
      <!-- /.row -->

      <hr />
      
          <!-- Comments Form -->

        <?php

          if(isset($_POST['create_comment'])){
            
            $the_post_id=$_GET['p_id'];
            $comment_author=$_POST['comment_author'];
            $comment_email=$_POST['comment_email'];
            $comment_content=$_POST['comment_content'];
            $query="INSERT INTO comments (comment_post_id, comment_author,  comment_email, comment_content, comment_status, comment_date)";
            $query.="VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now() )";
          };
          $create_comment_query=mysqli_query($connection, $query);
          $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
          $query.= "WHERE post_id=$the_post_id ";
          $update_comment_count=(mysqli_query($connection, $query));
        ?>


          <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form" action="" method="post">
            <div class="form-group">
            <label for="comment_author">Your Name:</label>
                <input type="text" name="comment_author" class="form-control" placeholder="Enter Your Name here...">
              </div>
              <div class="form-group">
              <label for="comment_email">Your Email:</label>
                <input type="email" name="comment_email" class="form-control"  placeholder="Enter Your Email Address here...">
              </div>
              <div class="form-group">
              <label for="comment_content">Your Comment:</label>
                <textarea class="form-control" rows="3" placeholder="Your comment goes here..." name="comment_content"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="create_comment">Submit comment!</button>
            </form>
          </div>

          <hr />

          <!-- Posted Comments -->

<?php

$query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
$query.="AND comment_status = 'approved'";
$query.="ORDER BY comment_id DESC";
$select_comment_query=mysqli_query($connection, $query);
//confirm($select_comment_query);
if (!$select_comment_query) {
  die('QUERY FAILED!' . mysqli_error($connection));
}
while($row=mysqli_fetch_array($select_comment_query))
{
  $comment_date=$row['comment_date'];
  $comment_content=$row['comment_content'];
  $comment_author=$row['comment_author'];
  
  ?>

<!-- Comment -->
<div class="media">
            <a class="pull-left" href="#">
              <img
                class="media-object"
                src="http://placehold.it/64x64"
                alt=""
              />
            </a>
            <div class="media-body">
              <h4 class="media-heading">
                <?php echo $comment_author; ?>
                <small><?php echo $comment_date; ?></small>
              </h4>
              <?php echo $comment_content; ?>
            </div>
          </div>   
<?php } ?>



           
    </div>
    <?php include "includes/footer.php";?>