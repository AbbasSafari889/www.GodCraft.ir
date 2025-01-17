// برای نمایش توضیحات اضافی یا اضافه کردن رویدادها به دکمه‌ها
document.querySelectorAll('.shop-btn').forEach(button => {
    button.addEventListener('click', () => {
        const id = button.parentElement.id;
        alert(`شما وارد بخش ${id} شدید!`);
    });
});
