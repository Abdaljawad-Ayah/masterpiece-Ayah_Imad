<?php
include 'security.php';

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['emaill'];
    $password_login = $_POST['passwordd'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    } else {
        $_SESSION['status'] = 'Email / Password is Invalid';
        header('Location: login.php');
    }
}
?>

<?php
include 'security.php';

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if ($password === $cpassword) {
        $query = "INSERT INTO register (username, email , password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            // echo 'Saved';
            $_SESSION['success'] = 'Admin Profile Added';
            header('Location: register.php');
        } else {
            $_SESSION['status'] = 'Admin Profile Not Added';
            header('Location: register.php');
        }
    } else {
        $_SESSION['status'] = 'Password and confirm password does not match';
        header('Location: register.php');
    }
}
?>
<?php
include 'security.php';
if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $query = "UPDATE register SET username = '$username' , email = '$email' , password = '$password' WHERE id = '$id' ";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['success'] = 'Your data is Updated';
        header('Location:register.php');
    } else {
        $_SESSION['status'] = 'Your data is NOT Updated';
        header('Location: register.php');
    }
}
?>

<?php
include 'security.php';
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id']; // $username = $_POST['del_username']; // $email = $_POST['edit_email']; // $password = $_POST['edit_password'];
    $query = "DELETE FROM register WHERE id = '$id' ";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['success'] = 'Your data is Deleted';
        header('Location:register.php');
    } else {
        $_SESSION['status'] = 'Your data is NOT Deleted';
        header('Location: register.php');
    }
}
 ?>