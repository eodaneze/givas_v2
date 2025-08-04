<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <form action="./inc/confirm-account.php"  method="post">
                            <div class="row">
                                    <div class="col-lg-12 mb-3">
                                           <label>Number Of Account</label>
                                            <input name="no_account" type="number" class="form-control">
                                            <input name="payment_id" type="hidden" id="modalId">
                                    </div>
                            </div>
                            <div class="col-lg-12">
                                 <button name="confirm" class="btn btn-primary w-100" data-bs-dismiss="modal">Confirm</button>
                            </div>
                 </form>
            </div>
        </div>
    </div>
</div>



<script>
function setModalId(id) {
        document.getElementById('modalId').value = id;
}
</script>


