<?php

class StudentView
{
    public function displayStudent($student)
    {
        echo "Student ID: " . $student->getId() . "<br>"; // عرض رقم الطالب
        echo "Student Name: " . $student->getName() . "<br>"; // عرض اسم الطالب
        echo "Student Grade: " . $student->getGrade() . "<br>"; // عرض الدرجة العلمية للطالب
    }

    public function displayAllStudents($students)
    {
        foreach ($students as $student) {
            $this->displayStudent($student); // عرض بيانات الطلاب
            echo "<br>";
        }
    }

    public function displayMessage($message)
    {
        echo $message; // عرض رسالة
    }
}

?>