
<?php
class Student
{
    function sayHello()
    {
        echo "Hello! I am a student.";
    }
}

//اینجا یک آبجیکت ایجاد می کنیم
$student1 = new Student();

// در اینجا متد را صدا می زنیم
$student1->sayHello();
?>

<?php
class Student {
    public $name;
    public $studentId;

    public $department;

    function __construct($name, $studentId, $department) {
        // قیمت هارا در پراپرتی ها ذخیره می کنیم
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo() {
        // در اینجا معلومات شاگرد را نشان می دهیم
        echo "Name: " . $this->name . "\n";
        echo "Student ID: " . $this->studentId . "\n";
        echo "Department: " . $this->department;
    }
}

// اینجا یک شی با مقدار مشخص یجاد می کنیم
$student1 = new Student("Ahmad", 1001, "Computer Science");

// نمایش اطلاعات
$student1->showInfo();
?>
