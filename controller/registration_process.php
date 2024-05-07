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

    if(strlen($username)>= 4){
       $user_count = $connection->query("SELECT * FROM users WHERE user_name ='$username'")->num_rows;
    if ($user_count == 0) {

        $secure_password = md5($password);

         $new_user = $connection->query("INSERT INTO users(`first_name`,`last_name`,`user_name`,`password`,`email`,`image`,`birthday`,`bio`,`mobile_number`,`gender`) VALUE( '$firstname','$lastname', '$username', '$secure_password', '$email','$user_image', '$birthday','$bio','$mobile', '$gender')");

    move_uploaded_file($_FILES["user_image"]["tmp_name"],$user_image);

    header("location: index.php");
    echo "hello";
 
    }
    else{
        echo "<!DOCTYPE html>
        <html>
        <head>
            <style>
                .error-message {
                    color: red;
                    font-weight: bold;
                    font-family: Arial, sans-serif;
                    text-align: center;
                    padding: 10px;
                    background-color: #ffe6e6;
                    border: 2px solid #ff9999;
                    border-radius: 5px;
                }
                a{
                    text-decoration:none;
                    margin-left:29%; 
                }
                a:hover{
                    color:blue;
                }
            </style>
        </head>
        <body style='background-color:gray;'>
            <h1 style='padding-left:50px;'>ALERT</h1>
            <p class='error-message'>username is to short</p>
            <h1> <a class='error-message' href='regiser_form.php'>=> Back to Registration <=</a></h1>     
               </body>
        </html>
        ";
    }

    
    }
    else{
        echo "<!DOCTYPE html>
        <html>
        <head>
            <style>
                .error-message {
                    color: red;
                    font-weight: bold;
                    font-family: Arial, sans-serif;
                    text-align: center;
                    padding: 10px;
                    background-color: #ffe6e6;
                    border: 2px solid #ff9999;
                    border-radius: 5px;
                }
                a{
                    text-decoration:none;
                    margin-left:29%; 
                }
                a:hover{
                    color:blue;
                }
            </style>
        </head>
        <body style='background-color:gray;'>
            <h1 style='padding-left:50px;'>ALERT</h1>
            <p class='error-message'>Username already exists. Please choose a different username.</p>
            <h1> <a class='error-message' href='regiser_form.php'>=> Back to Registration <=</a></h1>     
               </body>
        </html>
        ";
        }
  
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