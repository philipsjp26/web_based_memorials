<!-- Modal -->
<div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">No : 0219202213CUST00035</h5>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="complete">Complete</option>
                            <option value="reject">Reject</option>
                        </select>
                    </div>
                </form>
                <div class="row">
                    <div class="col-8">
                        <input type="text" class="form-control form-control-muted" placeholder="Filename.png" disabled>
                    </div>
                    <div class="col">
                        <form action="/upload/download/{{ $transaction_id }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-secondary">Download</button>
                        </form>                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
