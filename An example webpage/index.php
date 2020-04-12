<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Project</title>
    <style media="screen">
      body{
        text-align: center;
      }
      h1{
        font-weight: bold;
        color: red;
      }
    </style>
  </head>
  <body>
    <h1>This is just a test...</h1>
    <form class="" action="index.html" method="post">
      <input type="email" name="email" placeholder="Your Email">
      <input type="password" name="password" placeholder="Your Password">
      <div class="questions">
        <br>What is 1 + 1?<br>
        <input type="radio" name="Q1" value="5">
        <input type="radio" name="Q1" value="4">
        <input type="radio" name="Q1" value="3">
        <input type="radio" name="Q1" value="2">
      </div>
      <div class="questions">
        <br>What is 1 * 1?<br>
        <input type="radio" name="Q2" value="5">
        <input type="radio" name="Q2" value="4">
        <input type="radio" name="Q2" value="3">
        <input type="radio" name="Q2" value="2">
      </div>
      <br><button type="button" name="button">Submit Answers</button>
    </form>
  </body>
</html>
