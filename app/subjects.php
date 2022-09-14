<?php 

require_once './app/db.php';

function subject(){

    $subjects = getAllSubjects();

    echo '<ul class="list-group">';
    foreach ($subjects as $sub) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> 
                    <b>$sub->subject</b> - $sub->teacher 
                    <a href='delete/$sub->id' type='button' class='btn btn-danger ml-auto'><img src='./img/delete.png' alt='delete'></a>
                    <a href='edit/$sub->id' type='button' class='btn btn-danger ml-auto'><img src='./img/edit.png' alt='edit'></a>
                </span>           
            </li>";
    }
    echo "</ul>";
}

function showSubjects(){
    include './templates/header.php';
    include './templates/form.php';
    subject();
    include './templates/footer.php';
}

function addSubject(){

    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];

    insertSubject($subject, $teacher);

    header("Location: " . BASE_URL); 
}


function deleteSubject($id) {
    deleteDebtById($id);
    header("Location: " . BASE_URL); 
}