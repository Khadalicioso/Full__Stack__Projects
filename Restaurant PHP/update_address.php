<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $address = $_POST['region'] .', '.$_POST['province'].', '.$_POST['city'].', '.$_POST['barangay'] .', '. $_POST['postalcode'] .', '. $_POST['streetname'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);

   $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
   $update_address->execute([$address, $user_id]);

   $message[] = 'Your Address Has Been Saved Successfully!';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Address</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'components/user_header.php' ?>

<section class="form-container">
   <form action="" method="post">
      <h3>Your Address</h3>
      <input type="text" class="box" placeholder="Region" required maxlength="50" name="region">
      <input type="text" class="box" placeholder="Province" required maxlength="50" name="province">
      <input type="text" class="box" placeholder="City" required maxlength="50" name="city">
      <input type="text" class="box" placeholder="Barangay" required maxlength="50" name="barangay">
      <input type="text" class="box" placeholder="Postal Code" required maxlength="50" name="postalcode">
      <input type="text" class="box" placeholder="Street Name" required maxlength="50" name="streetname">
      <input type="submit" value="save address" name="submit" class="btn">
   </form>
</section>

<?php include 'components/footer.php' ?>

<script src="js/script.js"></script>
</body>
</html>