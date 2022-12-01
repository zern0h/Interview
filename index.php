<?php 
if(isset($_POST['submit'])){

	$first_number = $_POST['first'];
	$second_number = $_POST['second'];
	$operator=$_POST['operation'];

	if($operator=="add")
		$result = $first_number + $second_number;
	else if($operator=="minus")
        $result = $first_number - $second_number;
	else if($operator=="divide")
        $result = $first_number / $second_number;
    else if($operator=="times")
        $result = $first_number * $second_number;
    
}
?>

<html>
   <form method="post" action=" ">
        <input type="number" name="first" value=" ">
        <label for="operation"> select an operator</label>
        <select name="operation" id="operation" >
            <option value="add">+</option>
            <option value="minus">-</option>
            <option value="divide">/</option>
            <option value="times">*</option>
        </select>
        <input type="number" name="second" value=" ">
        <input type="submit" name="submit">
        <br>
        <p>Your result is <?php echo $result;?></p>
        <br>
    </form>
</html>





