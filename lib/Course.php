<?php 

class Course implements ISavable {
    private static $tableName = 'courses';
    private static $imagePrefix = 'img/courses_img';
    private $id;
    private $name;
    private $description;
    private $image;
    
            function __construct($id, $name, $description , $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
    }

     public function save() {
        $stmt = DB::getConnection()->prepare("INSERT INTO ".self::$tableName." (name, description, image) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $this->name, $this->description, $this->image);

        $stmt->execute();
    }
        
    public function edit() {
        $stmt = DB::getConnection()->prepare("UPDATE " . self::$tableName . " SET name=?, description = ?, image=? where id = ?");
        $stmt->bind_param('sssi', $this->name, $this->description, $this->image, $this->id);

        $stmt->execute();
    }
    
    public function delete() { 
        $stmt = DB::getConnection()->prepare("DELETE FROM " . self::$tableName . " where id = ?");
        $stmt->bind_param('i', $this->id);

        $stmt->execute();
    }
    
    private static function selectAll() {
        $result = DB::getConnection()->query("SELECT * FROM " . self::$tableName . " limit 1000");
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows []= new self($row['id'], $row['name'], $row['description'], $row['image']);
        }
        return $rows;
    }
    
    public static function selectRow($id){
        $result = DB::getConnection()->query("SELECT * FROM ".self::$tableName. " WHERE id = $id");
        //$result->bind_param('i', $id);
        return $result->fetch_assoc();
    }

    public static function printList() {
        $courses = self::selectAll();

        $html  = '';
        for ($i=0, $count = count($courses); $i < $count; $i++) { 
            $html .="<figure class='course_figure flex-item-list-view'>
                        <a class='course_link' href='?page=course&action=details&id={$courses[$i]->id}'>
                            <img class = 'course_img' src='" . self::$imagePrefix . "/MU_logo.jpg'>
                            <figcaption class ='course_figcaption' >
                                    <span class='course_name'>{$courses[$i]->name}</span>
                            </figcaption>
                        </a>
                    </figure>";
        }
        return $html;
    }
    
     public static function student($id){
        $result = DB::getConnection()->query("SELECT students.name FROM students JOIN " . self::$tableName . " ON students.course = " . self::$tableName ." .name WHERE " . self::$tableName ." .id = $id");
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students []= $row;
        }
        return $students;
    }
     public static function printDetails($id){
        $courses = self::selectRow($id);
        $students = self::student($id);
        
        $html  = '';
        $html .="<figure class='course_figure_details'>
                    <img class = 'course_img_details' src='" . self::$imagePrefix . "/{$courses['image']}'>
                 </figure>
                <ul class ='course_div_details' >
                    <li><lable for = 'course_name'>Name: </lable><span class='course_name'>{$courses['name']}</span></li>
                    <li><lable for = 'course_description'>Description: </lable><p class='course_description'>{$courses['description']}</p></li>
                    <li><lable for = 'course_students'>Students: </lable><ul>";
                    for($i=0, $count = count($students); $i<$count; $i++){
                        $html .="<li>".$students[$i]['name']."</li>";
                    }
                    $html .= "</ul></li>
                </ul>";
        return $html;
        
    }
    

}