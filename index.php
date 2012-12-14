<?php

/*

Задание:
1. добавить и вывести поле Age в списке студентов. Поле Age надо вводить также, как и Name
2. Добавить поле пол в базовый класс для всех людей и выводить его в списке для каждого студента. Поле Пол надо вводить также, как и Name
3. Добавить поле фамилия в класс студента, вводить его в форме, также сохранять в бд и также выводить в списке

Бонус: 
4. написать удаление записей из БД


*/



include "html/index.html";

include "classes/people.php";
include "classes/student.php";
include "classes/db.php";


$student = new Student();
$student->name = $_REQUEST['name'];


$db = new DB();
$db->addRecord($student);

$db->listRecords();

#test line string





?>
