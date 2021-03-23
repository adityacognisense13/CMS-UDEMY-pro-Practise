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
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Tags</th>
                                        <th>Comments</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                


                        <?php

                            postsDisplay();

                            ?>

                                    <td>10</td>
                                    <td>Aditya Machiraju</td>
                                    <td>BootStrap FrameWork</td>
                                    <td>Bootstrap</td>
                                    <td>Status</td>
                                    <td>Image</td>
                                    <td>Tags</td>
                                    <td>Comments</td>
                                    <td>Date</td>
                               
                            </tbody>
                            </table>
                            


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
</div>

    <?php
        include "includes/admin_footer.php";
   ?> 