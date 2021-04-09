<table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Navigation/Page Title</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $query="SELECT * FROM pagenavigation";
                    $select_pages=mysqli_query($connection, $query);
                    while ($row=mysqli_fetch_assoc($select_pages)) {
                    $nav_id=$row['nav_id'];
                    $nav_title=$row['nav_title'];
                    $nav_position=$row['nav_position'];

                    

                    echo"<tr>";
                    echo "<td>{$nav_id}</td>";
                    echo "<td>{$nav_title}</td>";
                    echo "<td>{$nav_position}</td>";
                    echo "<td><a href='pages.php?source=edit_page&p_id={$nav_id}'>Edit</a></td>";
                    echo "<td><a href='pages.php?delete={$nav_id}'>Delete</a></td>";
                    echo "</tr>";
                }
                    ?>
                    </tbody>
                </table>
                <?php if (isset($_GET['delete'])){
                    $the_nav_id=$_GET['delete'];
                    $query="DELETE FROM pagenavigation WHERE nav_id={$the_nav_id}";
                    $delete_query=mysqli_query($connection,$query);
                    confirm($delete_query);
                }; ?>

                <?php if (isset($_GET['delete'])){
                    $the_nav_id=$_GET['delete'];
                    $query="DELETE FROM pagenavigation WHERE nav_id={$the_nav_id}";
                    $delete_query=mysqli_query($connection,$query);
                    confirm($delete_query);
                }; ?>