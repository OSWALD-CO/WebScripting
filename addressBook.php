<!DOCTYPE html>

<!-- Clayton Oswald
Bellevue Univerisity
The Purpose of this Document is to create an Address Book for users to gather their name, address, and zip code.
addressBook.php
03/09/2019
-->

<html>

<style>

body {
  background-image: url(https://wallpapercave.com/wp/wp3416319.jpg);
}

h1 {
  color: white;
  text-align: center;
  font-style: italic;
}

p {
  border: 2.5px solid white;
  padding: 10px;
  color: white;
  font-family: cursive;
  text-decoration:inherit;
}

</style>

  <h1>Address Book Info:</h1>
  <hr>

<p>
  Name: <?php echo $_POST["name"]; ?><br>
  Phone Number: <?php echo $_POST["phoneNumber"]; ?><br>
  Address: <?php echo $_POST["address"]; ?><br>
  Zip Code: <?php echo $_POST["zip"]; ?><br>
</p>

  </html>
