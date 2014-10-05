<!DOCTYPE html>
<html>
<head>
    <title>Car Randomizer</title>
    <link rel="stylesheet" href="CarRandomizer.css"/>
</head>
<body>
<form method="post">
    Enter car: <input type="text" name="cars"/>
    <input type="submit" value="Show Result"/>
</form>
<?php
if(isset($_POST['cars']) && !empty($_POST['cars'])):
    $carsList= $_POST['cars'];
    $cars= preg_split('/[ ,;]+/', $carsList);
?>
    <table>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
<?php
    $colors = ["red", "white", "blue", "yellow", "purple", "silver"];
      foreach ($cars as $carName) :
          $count = rand(1, 6);
          $randomColors = array_rand($colors);
?>
          <tr>
              <td><?=$carName?></td>
              <td><?=$colors[$randomColors]?></td>
              <td><?=$count?></td>
          </tr>
<?php endforeach; ?>

    </table>
<?php endif; ?>

</body>
</html>

