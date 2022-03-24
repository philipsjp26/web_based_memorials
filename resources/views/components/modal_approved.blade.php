<!-- Modal -->
<div class="modal fade" id="modalApproved" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 500px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Claim Memorial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/home/claim" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                        <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Fullname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Relationship</label>
                        <input type="text" name="relationship" class="form-control" required
                            id="exampleFormControlInput1" placeholder="Relationship">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File Image</label>
                        <input class="form-control" name="image" required type="file" id="formFile" multiple>
                    </div>
                    <input type="hidden" name="memorial_id" value="{{ $memorial_id }}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="account_id" value="{{ auth()->user() == null ? 'disabled' : '' }}"
                    class="btn btn-success" {{ auth()->user() == null ? 'disabled' : '' }}>Apply</button>
            </div>
            </form>
        </div>
    </div>
</div>
