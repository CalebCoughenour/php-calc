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

    <!-- <form action="functions.php" method="post">
      <input type="text" name="num01" placeholder="Number 1">
      <select name="oper">
        <label>Choose Operation!</label>
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
      </select>
      <input type="text" name="num02" placeholder="Number 2">
      <button type="submit">Calculate</button>
    </form> -->

    <form method="post">
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 1">
      <select name="operator">
        <option>None</option>        
        <option>Add</option>        
        <option>Subtract</option>        
        <option>Divide</option>        
        <option>Multiply</option>        
      </select>
      <br>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is: </p>
    <?php
      if(isset($_POST['submit'])) {
        $result1 = $_POST['num1'];
        $result2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
          case "None":
            echo "You need to select a method";
            break;
          case "Add":
            echo $result1 + $result2;
            break;
          case "Subtract":
            echo $result1 - $result2;
            break;
          case "Divide":
            echo $result1 / $result2;
            break;
          case "Multiply":
            echo $result1 * $result2;
            break;

        }
      }
    ?>

    <?php
      include_once 'footer.php';
    ?>

  </body>
</html>