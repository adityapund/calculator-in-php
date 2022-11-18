<!DOCTYPE html>

<head>
	<title>Calculator in PHP - By Aditya</title>
    <style>
       body {background-color: olive;}
       h1   {color: blue;}
        </style>
</head>

<?php

$result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    

    /*Validation begins from here.*/
    if($first_num == '' || $second_num == ''){
        $Error = "The input values are required.";
    }



if (is_numeric($first_num) && is_numeric($second_num)){
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
        case "Square Root":
                $result = sqrt($first_num);
        case "Power Function":
                $result = pow($first_num, $second_num);
    
        
    }
}}

?>

<body>
    <div id="page-wrap">
	<h1>PHP - Simple Calculator Program By Aditya</h1>
	  <form action="" method="post" id="quiz-form">

            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
            <input type="submit" name="operator" value="Square Root" />
            <input type="submit" name="operator" value="Power Function" />
	  </form>
    </div>
</body>
</html>