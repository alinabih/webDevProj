<?php

require_once 'Model/StudentModel.php';
require_once 'View/StudentView.php';

class StudentController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new StudentModel();
        $this->view = new StudentView();
    }

    public function addStudent($id, $name, $grade)
    {
        $student = new Student($id, $name, $grade); // إنشاء كائن طالب جديد
        $this->model->addStudent($student); // إضافة الطالب إلى النموذج
        $this->view->displayMessage("Student added successfully!"); // عرض رسالة تأكيد إضافة الطالب
    }

    public function getAllStudents()
    {
        $students = $this->model->getAllStudents(); // استرجاع جميع الطلاب من النموذج
        $this->view->displayAllStudents($students); // عرض بيانات جميع الطلاب
    }

    public function deleteStudent($id)
    {
        $result = $this->model->deleteStudent($id); // حذف الطالب من النموذج
        if ($result) {
            $this->view->displayMessage("Student deleted successfully!"); // عرض رسالة تأكيد حذف الطالب
        } else {
            $this->view->displayMessage("Student not found!"); // عرض رسالة خطأ في حالة عدم وجود الطالب
        }
    }

    public function updateStudent($id, $name, $grade)
    {
        $result = $this->model->updateStudent($id, $name, $grade); // تحديث بيانات الطالب في النموذج
        if ($result) {
            $this->view->displayMessage("Student updated successfully!"); // عرض رسالة تأكيد تحديث الطالب
        } else {
            $this->view->displayMessage("Student not found!"); // عرض رسالة خطأ في حالة عدم وجود الطالب
        }
    }
}

?>