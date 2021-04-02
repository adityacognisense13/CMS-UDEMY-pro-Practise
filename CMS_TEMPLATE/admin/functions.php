<?php


function insert_categories()
{

    global $connection;

if(isset($_POST['submit']))
{
    $cat_title = $_POST['cat_title'];

    if($cat_title == ""  || empty($cat_title))
    {
        echo "Please fill the blank";
    }else
    {
        $query = "INSERT INTO categories(cat_title)";
        $query .= "VALUE('{$cat_title}')";
        $create_category_query = mysqli_query($connection,$query);
        if(!$create_category_query)
        {
            die('Query Failed' .mysqli_error($connection));
        }
    }
}
}

function findAllCategories()
{

    global $connection;

    $query="SELECT * FROM categories ";
    $select_categories=mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_categories))
{
$cat_id=$row['cat_id'];
$cat_title=   $row['cat_title'];


echo "<tr>";
echo "<td> {$cat_id}</td>";
echo "<td> {$cat_title}</td>";
echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
echo "</tr>";
} 

}


function deleteCategories()
{

    global $connection;

    if(isset($_GET['delete']))
                                 {
                                    $the_cat_id= $_GET['delete'];

                                    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                                    $delete_query = mysqli_query($connection,$query);
                                    header("Location:categories.php");
                                 }
}



 ///////////////////////////////////////////////////////////////////Posts.php Code /////////////////////////////////////////////////////////////////////////////////////

function  postsDisplay()
{
        global $connection;
    $query = "SELECT * FROM posts";
$select_posts = mysqli_query($connection,$query);

                        while($row=mysqli_fetch_assoc($select_posts))
                        {
                            $posts_id=$row['posts_id'];
                            $post_author=$row['post_author'];
                            $post_title=$row['post_title'];
                            $posts_category_id=$row['posts_category_id'];
                            $post_status=$row['post_status'];
                            $post_image=$row['post_image'];
                            $post_tags=$row['post_tags'];
                            $post_comment_count=$row['post_comment_count'];
                            $post_date=$row['post_date'];

                            echo "<tr>";
                            echo "<td>{$posts_id}</td>";
                            echo "<td>{$post_author}</td>";
                            echo "<td>{$post_title}</td>";
                            echo "<td>{$posts_category_id}</td>";
                            echo "<td>{$post_status}</td>";
                            echo "<td><img src='images/$post_image' alt='image'></td>";
                            echo "<td>{$post_tags}</td>";
                            echo "<td>{$post_comment_count}</td>";
                            echo "<td>{$post_date}</td>";

                            echo "</tr>";
                            }
}

?>