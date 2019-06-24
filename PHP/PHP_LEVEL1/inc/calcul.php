 <form action='calcul.php'>
      <label>Число 1:</label>
      <br />
 <input name='num1' type='text' >
       <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />       <br />
      <br />       <input type='submit' value='Считать'>
      </form>

<?php
// <input name='num1' type='text' />
//       <br />
//       <label>Оператор: </label>
//       <br />
//       <input name='operator' type='text' />
//       <br />
//       <label>Число 2: </label>
//       <br />
//       <input name='num2' type='text' />
//       <br />
//       <br />
//       <input type='submit' value='Считать'>
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator= $_GET['operator'];
switch ($operator){
		case '*': echo $num1*$num2; break;
		case '+': echo $num1+$num2; break;
		case '-': echo $num1-$num2; break;
		case '/': if($num2!=0){echo $num1/$num2;} else echo "На ноль делить нельзя"; break;
		default: echo "ХЗ что за операция"; break;

}
?>