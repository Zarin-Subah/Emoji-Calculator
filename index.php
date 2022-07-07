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
    <input type= "number" name="number1" placeholder="First number"><!-- Will take the first number from user -->
    <select name="operator" > <!-- Dropdown menu to choose emoji -->
      <option value="Alian"> &#128125;</option> <!-- &#128125 is used for creating alian emoji -->
      <option value="Skull"> &#128128; </option><!-- &#128128 is used for creating alian emoji -->
      <option value="Ghost">&#128123;</option><!-- &#128123 is used for creating alian emoji -->
      <option value="Screaming">&#x1f631; </option> <!--&#x1f631 is used for creating alian emoji -->
    </select>
    <input type="number" name="number2" placeholder="Second number"> <!-- Will take the 2nd number from user -->
    <button type="submit" name="submit">  Calculate</button>

</form>

</body>
</html>