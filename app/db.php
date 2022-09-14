<?php

function getDB(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_subjects;charset=utf8', 'root', '');
    return $db;
}

function getAllSubjects() {
    // 1. abro conexión a la DB
    $db = getDB();

    // 2. ejecuto la sentencia (2 subpasos)
    $query = $db->prepare("SELECT * FROM subjects");
    $query->execute();

    // 3. obtengo los resultados
    $subjects = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $subjects;
}

function insertSubject($subject, $teacher){

}