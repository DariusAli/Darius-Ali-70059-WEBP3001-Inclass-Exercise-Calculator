<?php
// current formula in input box
if (isset($_POST['txt'])) {
    $current_txt = $_POST['txt'];
}

if (isset($_POST['1_btn'])) {
  $message = "1";
}
if (isset($_POST['2_btn'])) {
  $message = "2";
}
if (isset($_POST['3_btn'])) {
  $message = "3";
}
if (isset($_POST['4_btn'])) {
  $message = "4";
}
if (isset($_POST['5_btn'])) {
  $message = "5";
}
if (isset($_POST['6_btn'])) {
  $message = "6";
}
if (isset($_POST['7_btn'])) {
  $message = "7";
}
if (isset($_POST['8_btn'])) {
  $message = "8";
}
if (isset($_POST['9_btn'])) {
  $message = "9";
}
if (isset($_POST['0_btn'])) {
  $message = "0";
}
if (isset($_POST['+_btn'])) {
  $message = "+";
}
if (isset($_POST['-_btn'])) {
  $message = "-";
}
if (isset($_POST['/_btn'])) {
  $message = "/";
}
if (isset($_POST['*_btn'])) {
  $message = "*";
}
if (isset($_POST['clear_btn'])) {
  $message = "clear";
}
if (isset($_POST['calculate'])) {
  $message = "calc";
}
if (isset($_POST['mod_btn'])){
  $message = "%";
}
if (isset($_POST['sqrt_btn'])){
  $use_sqrt = sqrt($current_txt);
  $message= " sqrt = ". $use_sqrt;
}
/*
if(isset($_POST['._btn'])){
  $message = "/.";
}*/

if ($message == "calc") {
    // Calculate using eval 
    $current_txt .= " = " . eval('return ' . $current_txt . ';');
} else {
    // Append input to formula
    $current_txt .= $message;
}

if ($message == "clear") {
    $current_txt = "";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darius Ali Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/calculator_design.css">
  </head>
    <h1>Darius Ali Calculator</h1>
  <body>
    <div class="form_body">
      <form  method="POST" class="calculator_form" >
        <input type="text" class="input_output" name="txt" value="<?php echo $current_txt;?>">
        <div class="button_layout"><br>
          <input class="button_clr" type="submit" name="clear_btn" value="C"><br><br>
          <input class="button_7" type="submit" name="7_btn" value="7">
          <input class="button_8" type="submit" name="8_btn" value="8">
          <input class="button_9" type="submit" name="9_btn" value="9">
          <input class="button_div" type="submit" name="/_btn" value="/">
          <input class="button_sqrt" type="submit" name="sqrt_btn" value="sqrt"> <br><br>
          <input class="button_4" type="submit" name="4_btn" value="4">
          <input class="button_5" type="submit" name="5_btn" value="5">
          <input class="button_6" type="submit" name="6_btn" value="6">
          <input class="button_multi" type="submit" name="*_btn" value="*">
          <input class="button_modu" type="submit" name="mod_btn" value="%"> <br><br>
          <input class="button_1" type="submit" name="1_btn" value="1">
          <input class="button_2" type="submit" name="2_btn" value="2">
          <input class="button_3" type="submit" name="3_btn" value="3">
          <input class="button_minus" type="submit" name="-_btn" value="-">
          <input class="button_fraction" type="submit" name="1/x_btn" value="1/x"> <br><br>
          <input class="button_0" type="submit" name="0_btn" value="0">
          <input class="button_decim" type="submit" name="._btn" value=".">
          <input class="button_posneg" type="submit" name="+/-_btn" value="+/-">
          <input class="button_add" type="submit" name="+_btn" value="+">
          <input class="button_calc" type="submit" name="calculate" value="=">
        </div>
      </form>
    </div>
  </body>
</html>
