function calculateTotal() {
    const quantity = document.getElementById('quantity').value;
    const price = document.getElementById('price').value;
    const total = parseFloat(quantity) * parseFloat(price);

    if (!isNaN(total)) {
        document.getElementById('total').value = total.toFixed(2);
    } else {
        document.getElementById('total').value = '';
    }
}
