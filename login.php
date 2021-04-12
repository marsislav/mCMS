
<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Login - Web Company, mCMS 2.1</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <!-- Custom Fonts -->
    <link
      href="font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet"
    />
    <style>
      .container {
        text-align: center;
      }
      h2 {
        font-family: "Kaushan Script", cursive;
        color: #ff7900;
        font-size: 62px;
      }
      p.slogan {
        color: #7fc21c;
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Login form -->
          <h2>Web Company!</h2>
          <p class="slogan">Powered by: mCMS 2.1</p>
          <h3>Login:</h3>

          <form action="includes/login.php" method="post">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="username"
                placeholder="Enter username:"
              />
            </div>
            <div class="input-group">
              <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Enter password:"
              />
              <span class="input-group-btn">
                <button class="btn btn-primary" name="login" type="submit">
                  Login
                </button>
              </span>
            </div>
          </form>
          <!-- Search form -->
          <!-- /.input-group -->
        </div>
      </div>
    </div>
  </body>
</html>
