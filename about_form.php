<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $request = " insert into book_form(	nam, email, phone, course) values('$name','$email','$phone','$course')";

    mysqli_query($connection, $request);

    header('location:book.html');
}else{
    echo 'something went wrong try again';
}
?>