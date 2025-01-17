<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemRequest = htmlspecialchars($_POST['item_request']);

    // ذخیره درخواست در فایل
    file_put_contents('custom_items.txt', "درخواست آیتم: $itemRequest\n", FILE_APPEND);

    echo "درخواست شما با موفقیت ثبت شد!";
} else {
    echo "خطایی رخ داد!";
}
?>
