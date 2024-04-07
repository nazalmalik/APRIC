document.getElementById('payment_method').addEventListener('change', function() {
    var cardDetails = document.getElementById('card_details');

    if (this.value === 'card') {
        cardDetails.style.display = 'block';
    } else {
        cardDetails.style.display = 'none';
    }
});
