<!-- Modal -->
<div class="modal fade" id="paymentMethodModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Methods</h5>
            </div>
            <div class="modal-body">
                <form action="/admin/create/bank" method="post">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Bank Name</label>
                        <input type="text" name="bank_name" class="form-control" id="exampleFormControlInput1"
                            placeholder="Bank Name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Account Number</label>
                        <input type="number" name="account_number" class="form-control" id="exampleFormControlInput2"
                            placeholder="Account Number" autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>
