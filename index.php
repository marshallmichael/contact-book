<?php include "php/include.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONTACTS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <form method="post" action=""><br>
            <h2>UPDATE CONTACTS</h2>
            <input type="text" name="first" placeholder="First Name" required><br>
            <input type="text" name="last" placeholder="Last Name" required><br>
            <input type="number" name="number" placeholder="Phone Number" required><br>
            <input type="submit" name="submitcontact" value="submit">
          </div>
          <div class="col-md-6">
          <table class="table">
            <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Number</th>
            </tr>
            </thead>
            <tbody>
          <?php
          $x=1;

          foreach(getcsvFile("test.csv") as $data){
            echo "<tr>
            <th scope=\"row\">{$x}</th>
            <td>{$data[0]}</td>
            <td>{$data[1]}</td>
            <td>{$data[2]}</td>
            </tr>";
            $x++;
          }
          ?>
          </tbody>
          </table>
      </div>
  </body>
</html>
