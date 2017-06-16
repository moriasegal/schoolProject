<
        
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
                                include 'views/html/getDetails.php';

                                break;

                            default:
                                $form = '';
                                break;
                        }
                    }
                ?>
        </div>
    </div>



                


