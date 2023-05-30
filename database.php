<?php

class DatabaseConnection {
    private $host = 'localhost'; // عنوان خادم قاعدة البيانات
    private $username = 'your_username'; // اسم المستخدم للدخول إلى قاعدة البيانات
    private $password = 'your_password'; // كلمة المرور للدخول إلى قاعدة البيانات
    private $database = 'your_database'; // اسم قاعدة البيانات

    private $connection; // كائن للاتصال بقاعدة البيانات

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error); // في حالة فشل الاتصال بقاعدة البيانات
        }
    }

    public function executeQuery($query) {
        $result = $this->connection->query($query); // تنفيذ استعلام SQL

        if (!$result) {
            die("Query execution failed: " . $this->connection->error); // في حالة فشل تنفيذ الاستعلام
        }

        return $result; // إرجاع النتيجة
    }

    public function closeConnection() {
        $this->connection->close(); // إغلاق الاتصال بقاعدة البيانات
    }
}

?>
