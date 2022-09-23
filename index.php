<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>
    
    <?php
      include_once 'header.php';
    ?>

    <form action="functions.php" method="post">
      <input type="text" name="num01" placeholder="Number 1">
      <select name="oper">
        <label>Choose Operation!</label>
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
      </select>
      <input type="text" name="num02" placeholder="Number 2">
      <button type="submit">Calculate</button>
    </form>

    <?php
      include_once 'footer.php';
    ?>

  </body>
</html>