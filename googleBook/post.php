<?php
  include "header.php";
  include "dbconnection.php";
  $conn = $conn;
 ?>

  <div id="form">
    <form action="" method="post">
      <textarea id = "postbox" name= "postbox" placeholder = "What have you done today?"></textarea><br />
      <input type = 'submit' value = 'post' name = 'submititem' id = 'submitbutton' />
    </form>
  </div>


<?php
// code to post entered data entered on textarea to database
if(isset($_POST['submititem'])){
  if($_POST['postbox'] !==""){
    $post_item = $_POST['postbox'];
    $query = mysqli_query($conn, "INSERT INTO posts(post_text, post_date)VALUES('".$post_item."', NOW())") or die(mysql_error());
    if($query){

      //Script to display "posted" if post is successful
      echo "<script>
              $(\"#messagebox\").fadeIn();
              $(\"#messageboxcontent\").text(\"Posted\");
              $(\"#messagebox\").fadeOut(5000);
              setTimeout(function(){
                window.location.href =window.location.href;
              },5000)
            </script>";
    }
  }
}



function query_item($offset){
  include "dbconnection.php";
  /*
  Function purpose is to draw posted content from database
    we have a limit variable to put a restriction on how many rows can be extrated from the database
    We have an offset variable to set a marker on what point in the database do we want to start our extration. in this case,
    from the beginning.

    after our query, we test to see if our query returned any results with num rows.
    we then fetch the results into an array from where we put them into a div and display the div on screen.
      If the results are equal to zero, we place an error message on our messagebox.
  */


    $limit = 4;
    $offset = 0;
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $limit OFFSET $offset";
    $query = $conn->query($sql) or die(mysqli_connect_error());
    $return = "";
    if(mysqli_num_rows($query)>0){
    while($arr = mysqli_fetch_array($query)){

      $text =$arr['post_text'];
      $date = $arr['post_date'];

      $return .="<div id = 'ptext'>
          <span id = 'ptextheader'>
            <span id = 'ptextheadercontent'>
              THIS WAS POSTED ON $date
            </span>
          </span>
          <div id = 'ptextcontent'>
            <span id = 'ptextcontentbody'>
                $text
            </span>
          </div>
          <div id ='commentbox'>
            <input type = 'text' placeholder = 'please enter a comment on this' />
            <input type = 'button'  value = 'delete' onclick = 'delete_item()'/>
          </div>
      </div>";


    }

    }


    return $return;


  }


?>

 <?php /*
 $conn = $conn;
 $query = mysqli_query($conn, "SELECT * FROM posts")or die(mysql_error());
 $rows = mysqli_num_rows($quey);
 $each_page = 5;
 $pages = $rows / $each_page;
 $result = "<ul>";

 for ($i=0; $i < $pages; $i++) {
   $result .= "<li><a href = 'post.php?pageno=$i'>Page $i</a></li>";
 }
 $result .="</ul>";
 echo $result;
  include "footer.php";*/
  ?>
