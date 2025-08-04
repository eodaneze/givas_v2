document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("paymentForm2");
    const btn = document.getElementById("nextBtn");

    
    

    btn.addEventListener("click", function () {
        const fname = document.getElementById("fname").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const country = document.getElementById("country").value;
        const product_id = document.getElementById("product_id").value;
        const affiliate_id = document.getElementById("affiliate_id").value;

       
        
        

        if (!fname || !email || !phone || !country) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'All fields are required!',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
            return;
        }

        btn.innerHTML = `<span class="spinner-border spinner-border-sm"></span> Processing...`;
        btn.disabled = true;

        console.log("form is:", form); // debug
        console.log("form instanceof HTMLFormElement:", form instanceof HTMLFormElement);


        const formData = new FormData(form);

        


        // setTimeout(() => {
            fetch(`${hosted_url}/pay/inc/payment_data`, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                console.log(`the data is ${data}`);
                
                if (data.status === 'success') {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Details saved!',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });
                   
                    setTimeout(() => changeStep(1), 1000);
                } else {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: data.message || 'Something went wrong!',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                }
            })
            .catch(() => {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: 'Network error!',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            })
            .finally(() => {
                btn.innerHTML = `Next`;
                btn.disabled = false;
            });
        // }, 2000);
    });
});
