<!--<?php
include'config.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name =filter_var($name,FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email =filter_var($email,FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass =filter_var($pass,FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
    $cpass =filter_var($cpass,FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name  = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' .$image;

    $select = $conn->prepare("SELECT * FROM `users` WHERE email =?")
    select-> execute([$email]);
    if( select->rowCount()> 0){
        $message[] = 'البريد الالكتروني للمستخدم موجود بالفعل';
    }
    else{
        if($pass!= $cpass){
            $message[] = 'كلمة المرور غير متطابقة';
        }
        else{
            $insert=$conn->prepare("INSERT INTO `user`(name,email,password,image)VALUE(?,?,?,?");
            $insert->execute([$name,$email,$pass,$image]);

            if($insert){
                
            }
        }
    }
}

?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>register</title>

    <!-- page organization-->
    <link rel="stylesheet" href="css/normalize.css" />
     <!-- link css-->
    <link rel="stylesheet" href="css/components.css" />
     <!-- font awesome-->
    <link rel="stylesheet" href="css/fontawesome-free-6.5.1-web/css/all.min.css" />
</head>
<body>

<section class="from-contianer">
    <form action="" enctype="multipart/form-data" method="POST">
        <h3>اضافة حساب </h3>
        <input type="text" name="name" class="box" placeholder="ادخل اسمك" required>
        <input type="email" name="email" class="box" placeholder="ادخل ايميل" required>
        <input type="password" name="pass" class="box" placeholder="ادخل كلمة السر الاولى" required>
        <input type="password" name="cpass" class="box" placeholder="تاكيد كلمة السر" required>
        <input type="file"  name="image" class="box"  required  accept="image/jpg,image/jpeg,image/png">
        <input type="submit" name="submit" value="تسجيل الدخول " class="btn" >
        <p>هل لديك حساب بالفعل ؟<a href="login.php">سجل الان </a></p>
    </form>
</section>
</body>