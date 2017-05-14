<?php 

class Student implements ISavable {
    private static $tableName = 'students';
    private static $imagePrefix = 'img/students_img';
    private $id;
    private $name;
    private $phone;
    private $email;
    private $image;
    private $course;
            function __construct($id, $name, $phone, $email, $image, $course) {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->image = $image;
        $this->course = $course;
    }

     public function save() {
        $stmt = DB::getConnection()->prepare("INSERT INTO " .self::$tableName." (name, phone, email, image, course) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sisss', $this->name, $this->phone, $this->email, $this->image, $this->course);

        $stmt->execute();
    }
        
    public function edit() {
        $tableName = self::$tableName;
        $stmt = DB::getConnection()->prepare("UPDATE " .self::$tableName." SET name=?, phone=?, email=?, image=?, course=? where id = ?");
        $stmt->bind_param('sisssi', $this->name, $this->phone, $this->email, $this->image, $this->course, $this->id);

        $stmt->execute();
    }
    public function delete() { 
        $stmt = DB::getConnection()->prepare("DELETE FROM ".self::$tableName." where id = ?");
        $stmt->bind_param('i', $this->id);

        $stmt->execute();
    }


    private static function selectAll() {
        $result = DB::getConnection()->query("SELECT * FROM " . self::$tableName . " limit 1000");
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows []= new self($row['id'], $row['name'], $row['phone'], $row['email'], $row['image'], $row['course']);
        }
        return $rows;
    }
    
    public function selectRow($id){
        $result = DB::getConnection()->query("SELECT * FROM " . self::$tableName . " WHERE id = $id");
        return $result->fetch_assoc();
    }

    public static function printList() {
        $students = self::selectAll();

        $html  = '';
        for ($i=0, $count = count($students); $i < $count; $i++) { 
            
            $html .="<figure class='student figure flex-item-list-view'>
                        <a class='student link' href='?page=student&action=details&id={$students[$i]->id}'>
                            <img class = 'student img' src='" . self::$imagePrefix . "/{$students[$i]->image}'>
                            <figcaption class ='student figcaption' >
                                    <span class='student name'>{$students[$i]->name}</span></br>
                                    <span class='phone'>0{$students[$i]->phone}</span>
                            </figcaption>
                        </a>
                    </figure>";
        }
        return $html;
    }
    
    public static function printDetails($id){
//        $students = self::selectRow($id);
        include 'views/html/personDetailsHtml.php';
//        $html  = '';
//        //for ($i=0, $count = count($students); $i < $count; $i++) { 
//            $html .="<figure class='student'>
//                        <img class = 'student_img' src='" . self::$imagePrefix . "/{$students['image']}'>
//                     </figure>
//                    <ul class ='student_ul' >
//                        <li><lable for = 'student_name'>Name: </lable><span class='student_name'>{$students['name']}</span></li>
//                        <li><lable for = 'student_phone'>Phone: </lable><span class='student_phone'>0{$students['phone']}</span></li>
//                        <li><lable for = 'student_emaile'>Email: </lable><span class='student_email'>{$students['email']}</span></li>
//                        <li><lable for = 'student_course'>Courses: </lable><ul class='student_course'><li>{$students['course']}</li></ul></li>
//                    </ul>";
//        //}
//        return $html;
        
    }
}