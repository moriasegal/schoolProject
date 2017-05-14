<?php
//    if (!isset($_GET['action'])) {
//        $form = '';
//    } else {
//        switch ($_GET['action']) {
//            case 'edit':
//                $form = include ('views/form.php');
//                break;
//            case 'add':
//                $form = include ('views/form.php');
//                break;
//            case 'details':
//                echo $_GET['page'];
//                echo $_GET['page']::printDetails($_GET['id']);
//                break;
//
//            default:
//                $form = '';
//                break;
//        }
//    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        
        <link type="text/css" rel="stylesheet" href="views/mainStyle.css"/>
        <meta charset="UTF-8">
        <title><?php echo $_GET['view']?></title>
    </head>
    <body>
        <div class="flex-container-main-view">
            <div class="flex-item-main-view l_flex">
                <?php include 'views/eside.php'; ?>
            </div>
            <div class="flex-item-main-view r_flex">
                <?php 
                    if (!isset($_GET['action'])) {
                        $form = '';
                    } else {
                        switch ($_GET['action']) {
                            case 'edit':
                                $form = include ('views/form.php');
                                break;
                            case 'add':
                                $form = include ('views/form.php');
                                break;
                            case 'details':
                                echo "<span>
                                    <h1 class = 'main_title'>{$_GET['page']}  {$_GET['action']}</h1>
                                    <a class ='button edit_link' href='?view={$_GET['view']}&page={$_GET['page']}&action=edit&id={$_GET['id']}'>edit</a>
                                </span>
                                <div class='line-separator'></div>";
                                echo $_GET['page']::printDetails($_GET['id']);
                                break;

                            default:
                                $form = '';
                                break;
                        }
                    }
                    //echo $form;
                ?>
                <?php // echo $form; ?>
            </div>
        </div>
    </body>
</html>



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
                


