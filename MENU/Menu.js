function calculateTotal() {
    const quantity = document.getElementById('quantity').value;
    const price = document.getElementById('price').value;
    const total = quantity * price;
    document.getElementById('total').value = total;
}
