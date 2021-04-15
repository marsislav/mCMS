<header>
    <div class="container">
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Web Company! - mCMS 2.1" class="logoImg" />
            </a>
        </div>
        <nav class="navbar" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php 
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
                    <li><a href="admin">Administrator</a></li>
                    <li><a href="./registration.php">Registration</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
    <!-- /.container -->

</header>