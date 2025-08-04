
    

    <div class="modal-sidebar" id="sidebarModal">
        <span class="close-btn" id="closeModal">&times;</span>
        <h3>Pro Plan Payment</h3>
        <p>Pay $20 to the wallet address below. After making payment, send a proof of payment by using this form below.</p>
        <form>
            <div class="form-group">
                <label>Amount ($20):</label>
                <input name="amount" type="number" placeholder="Enter amount" value="20" readonly="">
            </div>
            <div class="form-group">
                <label>Wallet:</label>
                <input type="text" name="wallet_address" placeholder="Enter wallet address" value="TSarxshpu6ecXUAj38MBnJGagWG9V4uc6U" readonly="">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter email" value='<?=$email?>' readonly="">
                <input name='user_id' value='<?=$user_id?>' type='hidden'>
            </div>
            <div class="form-group">
                <label>Upload File:</label>
                <div class="drag-drop" id="dropZone">Drag & Drop or Click to Upload</div>
                <input type="file" id="fileInput" style="display:none;">
                <p id="fileDetails"></p>
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea rows="4" readonly="">Payment for Pro Plan activation</textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('sidebarModal').classList.add('active');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('sidebarModal').classList.remove('active');
        });

        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');
        const fileDetails = document.getElementById('fileDetails');

        dropZone.addEventListener('click', () => fileInput.click());
        
        dropZone.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropZone.style.borderColor = 'blue';
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.style.borderColor = '#aaa';
        });

        dropZone.addEventListener('drop', (event) => {
            event.preventDefault();
            dropZone.style.borderColor = '#aaa';
            handleFiles(event.dataTransfer.files);
        });

        fileInput.addEventListener('change', (event) => {
            handleFiles(event.target.files);
        });

        function handleFiles(files) {
            if (files.length > 0) {
                const file = files[0];
                fileDetails.textContent = `File: ${file.name}, Size: ${(file.size / 1024).toFixed(2)} KB`;
            }
        }
    </script>
</body>
</html>
