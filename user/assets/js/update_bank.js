
     

  const flutterwavePublicKey = 'FLWSECK-9010cee8b6cda2829e549ccae0c88f93-1910154e1b2vt-X';

  $(document).ready(function () {
    // Initialize select2
    $('#bankSelect').select2({
      dropdownParent: $('#exampleModal4'),
      placeholder: 'Select a bank',
      width: '100%',
      
    });

    // Fetch bank list
    fetch(`${hosted_url}/user/inc/get_banks`)
        .then(response => response.json())
        .then(data => {
            const sortedBanks = data.data.sort((a, b) => a.name.localeCompare(b.name));
            for (let bank of sortedBanks) {
            $('#bankSelect').append(`<option value="${bank.code}">${bank.name}</option>`);
            }
    });


    // Resolve account name on account number input blur
    $('#account_no, #bankSelect').on('change', function () {
        const account_number = $('#account_no').val().trim();
        const bank_code = $('#bankSelect').val();

        if (account_number.length === 10 && bank_code) {
            $.ajax({
            url: `${hosted_url}/user/inc/resolve_account`,
            method: 'POST',
            data: {
                account_number,
                bank_code
            },
            success: function (response) {
                const res = JSON.parse(response);
                if (res.status === 'success') {
                $('#account_name').val(res.data.account_name);
                } else {
                $('#account_name').val('');
                Swal.fire({
                        icon: 'error',
                        title: 'Invalid Account',
                        text: res.message,
                        background: '#fff',
                        color: '#000'
                    });
                }
             }
            });
        }
    });


    // Submit form via AJAX
    $('#bankForm').on('submit', function (e) {
      e.preventDefault();

      // Show spinner
      $('#submitBtn .btn-text').text('Processing...');
      $('#submitBtn .spinner-border').removeClass('d-none');

      setTimeout(() => {
            $.ajax({
                url: `${hosted_url}/user/inc/save_bank`,
                method: 'POST',
                data: $(this).serialize(),
                success: function (res) {
                    $('#submitBtn .btn-text').text('Update');
                    $('#submitBtn .spinner-border').addClass('d-none');

                    const response = JSON.parse(res);
                    Swal.fire({
                        icon: response.status,
                        title: response.status === 'success' ? 'Success' : 'Error',
                        text: response.message,
                        background: '#fff',
                        color: '#000'
                    }).then((result) => {
                        // If success, wait 2 seconds before redirecting
                        if (response.status === 'success') {
                            setTimeout(() => {
                                window.location.href = '?bank';
                            }, 2000); // 2-second delay
                        }
                    });

                    if (response.status === 'success') {
                        $('#bankForm')[0].reset();
                        $('#bankSelect').val(null).trigger('change');
                    }
                }
            });
        }, 1000);

    });
  });
