
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.add-payment-option').addEventListener('click', function () {
        var paymentOptions = document.getElementById('payment-options');
        var newOption = document.createElement('div');
        newOption.className = 'input-group mb-3';
        newOption.innerHTML = `
            <input type="text" name="payment_options[]" class="form-control" placeholder="Enter payment option">
            <button type="button" class="btn btn-danger remove-payment-option">Remove</button>
        `;
        paymentOptions.appendChild(newOption);

        newOption.querySelector('.remove-payment-option').addEventListener('click', function () {
            paymentOptions.removeChild(newOption);
        });
    });
});
