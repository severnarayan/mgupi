<?php

/*

�������:
1. �������� � ������� ���� Age � ������ ���������. ���� Age ���� ������� �����, ��� � Name
2. �������� ���� ��� � ������� ����� ��� ���� ����� � �������� ��� � ������ ��� ������� ��������. ���� ��� ���� ������� �����, ��� � Name
3. �������� ���� ������� � ����� ��������, ������� ��� � �����, ����� ��������� � �� � ����� �������� � ������

�����: 
4. �������� �������� ������� �� ��


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
