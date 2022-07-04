<?php

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

<form action="" method = "post">

    <p>Emoji Calculator </p>
    <input type= "number" name="number1" placeholder="Enter First number">
    <select name="operand" >
      <option value="Alien">&#128125;</option>
      <option value="Skull">&#128128; </option>
      <option value="Ghost">&#128123;</option>
      <option value="Scream">&#x1f631; </option>
    </select>
    <input type="number" name="number2" placeholder="Enter Second number">
    <button type="submit" name="submit">  Calculate</button>

</form>

</body>
</html>