<?php
 include "../includes/db.php";
  include "includes/admin_header.php";
  include "functions.php"; 

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

                    <?php

                 insert_categories();

        ?>



                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="cat-title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                            </div>
                        </form>

                                <?php
                                        if(isset($_GET['edit']))
                                        {
                                            $cat_id = $_GET['edit'];

                                            include "includes/admin_update_categories.php";
                                        }
                                ?> 
                           




                    </div><!-- End of Form -->


                    <div class="class col-xs-6">

                        <!-- Displaying the data and creating the php tags -->
                    

                        <!-- Creation of table--> 


                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                    <th>Modifications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- While Loop -->

                                <?php // find all categories query
                                       findAllCategories();
                                 ?>


                                 <?php //Delete categories data
                                        deleteCategories();
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