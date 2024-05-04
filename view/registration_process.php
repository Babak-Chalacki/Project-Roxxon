<?php include "database.php";

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$repass = $_POST['repass'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$mobile = $_POST['mobile']; 
$gender = $_POST['gender'];
$bio = $_POST['bio'];
// $user_image = $_FILES['user_file']['size'];

if($_FILES['user_file']['size']>50000000){
    echo "your file is houge";
}
else{
    $user_image = "img/". $_FILES['user_file']['name'];
    
if ($password === $repass) {

    $new_user = $connection->query("INSERT INTO users(`first_name`,`last_name`,`user_name`,`password`,`email`,`image`,`birthday`,`bio`,`mobile_number`,`gender`) VALUE( '$firstname','$lastname', '$username', '$password', '$email','$user_image', '$birthday','$bio','$mobile', '$gender')");

    move_uploaded_file($_FILES["user_image"]["tmp_name"],$user_image);

    header("location: index.php");
    echo "hello";

} else {

    // header("location: register_form.php");
    echo "password did not match";


}
}
?>




<?php 
// include "database.php";

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
// $username = $_POST['Username'];
// $password = $_POST['Password'];
// $repass = $_POST['repass'];
// $email = $_POST['email'];
// $birthday = $_POST['birthday'];
// $mobile = $_POST['mobile']; 
// $bio = $_POST['bio'];

//  Check if gender is male or female and set the appropriate value
// $gender = ($_POST['gender'] === 'male') ? 1 : 2;

//  Check the file size
// if ($_FILES['user_file']['size'] > 50000000) {
//     echo "Your file is too large";
// } else {
//     $user_image = "img/" . $_FILES['user_file']['name'];

//     if ($password === $repass) {
//         $new_user = $connection->query("INSERT INTO users(`first_name`, `last_name`, `user_name`, `password`, `email`, `image`, `birthday`, `bio`, `mobile_number`, `gender`) 
//             VALUE ('$firstname', '$lastname', '$username', '$password', '$email', '$user_image', '$birthday', '$bio', '$mobile', '$gender')");

//         header("location: index.php");
//         echo "User created successfully";

//     } else {
//         echo "Password did not match";
//     }
// }
?>

<?php 
// include "database.php";

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
// $username = $_POST['Username'];
// $password = $_POST['Password'];
// $repass = $_POST['repass'];
// $email = $_POST['email'];
// $birthday = $_POST['birthday'];
// $mobile = $_POST['mobile']; 
// $bio = $_POST['bio'];

//  Check if gender is female, male, or other and set the appropriate value
// $gender = ($_POST['gender'] === 'female') ? 1 : ($_POST['gender'] === 'male' ? 2 : 3);

// Check the file size
// if ($_FILES['user_file']['size'] > 50000000) {
//     echo "Your file is too large";
// } else {
//     $user_image = "img/" . $_FILES['user_file']['name'];

//     if ($password === $repass) {
//         $new_user = $connection->query("INSERT INTO users(`first_name`, `last_name`, `user_name`, `password`, `email`, `image`, `birthday`, `bio`, `mobile_number`, `gender`) 
//             VALUE ('$firstname', '$lastname', '$username', '$password', '$email', '$user_image', '$birthday', '$bio', '$mobile', $gender)");

//         header("location: index.php");
//         echo "User created successfully";

//     } else {
//         echo "Password did not match";
//     }
// }
?>