<!-- Modal -->
<style>
.file-upload-container {
    position: relative;
    cursor: pointer;
    border-style: dashed;
    transition: background-color 0.3s ease;
}
.file-upload-container:hover {
    background-color: #f8f9fa;
}
.file-upload-container.bg-light {
    background-color: #e9ecef !important;
}
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel2">Direct Payment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Pay $12 to the wallet address below. After making payment, send a proof of payment alongside your email address. <br><strong>Note:</strong> Please make sure you pay the exact amount to receive your entry code.</p>
               <!--  -->
               <form id="paymentForm" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label>Number of Account</label>
                        <input
                        type="number"
                        class="form-control"
                        name="no_account"
                        id="noAccount"
                        required
                        oninput="calculateTotal()"
                        />
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Amount($)</label>
                        <input type="text" class="form-control" id="amount" name="amount" readonly />
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Wallet Type</label>
                        <input
                        type="text"
                        class="form-control"
                        value="TRC20"
                        readonly
                        />
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Wallet Address</label>
                        <input
                        type="text"
                        class="form-control"
                        value="TSarxshpu6ecXUAj38MBnJGagWG9V4uc6U"
                        readonly
                        name="wallet_address"
                        />
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="col-lg-12 mb-5">
                        <label>Upload Proof</label>
                        <div
                        class="file-upload-container border border-primary rounded p-4 text-center"
                        id="dropzone"
                        ondragover="handleDragOver(event)"
                        ondragleave="handleDragLeave(event)"
                        ondrop="handleFileDrop(event)"
                        onclick="triggerFileInput()"
                        >
                        <p class="mb-0">Drag & Drop your file here or click to upload</p>
                        <input
                            type="file"
                            class="form-control d-none"
                            name="proof"
                            id="fileInput"
                            required
                        />
                        </div>
                        <div id="fileDetails" class="mt-3"></div>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <label>Description</label>
                        <textarea
                        name="descp"
                        class="form-control"
                        id=""
                        readonly
                        >Payment for entry code and gas fee</textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                    </div>
                </form>
               <!--  -->
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./assets/js/direct-payment.js"></script>
 <style>
    .drag-over {
      background-color: #e9ecef;
    }
  </style>


