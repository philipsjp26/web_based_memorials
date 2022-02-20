<!-- Modal -->
<div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">No : 0219202213CUST00035</h5>
            </div>
            <div class="modal-body">
                <form action="/transaction/update/{{ $id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="complete">Complete</option>
                            <option value="pending">Pending</option>
                            <option value="reject">Reject</option>
                        </select>
                    </div>
                    <div class="row">
                        @if ($transaction_images)
                            @foreach ($transaction_images as $item)
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-muted"
                                        placeholder="{{ $item->filename }}" disabled>
                                </div>
                                <div class="col">
                                    <a href="/admin/download/{{ $item->filename }}"
                                        class="btn btn-secondary">Download</a>
                                </div>
                            @endforeach
                        @endif
                        <div class="col-8">
                            <input type="text" class="form-control form-control-muted" placeholder="" disabled>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-secondary">Download</a>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
