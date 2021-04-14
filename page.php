<?php /*
$url = "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; 
$localhost = "https://web-company.org/page.php?page_id=2";
if ($url == $localhost){
header( 'Location: https://web-company.org/blog.php' );
}*/
?>
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
       
        <?php if (isset($_GET['page_id'])){
        $the_page_id=$_GET['page_id'];

      }
      ?>

        <?php $query = "SELECT * FROM pages WHERE page_id = $the_page_id"; 
        $select_all_pages_query=mysqli_query($connection, $query);
        while ($row=mysqli_fetch_assoc($select_all_pages_query)) {
          $page_title=$row['page_title'];
          
          $page_content=$row['page_content'];
          ?>
          

<div class="col-md-8">
          <h1 class="page-header">
            Page Heading
            <small>Secondary Text</small>
          </h1>

          <!-- First Blog Post -->
          <h2>
            <a href="#"><?php echo $page_title;?></a>
          </h2>
 
          <hr />
          <div>
          <?php echo $page_content;?>
          </div>

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
        </div>
          <?php
        }
        ?>
        
        

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php";?>
      </div>
      <!-- /.row -->

      <hr />
    
       



          
    <?php include "includes/footer.php";?>