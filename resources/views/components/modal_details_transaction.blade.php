<!-- Modal -->
<div class="modal fade" id="modalTransactionDetail" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 500px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Acquittance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="/upload/download/{{ $transaction_id }}" method="get">
                        @csrf                        
                        @method('GET')
                        @if ($image)
                            @foreach ($image->transaction_images as $item)
                                <div class="col-8 my-1">
                                    <input class="form-control" type="text" placeholder="{{ $item->filename }}"
                                        aria-label="Disabled input example" disabled>
                                </div>
                                <div class="col my-1">
                                    <button type="submit" name="filename" value="{{ $item->filename }}"
                                        class="btn btn-success">Download</button>
                                </div>
                            @endforeach
                        @endif                 
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
