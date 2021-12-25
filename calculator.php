<!DOCTYPE html>
<html lang="en">
<head>
           <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="/image/favicon.png" type="image/png">
        <title>Calculator Design With PHP</title>
        <meta name="description" content="Third Generation Website<">
        <meta name="keywords" content="HTML, CSS, JavaScript,JQUERY,PHP">
        <meta name="author" content="Rahat Ahmed">
        <!-- Mobile Specific Metas
         Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'?>
</head>
<body>


<div class="hasan">
	<form action="" method="POST" >
		<input type="number" name="firstNumber"  class="inputfield" placeholder="First Number"> 
		<input type="number" name="lastNumber" class="inputfield"   placeholder="Last Number"> <br>
		<div class="selectionAction">
			<select name="operation">
				<option value="Add">Adition</option>
				<option value="Sub">Subtraction</option>
				<option value="Multi">Multiplication</option>
				<option value="div">Divition</option>
			</select>
		</div>
        <input type="submit" name="submit"  value="submit" >

	</form>
   
   <?php 
    
   if (isset($_POST['submit'])) {
   	  $firstNumber = $_POST['firstNumber'];
   	  $lastNumber  = $_POST['lastNumber'];
   	  // echo "$firstNumber . $lastNumber";

   	  $operation = $_POST['operation'];

   	  switch ($operation) {
   	  	case 'Add': $sum = $firstNumber + $lastNumber;
   	  		  echo "The addition of two number is $sum";
            
   	  		break;
   	  	
   	  case 'Sub': $sub = $firstNumber - $lastNumber;
   	  		  echo "The Substraction of two number is $sub";
   	  		break;

   	  	 case 'Multi': $multi = $firstNumber * $lastNumber;
   	  		  echo "The Multiplication of two number is {$multi}";
   	  		break;	
   	  	 case 'div': $div = $firstNumber / $lastNumber;
   	  		  echo "The divition of two number is {$div}";
   	  		break;	
   	  		default:echo "Sorry it is not exist";
   	  }
   }

   ?>

</div>

</body>
</html>