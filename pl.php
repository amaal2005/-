<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customer_name'];
    $product = $_POST['product'];
    $orderCode = $_POST['order_code'];

    echo "<h2>تم استلام طلبك بنجاح!</h2>";
    echo "الاسم: " . htmlspecialchars($name) . "<br>";
    echo "المنتج المطلوب: " . htmlspecialchars($product) . "<br>";
    echo "كود الطلب: " . htmlspecialchars($orderCode) . "<br>";
}
?>
