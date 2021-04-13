<header>
<div class="logo container">
  <a class="navbar-brand" href="index.php">
    <img src="img/logo.png" alt="Web Company! - mCMS 2.1" class="logoImg"/>
  </a>
</div>
      <nav class="navbar" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#"
              ><img src="img/logo.png" alt="" style="max-height: auto"
            /><span>W</span>eb <span>C</span>ompany!</a>-->
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div
            class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1"
          >
          <?php /* JUST FOR REFERENCE
          <?php $query = "SELECT * FROM posts"; 
        $select_all_posts_query=mysqli_query($connection, $query);
        while ($row=mysqli_fetch_assoc($select_all_posts_query)) {
          
          $post_id=$row['post_id'];
          $post_title=$row['post_title'];
          $post_author=$row['post_author'];
          $post_date=$row['post_date'];
          $post_image=$row['post_image'];
          $post_content=substr($row['post_content'],0,100);
          $post_status=$row['post_status'];

          if ($post_status =='published'){
          ?>

          <h2 class="page-header">
          <a href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title;?></a>
            <small>by <a href="index.php"><?php echo $post_author;?></a></small>
          </h2>
          */
          ?>
            <ul class="nav navbar-nav">
              <?php
                $query="SELECT * FROM pages WHERE page_position != '0' ORDER BY page_position ASC";
                $select_all_navigation_query=mysqli_query($connection, $query);
                while ($row=mysqli_fetch_assoc($select_all_navigation_query)) {
                  $page_title=$row['page_title'];
                  $page_id=$row['page_id'];
                  echo "<li><a href='page.php?page_id=$page_id'> {$page_title}</a></li>";
                }
                
              ?>
                            <?php /*   SHOW CATEGORIES ON TOP
               // $query="SELECT * FROM categories";
               // $select_all_categories_query=mysqli_query($connection, $query);
               // while ($row=mysqli_fetch_assoc($select_all_categories_query)) {
                //  $cat_title=$row['cat_title'];
                //  echo "<li><a href='#'> {$cat_title}</a></li>";
                }*/
              ?>
              
              <li><a href="admin">Administrator</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </header>
