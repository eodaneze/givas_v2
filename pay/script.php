   <script>
  let hosted_url;

  if (window.location.hostname === 'localhost') {
    // Development environment
    hosted_url = "http://localhost/givas_v2";
  } else {
    // Hosted/Production environment
    hosted_url = "https://givas.org"; 
  }
</script>
    
    <!-- <script src="./assets/js/write-comment.js"></script> -->
     <script src="./assets/js/payment_step.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    


<script>
  AOS.init(); // Initialize AOS
</script>