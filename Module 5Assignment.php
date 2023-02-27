<?php
// Define the Person class
class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Create a new instance of the Person class
  $person = new Person();

  // Set the name and email properties based on the form data
  $person->setName($_POST['name']);
  $person->setEmail($_POST['email']);

  // Display the name and email properties
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail();
}
?>

<!-- Display the HTML form -->
<form method="POST">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>
  
  <input type="submit" value="Submit">
</form>
