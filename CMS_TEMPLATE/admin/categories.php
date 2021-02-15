<?php
 include "../includes/db.php";
  include "includes/header.php"
?>
<div id="wrapper">
    <?php
                include "includes/navigation.php";
       ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin Page
                        <small>Author</small>
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
                    <!-- Creation of table-->

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Category 1</td>
                                <td>Category 2 </td>
                            </tr>
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
        include "includes/footer.php";
   ?>