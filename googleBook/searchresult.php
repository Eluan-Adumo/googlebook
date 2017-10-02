<?php
  include "header.php";
  $text = $_GET['searchtext'];
  $conn = $conn;
?>
<div id="idea2">
    <h1><span id="G" class="google"> G </span>
    <span id="o" class="google"> o </span>
    <span id="o1" class="google"> o </span>
    <span id="g" class="google"> g </span>
    <span id="l" class="google"> l </span>
    <span id="e" class="google"> e </span>
    <span id="book2"> Book </span>
  </h1>
    <form class="" action="searchresult.php" method="get">
      <input type = "search" placeholder="Enter a question" id="question" name="searchtext"/>
      <input type="submit" value="Search" id="searchbutton" />
    </form>
</div>
<?php
  $sql = "SELECT * FROM posts WHERE post_text LIKE '%".$text."%'";
  $query = mysqli_query($conn, $sql) or die(mysqli_error());
  $result = "";
  if(mysqli_num_rows($query)>0) {
    while($row = mysqli_fetch_array($query)){
      $text = $row ['post_text'];
      $date = $row['post_date'];
      $result .= "<div id = 'element'>
        $text
      </div>";
    }
      echo $result;
  }else{
  echo "<script>
          $(\"#messagebox\").fadeIn();
          $(\"#messageboxcontent\").text(\"There was no match found\");
          $(\"#messagebox\").fadeOut(5000);

        </script>";
}
?>


<?php
  include "footer.php";
?>
