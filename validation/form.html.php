<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<?php

$name = $email = $phone = $url = $gender = "";
$nameErr = $emailErr = $phoneErr = $urlErr = $genderErr = "";

// validation 
if($_SERVER['REQUEST_METHOD'] == "POST") {

  //name validation
  if(empty($_POST['name'])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // email validation
  if(empty($_POST['email'])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // phone validation
  if(empty($_POST['phone'])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST['phone']);
    if (!preg_match("/^[0-9]{10}$/",$phone)) {
      $phoneErr = "Invalid phone number format (must be 10 digits)";
    }
  }

  // url validation
  if(empty($_POST['url'])) {
    $urlErr = "URL is required";
  } else {
    $url = test_input($_POST['url']);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
      $urlErr = "Invalid URL";
    }
  }

  // gender validation
  if(empty($_POST['gender'])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST['gender']);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  return $data;
}
?>

  
  <div class="container mt-5">
  <h2 class="mb-4">User Registration</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="needs-validation" novalidate>

    <div class="mb-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control <?php echo !empty($nameErr) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?php echo $name;?>" required>
      <div class="invalid-feedback"><?php echo $nameErr ?></div>
    </div>

    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control <?php echo !empty($emailErr) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo $email;?>" required>
      <div class="invalid-feedback"><?php echo $emailErr ?></div>
    </div>

    <div class="mb-3">
      <label for="phone">Phone Number:</label>
      <input type="text" class="form-control <?php echo !empty($phoneErr) ? 'is-invalid' : ''; ?>" id="phone" name="phone" value="<?php echo $phone;?>" required>
      <div class="invalid-feedback"><?php echo $phoneErr ?></div>
    </div>

    <div class="mb-3">
      <label for="website">Website:</label>
      <input type="text" class="form-control <?php echo !empty($urlErr) ? 'is-invalid' : ''; ?>" id="website" name="url" value="<?php echo $url;?>" required>
      <div class="invalid-feedback"><?php echo $urlErr ?></div>
    </div>

    <div class="mb-3">
      <label for="gender">Gender:</label>
      <div>
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male" <?php if(isset($gender) && $gender == "male") echo "checked"; ?>>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female" <?php if(isset($gender) && $gender == "female") echo "checked"; ?>>
      </div>
      <div class="invalid-feedback"><?php echo $genderErr ?></div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>