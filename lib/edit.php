<?php
             
    switch ($action) {
        case 'edit':
            $id = $_GET['id'];
            $input = $class_name::selectRow($id);
            break;
        
        case 'add':
            $input = array('id'=> '', 'name'=> '', 'image' => 'profile.png', 'description' => '', 'phone' => '', 'email' => '','course'=>'', 'password' => '','role' => '');
            $id = $input['id'];
            break;

        default:
            $form = '';
            break;
    }
    
    
    $name = $input['name'];
    $image = $input['image'];
    switch ($table_name) {
        case 'courses':
            $description = $input['description'];
            break;

        case 'administrators':
            $phone = $input['phone'];
            $email = $input['email'];
            $password = $input['password'];
            $role = $input['role'];
            break;

        case 'students':
            $phone = $input['phone'];
            $email = $input['email'];
            $course = $input['course'];
            break;

        default:
            break;
    }

