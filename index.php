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
        <?php $query = "SELECT * FROM posts"; 
        $select_all_posts_query=mysqli_query($connection, $query);
        while ($row=mysqli_fetch_assoc($select_all_posts_query)) {
          
          $post_id=$row['post_id'];
          $post_title=$row['post_title'];
          $post_author=$row['post_author'];
          $post_date=$row['post_date'];
          $post_image=$row['post_image'];
          $post_content=substr($row['post_content'],0,100);
          ?>
<div class="col-md-8">
          <h1 class="page-header">
            Page Heading
            <small>Secondary Text</small>
          </h1>

          <!-- First Blog Post -->
          <h2>
            <a href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title;?></a>
          </h2>
          <p class="lead">by <a href="index.php"><?php echo $post_author;?></a></p>
          <p>
            <span class="glyphicon glyphicon-time"></span> <?php echo $post_date;?>
          </p>
          <hr />
          <a href="post.php?p_id=<?php echo $post_id;?>">

          <img
            class="img-responsive"
            src="img/<?php echo $post_image; ?>"
            alt=""
          />
          </a>
          <hr />
          <p>
          <?php echo $post_content;?>
          </p>
          <a class="btn btn-primary" href="#"
            >Read More <span class="glyphicon glyphicon-chevron-right"></span
          ></a>

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
    </div>
    <?php include "includes/footer.php";?>