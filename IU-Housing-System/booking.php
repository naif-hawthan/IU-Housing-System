<?php
session_start();
header('Content-Type: application/json');

// تحقق من تسجيل الدخول
if (!isset($_SESSION['username'])) {
    echo json_encode(['success' => false, 'message' => 'يرجى تسجيل الدخول أولاً.']);
    exit();
}

// إعداد الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "abdullah", "12345678", "mywebsite");

// التحقق من الاتصال
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'خطأ في الاتصال بقاعدة البيانات.']);
    exit();
}

// استلام البيانات من الطلب
$data = json_decode(file_get_contents('php://input'), true);

// تحقق من وجود المتغيرات
if (!isset($data['userId'], $data['roomNumber'], $data['college'], $data['level'], $data['term'])) {
    echo json_encode(['success' => false, 'message' => 'بيانات غير مكتملة.']);
    exit();
}

$userId = $data['userId'];
$roomNumber = $data['roomNumber']; // استخدام room_number
$college = $data['college'];
$level = $data['level'];
$term = $data['term'];

// تحقق من وجود حجز سابق للطالب
$checkSql = "SELECT COUNT(*) AS count FROM bookings WHERE student_id = ?";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bind_param("i", $userId);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();
$row = $checkResult->fetch_assoc();

if ($row['count'] > 0) {
    echo json_encode(['success' => false, 'message' => 'لديك حجز واحد بالفعل. لا يمكنك التسجيل لحجز آخر.']);
    exit();
}

// إدخال بيانات الحجز
$sql = "INSERT INTO bookings (student_id, room_number, level, term) VALUES (?, ?, ?, ?)"; // تحديث هنا
$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'فشل في إعداد العبارة.']);
    exit();
}

$stmt->bind_param("iiss", $userId, $roomNumber, $level, $term); // تحديث هنا

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'فشل في تسجيل الحجز.']);
}

// إغلاق البيان والاتصال
$stmt->close();
$checkStmt->close();
$conn->close();
?>