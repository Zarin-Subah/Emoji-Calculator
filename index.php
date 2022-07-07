<?php
 include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emoji Calculator</title>
</head>
<body>

<form action="includes/emoji_calc.inc.php" method = "post">

    <p>Emoji Calculator </p>
    <input type= "number" name="number1" placeholder="First number">
    <select name="operator" >
      <option value="Alian"> 
      &#128125;</option>
      <option value="Skull"> &#128128; </option>
      <option value="Ghost">&#128123;</option>
      <option value="Screaming">&#x1f631; </option>
    </select>
    <input type="number" name="number2" placeholder="Second number">
    <button type="submit" name="submit">  Calculate</button>

</form>

</body>
</html>