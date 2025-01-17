<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // ذخیره پیام در فایل
    file_put_contents('support_messages.txt', "$name: $message\n", FILE_APPEND);

    echo "پیام شما با موفقیت ارسال شد!";
} else {
    echo "ارسال پیام ناموفق بود!";
}
?>
