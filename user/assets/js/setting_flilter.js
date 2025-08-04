
    const personalDetailsBtn = document.getElementById('personalDetailsBtn');
    const walletBtn = document.getElementById('walletBtn');
    const passwordBtn = document.getElementById('passwordBtn');
    const kycBtn = document.getElementById('kycBtn');
    const bankBtn = document.getElementById('bankBtn');
    const personalDetailsSection = document.getElementById('personalDetailsSection');
    const walletSection = document.getElementById('walletSection');
    const passwordSection = document.getElementById('passwordSection');
    const kycSection = document.getElementById('kycSection');
    const bankSection = document.getElementById('bankSection');

    // Helper function to toggle sections
    function toggleSections(activeSection, activeBtn) {
        // Hide all sections
        personalDetailsSection.style.display = 'none';
        walletSection.style.display = 'none';
        passwordSection.style.display = 'none';
        kycSection.style.display = 'none';
        bankSection.style.display = 'none';

        // Remove active class from all buttons
        personalDetailsBtn.classList.remove('btn-active');
        walletBtn.classList.remove('btn-active');
        passwordBtn.classList.remove('btn-active');
        kycBtn.classList.remove('btn-active');
        bankBtn.classList.remove('btn-active');

        // Show the active section and highlight the active button
        activeSection.style.display = 'block';
        activeBtn.classList.add('btn-active');
    }

    // Event listener for Personal Details button
    personalDetailsBtn.addEventListener('click', () => {
        toggleSections(personalDetailsSection, personalDetailsBtn);
    });

    // Event listener for Wallet button
    walletBtn.addEventListener('click', () => {
        toggleSections(walletSection, walletBtn);
    });

    // Event listener for Password button
    passwordBtn.addEventListener('click', () => {
        toggleSections(passwordSection, passwordBtn);
    });

    // Event listener for KYC button
    kycBtn.addEventListener('click', () => {
        toggleSections(kycSection, kycBtn);
    });
    bankBtn.addEventListener('click', () => {
        toggleSections(bankSection, bankBtn);
    });

    // Ensure Personal Details is the default view on page load
    window.onload = () => {
        toggleSections(personalDetailsSection, personalDetailsBtn);
    };