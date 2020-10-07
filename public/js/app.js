let count = 1;
const counterPlus = document.getElementById('plus');
const counterMinus = document.getElementById('minus');
const qty = document.querySelector('.qty');

counterMinus.addEventListener('click', function () {
    if (qty.value == 1) {} else {
        count--;
        qty.value = count;
    }
})

counterPlus.addEventListener('click', function () {
    count++;
    qty.value = count;
})
