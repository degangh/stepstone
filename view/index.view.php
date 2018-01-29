<html>
<head>
  <title>Document</title>
</head>

<body>

  <nav>
    <ul>
      <li><a href="/contact">Contact Page</a></li>
      <li><a href="/about">About Page</a></li>
    </ul>
  </nav>
  <h1>submit your name</h1>

  <form action = "/names" method="post">
  <input type="text" name = "name">
  <input type="submit" value="submit">
  </form>



  <ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <?= $user->name; ?>
        </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>
