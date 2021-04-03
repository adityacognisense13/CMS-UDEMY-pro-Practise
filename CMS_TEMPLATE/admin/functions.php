<?php

//////////Insertion Of Categories//////////////
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
//display of Categories///////////
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

////////////Delete Categories/////////////
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
                            echo"<td><a href='posts.php?delete={$posts_id}'>Delete</a></td>";

                            echo "</tr>";
                            }
}

////////Insertion Of Posts///////////
function insertPosts()
{

    global $connection;

    if(isset($_POST['create_post']))
{
    $post_title=$_POST['post_title'];
    $posts_category_id=$_POST['posts_category_id'];
    $post_author=$_POST['post_author'];
    $post_status=$_POST['post_status'];

     
    //$post_image=$_FILES[' post_image']['name'];  
    //$post_image_temp = $_FILES['post_image']['tmp_name'];

    $post_tags=$_POST['post_tags'];
    $post_content=$_POST['post_content'];
    $post_date=date('d-m-y');
    //$post_comment_count=4;

       // move_uploaded_file($post_image_temp,"../images/$post_image");

 $query="INSERT INTO posts(post_title,posts_category_id,post_author,post_status,post_content,post_date,post_tags)";

$query .="VALUES('{$post_title}',{$posts_category_id},'{$post_author}','{$post_status}','{$post_content}',now(),'{ $post_tags}')";

        
        $create_post_query=mysqli_query($connection,$query);
        if(!$create_post_query)
        {
            die('Query Failed' .mysqli_error($connection));
        }




}
}


/////////Deletion of Posts/////////////
function deletePosts()
{
    global $connection;
    if(isset($_GET['delete']))
{
    {
        $the_post_id= $_GET['delete'];

        $query = "DELETE FROM posts WHERE posts_id = {$the_post_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:posts.php");
     }
}
}


?>