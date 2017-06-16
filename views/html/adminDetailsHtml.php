<?php
        
    $administrators = self::selectRow($id);
?>


    
    <figure class='administrator_figure flex-item-list-view'>
        <img class = 'details_img' src="<?php echo self::$imagePrefix . '/' .$administrators['image']?>">
    </figure>
    <ul class ='deta_ul'>
        <li>
            <a href="?view=<?php echo $_GET['view']?>&page=<?php echo $_GET['page']?>&action=edit&id=<?php echo $_GET['id']?>">
                <span id='administrator_name'><?php echo $administrators['name']?></span>
            </a>
        </li> 
        <li>
            <lable for = 'administrator_phone'>Phone: </lable>
            <span id='administrator_phone'>0<?php echo $administrators['phone']?></span>
        </li>
        <li>
            <lable for = 'administrator_emaile'>Email: </lable>
            <span id='administrator_email'><?php echo $administrators['email']?></span>
        </li>
        <li>
            <lable for = 'administrator_role'>Role: </lable>
            <span id='administrator_role'><?php echo $role?></span>
        </li>
    </ul>

        
    

