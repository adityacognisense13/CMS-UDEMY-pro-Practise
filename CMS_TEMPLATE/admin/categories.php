<?php
 include "../includes/db.php";
  include "includes/admin_header.php"
?>
<div id="wrapper">
    <?php
                include "includes/admin_navigation.php";
       ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin Page
                        <!--<small>Aditya</small>-->
                    </h1>

                    <div class="col-xs-6">
                        <form action="">
                            <div class="form-group">
                                <label for="cat-title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                            </div>
                        </form>
                    </div><!-- End of Form -->


                    <div class="class col-xs-6">

                        <!-- Displaying the data and creating the php tags -->
                        <?php
                        $query="SELECT * FROM categories ";
                        $select_categories=mysqli_query($connection,$query);
                       
                            ?>




                        <!-- Creation of table-->


                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- While Loop -->

                                <?php
                                 while($row = mysqli_fetch_assoc($select_categories))
                                 {
                                     $cat_id=$row['cat_id'];
                                     $cat_title=   $row['cat_title'];


                                    echo "<tr>";
                                     echo "<td> {$cat_id}</td>";
                                     echo "<td> {$cat_title}</td>";
                                     echo "</tr>";
                                 }
                                 ?>
                               
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php
        include "includes/admin_footer.php";
   ?>