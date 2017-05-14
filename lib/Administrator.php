<?php 

class Administrator implements ISavable {
    private static $tableName = 'administrators';
    private static $imagePrefix = 'img/administrators_img';
    private $id;
    private $name;
    private $phone;
    private $email;
    private $password;
    private $image;
    private $role;

    function __construct($id, $name, $phone, $email, $password, $image, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->image = $image;
        $this->role = $role;
    }

     public function save() {
        $stmt = DB::getConnection()->prepare("INSERT INTO " .self::$tableName." (name, phone, email, password, image, role) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sisssi', $this->name, $this->phone, $this->email, password_hash($this->password, PASSWORD_DEFAULT), $this->image, $this->role);

        $stmt->execute();
    }
        
    public function edit() {
        $stmt = DB::getConnection()->prepare("UPDATE " .self::$tableName. " SET name=?, phone=?, email=?, password=?, image=?, role = ? where id = ?");
        $stmt->bind_param('sisssii', $this->name, $this->phone, $this->email, password_hash($this->password, PASSWORD_DEFAULT), $this->image, $this->role, $this->id);

        $stmt->execute();
    }
    public function delete() { 
        $stmt = DB::getConnection()->prepare("DELETE FROM " .self::$tableName. " where id = ?");
        $stmt->bind_param('i', $this->id);

        $stmt->execute();
    }

    private static function selectAll() {
        $result = DB::getConnection()->query("SELECT * FROM " . self::$tableName . " limit 1000");
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows []= new self($row['id'], $row['name'], $row['phone'], $row['email'], $row['password'], $row['image'], $row['role']);
        }
        return $rows;
    }
    
    public static function selectRow($id){
        $result = DB::getConnection()->query("SELECT * FROM " . self::$tableName . " WHERE id = $id");
        return $result->fetch_assoc();
    }

    public static function printList() {
        $administrators = self::selectAll();

        $html  = '';
        for ($i=0, $count = count($administrators); $i < $count; $i++) {
            
            $html .="<figure class='administrator'>
                                <a class ='administrator_link' href='?view=administration&page=administrator&action=details&id={$administrators[$i]->id}'>
                                        <img class = 'administrator_img' src='" . self::$imagePrefix . "/{$administrators[$i]->image}'>
                                        <figcaption class ='administrator_figcaption' >
                                                <span class='administrator_name'>{$administrators[$i]->name}</span></br>
                                                <span class='administrator_phone'>0{$administrators[$i]->phone}</span>
                                        </figcaption>
                                </a>
                        </figure>";
        }
        return $html;
    }
    
    public static function role($id){
        $result = DB::getConnection()->query("SELECT roles.name FROM roles JOIN " . self::$tableName . " ON roles.id = " . self::$tableName ." .role WHERE " . self::$tableName ." .id = $id");
        $role = $result->fetch_assoc();
        return $role['name'];

    }

    public static function printDetails($id){
//        $administrators = self::selectRow($id);
//       // $role = DB::getConnection()->query("SELECT roles.name FROM roles JOIN " . self::$tableName . " ON roles.id = " . self::$tableName .".role WHERE id = $id");
//        $role = self::role($id);
//        $html  = '';
//        //for ($i=0, $count = count($administrators); $i < $count; $i++) { 
//            $html .="<figure class='administrator figure flex-item-list-view'>
//                        <img class = 'administrator img' src='" . self::$imagePrefix . "/{$administrators['image']}'>
//                    </figure>
//                    <span class ='administrator_div' >
//                        <lable for = 'administrato nam'>Name: </lable><span class='administrator_name'>{$administrators['name']}</span>
//                        <lable for = 'administrator phone'>Phone: </lable><span class='administrator_phone'>0{$administrators['phone']}</span>
//                        <lable for = 'administrator emaile'>Email: </lable><span class='administrator_email'>{$administrators['email']}</span>
//                        <lable for = 'administrator emaile'>Role: </lable><span class='administrator_role'>{$role}</span>
//
//                    </span>";
//        //}
//        return $html;
        
         include 'views/html/personDetailsHtml.php';
        
    }
}