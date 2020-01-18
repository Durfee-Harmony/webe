<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <title>Web Engineering 2 - Assignments</title>
  <meta name="viewport" content="width=device-width">
  <link href="../styles.css" rel="stylesheet" type="text/css" media="screen">
  <meta name="viewport" content="width=device-width">
</head>

<body>
  <header>
    <img id="logo" src="../media/logo.jpg" alt="logo">
    <h1 class="title">Web Engineering 2 - Harmony</h1>
    <nav>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../index.php?action=mineA">My Assignments</a></li>
        <li><a href="../index.php?action=teamA">Team Assignments</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div id="<?php echo $a; ?>">
      <p>List of assignments:</p>
      <?php echo '../assignments/week1/'; ?>
      <a href="../assignments/week1/">Week 1 Assignments</a>
    </div>
  </main>
  <footer>
    <nav>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../index.php?action=mineA">My Assignments</a></li>
        <li><a href="../index.php?action=teamA">Team Assignments</a></li>
      </ul>
    </nav>
  </footer>
</body>

</html>