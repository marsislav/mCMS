<header>
<div class="logo container">
  <a class="navbar-brand" href="index.php">
    <img src="img/logo.png" alt="Web Company! - mCMS 2.1" class="logoImg"/>
    <h1><span>W</span>eb <span>C</span>ompany!</h1>
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
            <ul class="nav navbar-nav">
              <?php
                $query="SELECT * FROM categories";
                $select_all_categories_query=mysqli_query($connection, $query);
                while ($row=mysqli_fetch_assoc($select_all_categories_query)) {
                  $cat_title=$row['cat_title'];
                  echo "<li><a href='#'> {$cat_title}</a></li>";
                }
              ?>
              <li><a href="admin">Admin</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </header>
