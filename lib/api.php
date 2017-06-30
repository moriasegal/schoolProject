<?php
session_start();


include 'ISavable.php';
include 'Person.php';
include 'Student.php';
include 'Course.php';
include 'Administrator.php';
include 'DB.php';


if(!isset($_SESSION["user_id"])){
    $user = filter_var($_POST['user_name'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    if(!empty($_POST['login'])){
        verifyLogin($user,$pass);
    } 
}
function  verifyLogin($user,$pass){
    
    $conn = DB::getInstance()->getConnection();
    if ($conn->errno) {
        echo $conn->error; die();
        
    }
    
    $result = $conn->query("SELECT * FROM administrators INNER JOIN roles on roles.role_id = administrators.role WHERE email = '{$user}' ");
     
    $row  = mysqli_fetch_array($result);
    if(is_array($row)){
        if(password_verify($pass,$row['password'])){
            $_SESSION["user_id"] = $row['id'];
            echo $_SESSION["user_id"];
            $_SESSION["user_img"] = $row['image'];
            $_SESSION["user_name"] = $row['name'];
            $_SESSION["user_role"] = $row['role_name'];
            $json_data = json_encode($_SESSION);
            file_put_contents('../json/session.json', $json_data);

            header('Location: ..\index.php');

        } 
        else {
            $_SESSION["massege"]= "Invalid Password or Username";
            header('Location: login.php');
        } 
    }
    else{
        $_SESSION["massege"]= "Invalid Password or Username";
        header('Location: login.php');
    } 

}
    

    if(!empty($_POST["logout"])) {
	$_SESSION["user_id"] = "";
	session_destroy();
        file_put_contents('../json/session.json', '');
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        http_response_code(405);
        echo 'Method not permitted';
        die();
    }
        
    if((isset($_POST['page']))&&(isset($_POST['action']))){
        action();
    }
    
    function posting(){
        $class_name = filter_var($_POST['page'], FILTER_SANITIZE_STRING);
        $table_name = $class_name.'s';
        $action = filter_var($_POST['action'], FILTER_SANITIZE_STRING);
        
        
        var_dump($_FILES);
        $tmp_name = $_FILES["image"]["tmp_name"];
        $poster_name = basename($_FILES["image"]["name"]);
        if($poster_name){
            move_uploaded_file($tmp_name, "../img/" . $poster_name);
        } else {
            $poster_name = filter_var($_POST['img'], FILTER_SANITIZE_STRING);

        }

        if ($action == 'edit'){
            $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        } else{
            $id = NULL;
        }
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
        
        return $newObj;
    }
    
    function delete(){
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $class_name = filter_var($_POST['page'], FILTER_SANITIZE_STRING);
        $class_name::delete($id);
    }
    
    function action(){
        $action = filter_var($_POST['action'], FILTER_SANITIZE_STRING);
        switch ($action) {
            case 'edit':
                $newObj = posting();
                $newObj->edit();
                break;

            case 'add':
                $newObj = posting();
                $newObj->save();
                break;

            case 'delete':
                delete();
                break;

            default:
                break;
        }
    }
    header('Location:../index.php');


    