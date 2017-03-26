<!DOCTYPE html>
<html>
<head>
	<title>Student's Result:Practice</title>
</head>
<body>
<center>
	<h1><strong>Result Analysis</strong></h1>
	<p>
		<form method="POST">
		Bangla :<input type="text" name="bangla"><br><br>
		English:<input type="text" name="english"><br><br>
		   Math:<input type="text" name="math"><br><br>
		Physics:<input type="text" name="physic"><br><br>
				<input type="submit" name="submit" value="GPA >>">

			
		</form>

	</p>
	<?php

		if(isset($_POST['submit'])){

			


			$bangla   = $_POST['bangla'];
			$english  = $_POST['english'];
			$math     = $_POST['math'];
			$physic   = $_POST['physic'];

			if ( $bangla == "" and $english == "" and $math == "" and $physic == ""){
				echo "You must fill all field";
			}elseif($bangla == ""){
				echo "You must fill First Box";
			}elseif($english == ""){
				echo "You must fill Second Box";
			}elseif($math == ""){
				echo "You must fill Third Box";
			}elseif($physic == ""){
				echo "You must fill Fourth Box";
			}else{
				$total = $bangla + $english + $math + $physic;

				echo "Your Total Marks out of 400 is : "."<font color='blue'><strong>$total</strong></font>."."<br>";

				if($total >= 320){
					echo "You got <font color='green'>A+</font>";
				}elseif($total >=280 and $total < 320){
					echo "You got <font color='green'>A</font>";
				}elseif($total >=240 and $total < 280){
					echo "You got <font color='green'>A-</font>";
				}elseif($total >=200 and $total < 240){
					echo "You got <font color='green'>B</font>";
				}elseif($total >=160 and $total < 200){
					echo "You got <font color='green'>C</font>";
				}elseif($total >=132 and $total < 160){
					echo "You got <font color='green'>D</font>";
				}else{
					echo "<font color='red'>You have Failed.</font>";
				}
			}
			











		}





	?>







</center>
</body>
</html>
