<form action="" method="get">
	<input type="text" name="num"/>
    <input type="submit" name="submit" value="submit"/>
</form>


<?php
if (isset($_GET['submit'])){
	
	$l =$_GET['num'];
	if ($l%4==0){
		echo "Leap Year";
		}
		else{
			echo "Not Leap Year";}

}
?>
