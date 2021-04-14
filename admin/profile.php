<?php include "includes/header.php"; ?>

<?php
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        $query = "SELECT * FROM users  WHERE username = '{$username}' ";
        $select_user_profile = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($select_user_profile)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_password = $row['user_password'];
            $user_role = $row['user_role'];
            $user_image = $row['user_image'];
        } 

   }
 ?>

 <?php
 
  if(isset($_POST['update_profile'])) {
                $username = $_POST['username'];
                $user_firstname = $_POST['user_firstname'];
                $user_lastname = $_POST['user_lastname'];
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];
                $user_image =  $_FILES['user_image']['name'];
                $user_image_temp =  $_FILES['user_image']['tmp_name'];
                
                move_uploaded_file($user_image_temp, "../images/$user_image");

                
$query="SELECT randSalt FROM users";
$select_randsalt_query=mysqli_query($connection, $query);
if (!$select_randsalt_query) {
    die("Query Failed!" . mysqli_error($connection));
}
$row=mysqli_fetch_array($select_randsalt_query);
$salt=$row['randSalt'];
$hashed_password=crypt($user_password, $salt);


                $query = "UPDATE users SET ";
                $query .="username  = '{$username}', ";
                $query .="user_password = '{$hashed_password}', ";
                $query .="user_firstname = '{$user_firstname}', ";
                $query .="user_lastname = '{$user_lastname}', ";
                // $query .="user_lastname   =  now(), ";
                $query .="user_email = '{$user_email}', ";
                $query .="user_image  = '{$user_image}' ";
                
                $query .= "WHERE username = '{$username}' ";

                $update_user = mysqli_query($connection, $query);
                confirm($update_user);
            }
 
 ?>
        
     <div id="wrapper">

        <!--nav -->

        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                    <h1 class="page-header">
                        Blank Page
                       <small>Subheading</small>
                    </h1>

                    </div>

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Username</label>
                                <input value="<?php echo $username; ?>" type="text" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="title">Firstname</label>
                                <input value="<?php echo $user_firstname; ?>" type="text" name="user_firstname" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="title">Lastname</label>
                                <input value="<?php echo $user_lastname;?> " type="text" name="user_lastname" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="title">Email</label>
                                <input value="<?= $user_email; ?>" type="email" name="user_email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="title">Password</label>
                                <input autocompleate="off" value="<?php echo $user_password; ?>" type="password" name="user_password" class="form-control">
                            </div>


                                

                            <div class="form-group">
                                <img width="100" src="../images/<?= $user_image?>" alt="">
                                <input  type="file" name="user_image">
                            </div>


                            <div class="form-group">
                                <input type="submit" name="update_profile" class="btn btn-primary" value="Update Profile">
                            </div>

                    </form>
                </div>
                <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include "includes/footer.php";?>
    