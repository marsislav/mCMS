<nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-ex1-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">mCMS 2.1 Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
          <li><a href="../index.php">View site</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
              ><i class="fa fa-envelope"></i> <b class="caret"></b
            ></a>
            <ul class="dropdown-menu message-dropdown">
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img
                        class="media-object"
                        src="http://placehold.it/50x50"
                        alt=""
                      />
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading">
                        <strong>John Smith</strong>
                      </h5>
                      <p class="small text-muted">
                        <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img
                        class="media-object"
                        src="http://placehold.it/50x50"
                        alt=""
                      />
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading">
                        <strong>John Smith</strong>
                      </h5>
                      <p class="small text-muted">
                        <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img
                        class="media-object"
                        src="http://placehold.it/50x50"
                        alt=""
                      />
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading">
                        <strong>John Smith</strong>
                      </h5>
                      <p class="small text-muted">
                        <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-footer">
                <a href="#">Read All New Messages</a>
              </li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
              ><i class="fa fa-user"></i> John Smith <b class="caret"></b
            ></a>
            <ul class="dropdown-menu">
              <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li>
              <a href="index.php"
                ><i class="fa fa-fw fa-dashboard"></i> Dashboard</a
              >
            </li>
            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#pages_dropdown"
                ><i class="fa fa-fw fa-arrows-v"></i> Pages & Navigation
                <i class="fa fa-fw fa-caret-down"></i
              ></a>
              <ul id="pages_dropdown" class="collapse">
                <li>
                  <a href="./pages.php">View All Pages</a>
                </li>
                <li>
                  <a href="pages.php?source=add_page">Add Page</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"
                ><i class="fa fa-fw fa-arrows-v"></i> Posts
                <i class="fa fa-fw fa-caret-down"></i
              ></a>
              <ul id="posts_dropdown" class="collapse">
                <li>
                  <a href="./posts.php">View All Posts</a>
                </li>
                <li>
                  <a href="posts.php?source=add_post">Add Post</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="./categories.php"
                ><i class="fa fa-fw fa-wrench"></i> Categories</a
              >
            </li>
            <li>
              <a href="bootstrap-grid.html"
                ><i class="fa fa-fw fa-wrench"></i> Gallery</a
              >
            </li>
           
            <li>
              <a href="comments.php"
                ><i class="fa fa-fw fa-file"></i> Comments</a>
            </li>
            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#users"
                ><i class="fa fa-fw fa-arrows-v"></i> Users
                <i class="fa fa-fw fa-caret-down"></i
              ></a>
              <ul id="users" class="collapse">
                <li>
                  <a href="users.php">View All  Users</a>
                </li>
                <li>
                  <a href="users.php?source=add_user">Add User</a>
                </li>
              </ul>
            </li>
            <li>
                  <a href="#">Profile</a>
                </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>