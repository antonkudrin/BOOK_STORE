
var summ = document.getElementById('price').value,
   quantityOrder = document.getElementById('quantityOrder'),
   priceOrder = document.getElementById('priceOrder'),
   quantity = 1,
   i = 0;

function myOrder() {
   priceOrder.innerHTML = summ;
   quantityOrder.innerHTML = quantity;
}

