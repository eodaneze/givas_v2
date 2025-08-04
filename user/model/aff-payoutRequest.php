

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Affiliate Payout</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!--  -->
           <form id="payoutForm">
                <div class="row">
                    <?php 
                        if($country == "Nigeria"){
                    ?>
                        <div class="alert" style="background-color: #d1ecf1; color: #0c5460; border-color: #bee5eb;">
                            <p><strong>Note 📍📍:</strong> Choose either bank or crypto as your payment option and please confirm if the bank details or wallet address is correct before requesting for payout</p>
                        </div>
                    <?php
                        } else {
                    ?>
                        <div class="alert" style="background-color: #d1ecf1; color: #0c5460; border-color: #bee5eb;">
                            <p><strong>Note 📍📍:</strong> Please confirm your wallet address before requesting for payout</p>
                        </div>
                    <?php
                        }
                    ?>
                    <div class="col-lg-12 mb-3">
                        <label>Payout Amount ($)</label>
                        <input type="number" class="form-control p-3" name="amount" id="amount" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Total Earning</label>
                        <input type="text" value="$<?=number_format($aff_total_earning, 2)?>"  class="form-control p-3" readonly>
                    </div>
                    <?php if($country == "Nigeria"){ ?>
                        <div class="col-lg-12 mb-3">
                            <label>Payment Option</label>
                            <select name="payment_option" id="paymentOption" class="form-control p-3 mb-3">
                                <option value="bank">Bank</option>
                                <option value="crypto">Crypto</option>
                            </select>

                            <span id="bankDetails" class="d-block mt-2">
                                <strong>Bank Name:</strong> <?=$bank_name?><br>
                                <strong>Account Number:</strong> <?=$account_no?><br>
                                <strong>Rate:</strong> $1 = &#8358;<?=number_format(1600, 2)?>
                            </span>

                            <span id="cryptoDetails" class="d-none mt-2">
                                <strong>USDT Wallet (TRC20):</strong> <?=$address?>
                            </span>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-12 mb-3">
                            <label>Payment Option</label>
                            <select name="payment_option" id="paymentOption" class="form-control p-3 mb-2" disabled>
                                <option value="crypto">Crypto</option>
                            </select>
                            <span><?=$address?></span>
                        </div>
                    <?php } ?>
                </div>
                <button type="submit" id="submitBtn" class="btn btn-primary mt-3 w-100 p-3 text-uppercase">
                    Request Payout
                </button>
            </form>

         <!--  -->
       
      </div>
     
    </div>
  </div>
</div>

 <script>
        const paymentOption = document.getElementById('paymentOption');
        const bankDetails = document.getElementById('bankDetails');
        const cryptoDetails = document.getElementById('cryptoDetails');

        paymentOption.addEventListener('change', function () {
            const selected = this.value;
            if (selected === 'bank') {
                bankDetails.classList.remove('d-none');
                cryptoDetails.classList.add('d-none');
            } else if (selected === 'crypto') {
                bankDetails.classList.add('d-none');
                cryptoDetails.classList.remove('d-none');
            }
        });

        // Optional: Trigger change event on page load
        window.addEventListener('DOMContentLoaded', () => {
            paymentOption.dispatchEvent(new Event('change'));
        });
    </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('payoutForm').addEventListener('submit', function(e){
    e.preventDefault();

    const amountInput = document.getElementById('amount');
    const paymentOptionInput = document.getElementById('paymentOption');
    const btn = document.getElementById('submitBtn');
    const amount = parseFloat(amountInput.value);
    const paymentOption = paymentOptionInput.value;

    // Button Loading State
    btn.disabled = true;
    btn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...`;

    setTimeout(() => {
        const formData = new FormData(this);
        fetch(`./inc/process_payout`, {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(response => {
            btn.disabled = false;
            btn.innerHTML = 'Request Payout';

            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: response.status,
                title: response.message,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });

            if(response.status === 'success'){
                setTimeout(() => {
                    location.reload();
                }, 1000);
            }
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerHTML = 'Request Payout';

            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    }, 3000);
});
</script>
