<!-- Modal -->
<div class="modal fade" id="modalUploadFile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 500px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Acquittance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/upload/" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" style="border-radius: 10%">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
