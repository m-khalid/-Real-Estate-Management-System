<?php
//fetch.php;
if(isset($_POST["view"]))
{
$connect = mysqli_connect("localhost", "root", "", "lacasa");

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE admin SET comment_status=1 WHERE comment_status=0";
  mysqli_query($connect, $update_query);
 }
 
 $output = '';
 $query_1 = "SELECT * FROM admin WHERE comment_status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>
