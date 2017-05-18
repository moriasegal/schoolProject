<?php
session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: lib/logIn.php?r=$r&p=$p&{$_POST['user_name']}");
    die();
    }
include 'ISavable.php';
include 'Person.php';
include 'Student.php';
include 'Course.php';
include 'Administrator.php';
include 'DB.php';


    if(!empty($_POST["logout"])) {
	$_SESSION["user_id"] = "";
	session_destroy();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        http_response_code(403);
        echo 'Method not permitted';
        die();
    }
    $class_name = filter_var($_POST['page'], FILTER_SANITIZE_STRING);
    $table_name = $class_name.'s';
    $action = filter_var($_POST['action'], FILTER_SANITIZE_STRING);
    echo $class_name;
    echo $action;
    
   
    var_dump($_FILES);
    $tmp_name = $_FILES["image"]["tmp_name"];
    $poster_name = basename($_FILES["image"]["name"]);
     if($poster_name){
    move_uploaded_file($tmp_name, "../img/" . $poster_name);
    } else {
        $poster_name = filter_var($_POST['img'], FILTER_SANITIZE_STRING);
        
    }
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $image = $poster_name;
    
    switch ($class_name) {
        case 'course':
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            $newObj = new Course($id, $name, $description, $image);
            break;

        case 'administrator':
            $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $role = filter_var($_POST['role'], FILTER_SANITIZE_NUMBER_INT);
            $newObj = new Administrator($id, $name, $phone, $email, $password, $image, $role);
            break;

        case 'student':
            $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $course = filter_var($_POST['course'], FILTER_SANITIZE_STRING);
            $newObj = new Student($id, $name, $phone, $email, $image, $course);
            break;

        default:
        break;
    }
    
    switch ($action) {
        case 'edit':
        $newObj->edit();
            break;
        
        case 'add':
            $newObj->save();
            break;
        
        case 'delete':
            $newObj->delete();
            break;

        default:
            $form = '';
            break;
    }
    header('Location:../index.php');



