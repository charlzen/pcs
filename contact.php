<!DOCTYPE html>
<html>
  <head>
    <html lang = "en">
    <meta charset="utf-8">
    <link rel="stylesheet" href="main_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <title>Paul Chaat Smith | Contact</title>
  </head>

<!-- Start of Webpage Content-->
<!-- Use SVGs for Webpage Shapes-->
<body>
    <header>
        <h1>Paul Chaat Smith</h1>
        <p>Author | Essayist | Curator</p>
    </header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="books.html">Books</a></li>
        <li><a href="texts.html">Texts</a></li>
        <li><a href="exhibitions.html">Exhibitions</a></li>
        <li><a href="read.html">Featured Read</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

<p>Contact Me</p>
<form class = "contact-form" action = "contact.php" method = "post">
  <input type = "text" name = "name" placeholder = "Name">
  <input type = "text" name = "mail" placeholder = "Your E-mail">
  <input type = "text" name = "subject" placeholder = "Subject">
  <textarea name = "message" placeholder = "Message"></textarea>
  <button type = "submit" name = "submit">Submit</button>
</form>
