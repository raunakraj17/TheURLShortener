<?php require_once "php/user-data.php"; ?>
<?php
if(isset($_GET['u'])){
  $u = mysqli_real_escape_string($conn, $_GET['u']);
  $res = mysqli_query($conn, "select full_url from url where shorten_url='$u'");
  if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    $link = $row['full_url'];
    header('location:'.$link);
  }
}
?>