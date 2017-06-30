


$(document).ready(function(event){
    new Promise (function(resolve){
        $.get('views/html/schoolList.php', function(data) {
            resolve(data);
        });  
    }).then(function(data){
        $('.containerSchool').html(data);
    }).then(function(){
        $('.containerForm').html('');        
    }).then( function (){
        schoolFormLink();
    });
 });


$('.schoolButton').click(function(event){
    new Promise (function(resolve){
        $.get('views/html/schoolList.php', function(data){
           resolve(data); 
        });
    }).then(function(data){
        $('.containerSchool').html(data);
    }).then(function(){
        $('.containerForm').html('');
    }).then( function (){
        schoolFormLink();
    });
});

$(document).ready(function(event){
    getJson('json/session.json').then(function(data){
        if(JSON.parse(data).user_role !== 'Sales'){
            $('.adminButton').click(function(event) {
                new Promise (function(resolve){
                    $.get('views/html/administratorList.php', function(data) {
                        resolve(data); 
                    });
                }).then(function(data){
                    $('.containerSchool').html(data);
                }).then(function(){
                    $('.containerForm').html('');
                }).then (function(){
                    add_form('.add_link_admin',"views/form.php?page=administrator&action=add",'.containerForm');
                    $('.person_link').click(function(event) {
                        var id = $(event.currentTarget).find("input[class=id]").val();
                        new Promise (function(resolve){
                            $.get("views/html/getDetails.php?page=administrator&action=ditails&id="+id, function(data){
                                resolve(data);
                            });
                        }).then(function(data){
                            Promise.all([getJson('json/session.json'), getJson('json/details.json')]).then(function(dataJson){
                                if((JSON.parse(dataJson[0]).user_role !== 'Manager')||(JSON.parse(dataJson[1]).role !== '1')){
                                    $('.containerForm').html(data);
                                     $(window).scrollTop(80);
                                }
                            }).then(function(){
                                $('.adminEditLink').click(function(){
                                    editForm("views/form.php?page=administrator&action=edit&id="+id,"json/details.json",'admin');
                                });
                            });
                        });
                    });
                });
            });
        } 
    });
});
    
function schoolFormLink(){
    add_form('.add_link_student',"views/form.php?page=student&action=add",'.containerForm');
    add_form('.add_link_course',"views/form.php?page=course&action=add",'.containerForm');
    $('.course_link').click(function(event) {
//        new Promise(function(resolve){
        var id = $(event.currentTarget).find("input[class=id]").val();
        get("views/html/getDetails.php?page=course&action=ditails&id="+id, '.containerForm').then(function(){
            $(window).scrollTop(80);
        }).then(function(){
            getJson('json/session.json').then(function(data){
                if(JSON.parse(data).user_role !== 'Sales'){
                    $('.coursEditLink').click(function(){
                        editForm("views/form.php?page=course&action=edit&id="+id,"json/details.json",'course');
                    });
                }
            });
        });
    });
    $('.person_link').click(function(event) {
        var id = $(event.currentTarget).find("input[class=id]").val();
        get("views/html/getDetails.php?page=student&action=ditails&id="+id,'.containerForm').then(function(){
            $(window).scrollTop(80);
        }).then(function(){
            $('.studentEditLink').click(function(){
                editForm("views/form.php?page=student&action=edit&id="+id,"json/details.json",'student');
            });
        });
    });
//        add_form('.person_link',"views/html/getDetails.php?page=student&action=ditails&id="+$('.person_link .id').val());

}



function get(url, className) {
    return new Promise(function(resolve) {
        $.get(url, function(data) {
            $(className).html(data);
            resolve(data);
        });
    });
}

function post(url, className) {
    return new Promise(function(resolve) {
        $.post(url, function(data) {
            $(className).html(data);
            resolve(data);
        });
    });
}

function getJson(url) {
    return new Promise(function(resolve) {
        $.get(url, function(data) {
            resolve(JSON.stringify(data));
        });
    });
}

 function editForm(url, jsonUrl, objName){
    Promise.all([get(url,'.containerForm'),getJson(jsonUrl)]).then(function(data){
        switch(objName) {
            case 'course':
                editCourseForm(data);
                break;
            case 'student':
                editStudentForm(data);
                break;
            case 'admin':
                editAdminForm(data);
                break;
            default:
//                code block
        }
    });  
 }

function add_form(addLink, link, className){
   
        $(addLink).click(function() {
                post(link, className);
        });
        
}

function editCourseForm(data){
            $('#name').val(JSON.parse(data[1]).name);
            $('#description').val(JSON.parse(data[1]).description);
            $('.imgTemp').val(JSON.parse(data[1]).image);
            $('.edit_img').attr('src','img/courses_img/'+JSON.parse(data[1]).image);
}

function editStudentForm(data){
            $('#name').val(JSON.parse(data[1]).name);
            $('#tel').val(JSON.parse(data[1]).phone);
            $('#email').val(JSON.parse(data[1]).email);
            $('#student_course_default').text(JSON.parse(data[1]).course);
            $('#student_course_default').val(JSON.parse(data[1]).course);
            $('.tempImg').val(JSON.parse(data[1]).image);
            $('.edit_img').attr('src','img/students_img/'+JSON.parse(data[1]).image);
}


function editAdminForm(data){
            $('#name').val(JSON.parse(data[1]).name);
            $('#tel').val(JSON.parse(data[1]).phone);
            $('#email').val(JSON.parse(data[1]).email);
            $('#password').val(JSON.parse(data[1]).password);
            $('#role').val(JSON.parse(data[1]).role);
            $('.imgTemp').val(JSON.parse(data[1]).image);
            $('.edit_img').attr('src','img/administrators_img/'+JSON.parse(data[1]).image);
}
  
  
  
//        new Promise (function(resolve){
//        $('.course_link').click(function(event) {
//                $.get('views/html/getDetails.php', function(data) {
//                       resolve(data); 
//                });
//            console.log($('.course_link .id').val());
//        });
//    }).then(function(data){
//        $('.containerSchool').html(data);
//    }).then (function(){
//        add_form('.add_link_admin',"views/form.php?page=administrator&action=add");
//    });
//            $('.add_link_student').click(function(event) {
//                get("views/form.php?page=student&action=add");
////            Promise.all([get("views/form.php?page=student"),getJson('json/details.json')]).then(function(data){
////            console.log(JSON.parse(data[1]).name);
////            
////            
////            $('#name').val(JSON.parse(data[1]).name);
////            $('.lastName').val(JSON.parse(data[1]).lastName);
////            });  
//        });
//        $('.add_link_course').click(function(event) {
//                get("views/form.php?page=course&action=add");
//        });
//        
//        
//$('.add_link').click(function(event) {
//    console.log(666);
//        Promise.all([get('views/form.php'),getJson('json/details.json')]).then(function(data){
//            console.log(JSON.parse(data[1]).name);
////            $('.name').val(JSON.parse(data[1]).name);
////            $('.lastName').val(JSON.parse(data[1]).lastName);
//        });  
//});
//        
//        
  
  


