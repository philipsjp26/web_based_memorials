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
                        <a data-bs-toggle="tab" href="#tab_three">review</a>
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
                            <h5>1 review for <span>Chaz Kangeroo</span></h5>
                            <div class="total-reviews">
                                <div class="review-box">
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="post-author">
                                        <p><span>admin -</span> 30 Mar, 2019</p>
                                    </div>
                                    <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                        amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                        vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                        iaculis, dui congue placerat pretium, augue erat
                                        accumsan lacus</p>
                                </div>
                            </div>
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
                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                    <input type="radio" value="1" name="rating">
                                    &nbsp;
                                    <input type="radio" value="2" name="rating">
                                    &nbsp;
                                    <input type="radio" value="3" name="rating">
                                    &nbsp;
                                    <input type="radio" value="4" name="rating">
                                    &nbsp;
                                    <input type="radio" value="5" name="rating" checked>
                                    &nbsp;Good
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
                            gallery
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details reviews end -->
