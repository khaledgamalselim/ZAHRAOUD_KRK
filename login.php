<?php
// بيانات تسجيل الدخول
$valid_username = "your_username"; // استبدل بالاسم المستخدم الصحيح
$valid_password = "your_password"; // استبدل بكلمة المرور الصحيحة

// تحقق من البيانات المدخلة
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // التحقق من صحة بيانات تسجيل الدخول
    if ($username == $valid_username && $password == $valid_password) {
        // بيانات صحيحة، قم بتوجيه المستخدم إلى صفحة Home.html
        header("Location: Home.html");
        exit; // تأكد من إنهاء التشغيل بعد توجيه المستخدم
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة!";
    }
}
?>
