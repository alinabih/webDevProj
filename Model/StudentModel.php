<?php

class StudentModel
{
    private $students = [];

    public function addStudent($student)
    {
        $this->students[] = $student; // إضافة الطالب إلى قائمة الطلاب
    }

    public function getAllStudents()
    {
        return $this->students; // استرجاع جميع الطلاب
    }

    public function deleteStudent($id)
    {
        foreach ($this->students as $index => $student) {
            if ($student->getId() == $id) {
                unset($this->students[$index]); // حذف الطالب من قائمة الطلاب
                return true;
            }
        }
        return false;
    }

    public function updateStudent($id, $name, $grade)
    {
        foreach ($this->students as $student) {
            if ($student->getId() == $id) {
                $student->setName($name); // تحديث اسم الطالب
                $student->setGrade($grade); // تحديث الدرجة العلمية للطالب
                return true;
            }
        }
        return false;
    }
}

?>