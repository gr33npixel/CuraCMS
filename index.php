<?php
include "config.php";
$p_id = $_GET['id'];
if (!$_GET['id']){
	$p_id = 1;
}
//This line is removable under the conditions that I am notified beforehand.
$s_footer = $s_footer . " Powered by <a href='#'>CuraCMS</a> "; 

$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (mysqli_connect_errno())
  {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$monkey = mysqli_query($con,"SELECT * FROM cms");
while($row = mysqli_fetch_array($monkey))
  {
  $html_nav_items = $html_nav_items . "<li><a href='?id=" . $row['id'] ."'>" . $row['title'] . "</a></li>";
  }
  
	$result = mysqli_query($con,"SELECT * FROM cms
	WHERE id=".$p_id);

	while($row = mysqli_fetch_array($result))
	  {
	  $html_content = $row['content'];
	  $html_title = $row['title'];
	  }
mysqli_close($con);
?> 

<html>
<head>
	<link href=<?php echo $t_stylesheet;?> rel="stylesheet"/>
	<title><?php echo $html_title; ?> | <?php echo $s_name?></title>
</head>
<body>
	<section>
	<nav><ul><?php echo $html_nav_items;?></ul></nav>
		<?php echo $html_content ?>
	<footer><?php echo $s_footer;?></footer>
	</section>
</body>
</html>
