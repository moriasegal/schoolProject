<?php 

include 'lib/ISavable.php';
include 'lib/Student.php';
include 'lib/Course.php';
include 'lib/Administrator.php';
include 'lib/DB.php';

$student_list = Student::printList();
$administractor_list= Administrator::printList();
$course_list = Course::printList();

session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: lib/logIn.php?r=7");
} 

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="views/indexStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
        <header>
            <?php include 'views/header.php';?>
        </header>
        <main>
         <?php include 'views/main.php';?>

        </main>
    </body>
</html>


<!--            <table>
                <tr>
                    <th>
                        <h3 class = 'title'>Courses</h3>
                        <a class ='button add_link' href='?page=courses&action=add'>+</a>
                        
                    </th>
                    <th>Students</th>
                </tr>
                <tr>
                    <td> <?php// echo $course_list; ?></td>
                    <td> <?php // echo $student_list; ?></td>
                     <td>-->
                    <?php
//                        if (!isset($_GET['action'])) {
//                                $form = '';
//                        } else {
//                            switch ($_GET['action']) {
//                                case 'edit':
//                                    $form = include ('views/form.php');
//                                    break;
//                                case 'add':
//                                    $form = include ('views/form.php');
//                                    break;
//                                case 'details':
//                                    echo $_GET['page'];
//                                    echo $_GET['page']::printDetails($_GET['id']);
//                                    break;
//
//                                default:
//                                    $form = '';
//                                    break;
//                            }
//                        }
                    ?>
                   <?php// echo $form; ?>