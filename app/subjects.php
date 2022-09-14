<?php 

require_once './app/db.php';

function subject(){

    

}

function showSubjects(){
    include './templates/header.php';
    include './templates/form.php';
    subject();
    include './templates/footer.php';
}

function showAdd(){

    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];

    insertSubject($subject, $teacher);

    header("Location: " . BASE_URL); 

}