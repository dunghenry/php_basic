<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORM</title>
  </head>

  <body>
    <h1><?php echo "PHP Component" ?></h1>  
    <form action="./01-request.php" method="post">
      Name: <input type="text" name="name" /><br />
      E-mail: <input type="text" name="email" /><br />
      <button type="submit">Submit</button>
    </form>
    <form action="./01-request.php" method="get">
      Name: <input type="text" name="name" /><br />
      E-mail: <input type="text" name="email" /><br />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
