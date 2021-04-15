<?php

if(isset($_GET['edit_user'])){
    
    $the_user_id = escape($_GET['edit_user']); //TO DO!

    $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_user_by_id = mysqli_query($connection,$query); 

    while($row = mysqli_fetch_assoc($select_user_by_id)) {
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_password = $row['user_password'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];
        
    }

    if(isset($_POST['update_user'])) {
        $username = $_POST['username'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_role = $_POST['user_role'];
        $user_image =  $_FILES['user_image']['name'];
        $user_image_temp =  $_FILES['user_image']['tmp_name'];
        

        move_uploaded_file($user_image_temp, "../images/$user_image");

        if(!empty($user_password)) {
            $query_password = "SELECT user_password FROM users WHERE user_id = $the_user_id";
            $get_user = mysqli_query($connection, $query_password);
            confirm($get_user);

            $row = mysqli_fetch_array($get_user);
            $bd_user_password = $row['user_password'];

            if($bd_user_password != $user_password) {
                 $hash_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));
             }

            $query = "UPDATE users SET ";
            $query .="username  = '{$username}', ";
            $query .="user_password  = '{$hash_password}', ";
            $query .="user_firstname = '{$user_firstname}', ";
            $query .="user_lastname = '{$user_lastname}', ";
            // $query .="user_lastname   =  now(), ";
            $query .="user_email = '{$user_email}', ";
            $query .="user_role = '{$user_role}', ";
            $query .="user_image  = '{$user_image}' ";
            
            $query .= "WHERE user_id = {$the_user_id} ";

            $update_user = mysqli_query($connection, $query);
            confirm($update_user);
        }
       
    }
 }else {
        header("Location: index.php");
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Username</label>
        <input value="<?= $username; ?>" type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Firstname</label>
        <input value="<?= $user_firstname; ?>" type="text" name="user_firstname" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Lastname</label>
        <input value="<?= $user_lastname; ?>" type="text" name="user_lastname" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Email</label>
        <input value="<?= $user_email; ?>" type="email" name="user_email" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Password</label>
        <input autocomplete="off" value="" type="text" name="user_password" class="form-control">
    </div>

    <div class="form-group">

        <select name="user_role" id="" class="form-control">

            <option value="<?php $user_role;?>"><?php $user_role;?></option>
            <?php
            if($user_role == 'admin') {
                echo "<option value='subsciber'>Subsciber</option>";
            }else {
                echo "<option value='admin'>Admin</option>";
            }
        ?>


        </select>
    </div>


    <div class="form-group">
        <img width="100" src="../images/<?= $user_image?>" alt="">
        <input type="file" name="user_image">
    </div>


    <div class="form-group">
        <input type="submit" name="update_user" class="btn btn-primary" value="Update User">
    </div>

</form>