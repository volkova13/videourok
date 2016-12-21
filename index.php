<?php require_once ('temples/top.php');
if ($_GET['url']){
$file=$_GET['url'];
}else
{
$file='index';}
$result=mysqli_query($dbcon,"SELECT*FROM maintexts WHERE url='$file'");
if (!$result){
exit('error');
}
$row=mysqli_fetch_array($result);
/*echo "<pre>";
print_r($row);
echo "</pre>";*/
?>
<div class='col-md-8'>
<h2>
<?php echo $row['name'];
?></h2>
<?php echo $row['body'];
?>
</div>
<?php require_once ('temples/bottom.php')
?>