<!-- product details reviews start -->
<div class="product-details-reviews section-space pb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="product-review-info">
                <ul class="nav review-tab">
                    <li>
                        <a class="active" data-bs-toggle="tab" href="#tab_one">about</a>
                    </li>
                    <li>
                        <a data-bs-toggle="tab" href="#tab_two">life</a>
                    </li>
                    <li>
<<<<<<< HEAD
                        <a data-bs-toggle="tab" href="#tab_three">review</a>
=======
                        <a data-bs-toggle="tab" href="#tab_three">testimoni</a>
>>>>>>> b39e2372f9e39e2a093e9d08041047edf02f7544
                    </li>
                    <li>
                        <a data-bs-toggle="tab" href="#tab_four">gallery</a>

                    </li>
                </ul>
                <div class="tab-content reviews-tab">
                    <div class="tab-pane fade show active" id="tab_one">
                        <div class="tab-one">
                            <p>{{ $data->memorialDescription ? $data->memorialDescription->description : '' }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_two">
                        <p>{{ $data->memorialDescription ? $data->memorialDescription->life : '' }}</p>

                    </div>
                    <div class="tab-pane fade" id="tab_three">
                        <div class="review-form">
                            @foreach ($data->reviews as $review)
                                <h5>review from <span>{{ $review->username }}</span></h5>
                                <div class="total-reviews">
                                    <div class="review-box">
                                        <div class="ratings">
                                            {{-- @for ($i = 1; $i <= $review->rating; $i++)
                                                <span><i class="fas fa-hanukiah"></i></span>
                                            @endfor --}}
                                            @if ($review->rating == 1)
                                                <span><i class="fas fa-church fa-3x" style="color: #532459"></i></span>
                                            @elseif($review->rating == 2)
                                                <span> <i class="fas fa-hanukiah fa-3x"
                                                        style="color: #532459"></i></span>
                                            @elseif($review->rating == 3)
                                                <span> <i class="fas fa-pencil-alt fa-3x"
                                                        style="color: #532459"></i></span>
                                            @endif
                                        </div>
                                        <div class="post-author">
                                            <p><span>{{ $review->username }} -</span> {{ $review->created_at }}</p>
                                        </div>
                                        <p>{{ $review->comments }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <form action="/reviews/create" method="POST" class="review-form">
                            @csrf
                            @method('POST')
                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label"><span class="text-danger">*</span>
                                        Your Name</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label"><span class="text-danger">*</span>
                                        Your Review</label>
                                    <textarea name="comments" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label"><span class="text-danger">*</span>
                                        Rating</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <label class="material-icons-outlined">
                                        <input type="radio" value="1" name="rating">
                                    </label>
                                    &nbsp;
                                    <label class="fas fa-hanukiah fa-2x">
                                        <input type="radio" value="2" name="rating">
                                    </label>
                                    &nbsp;
                                    <label class="fas fa-pencil-alt fa-2x"></label>
                                    <input type="radio" value="3" name="rating">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="buttons">
                                <button name="memorial_id" value={{ $data->id }} class="sqr-btn btn__primary"
                                    type="submit">Submit</button>
                            </div>
                        </form> <!-- end of review-form -->
                    </div>
                    <div class="tab-pane fade" id="tab_four">
                        <div class="d-flex flex-wrap">
                            @foreach ($data->memorialImages as $photos)
                                <img style="margin-right: 25px; margin-top: 5px"
                                    src="{{ url('storage/images/' . $photos->title) }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details reviews end -->
