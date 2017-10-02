<?php
  include "dbconnection.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Trooit googlebook
    </title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/script.js" type="text/javascript"></script>

  </head>
  <body>
    <header>
        <div id="pagetitle" onclick = 'sendhome();'>
        <span id="G"> G </span>
        <span id="o"> o </span>
        <span id="o1"> o </span>
        <span id="g"> g </span>
        <span id="l"> l </span>
        <span id="e"> e </span>
        <span id="book"> Book </span>
      </div>

      <div id="pagemenu">
        <ul>
          <li>
            <a href="index.php">
              Google
            </a>
          </li>
          <li>
            <a href="post.php">
              Post
            </a>
          </li>
        </ul>
      </div>

    </header>
    <div id="messagebox">
      <span id="messageboxcontent">


      </span>
    </div>

    <section id="bodymain">
