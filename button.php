<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  if(isset($_POST['butt']))
  {
    echo "<br>click on button".$_POST['butt'];
  }
?>
<div style="display:flex;margin-left:20px">
    <?php
    for($i=0;$i<=10;$i++)
    {
    ?>
    <form action="#" method="post">
    <div style="margin-left:10px">   
    <button name="butt" value="<?php echo $i ?>">button<?php echo $i ?></button>
    <br>
    </div>
    
    </form>
    <?php
    }
    ?>
    </div>
</body>
</html>