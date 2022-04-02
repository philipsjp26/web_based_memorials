@extends('layouts.home')

@section('content')
    <div class=" bg-img" data-bg={{ asset('img/background/main_background.webp') }}>
        <div class="login-register-wrapper section-space">
            <div class="container" style="width: 40%">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="login-reg-form-wrap">
                            <h2>Create</h2>
                            <form action="/memorial/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            First Name</label>
                                        <input name="first_name" type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label">
                                            Middle Name</label>
                                        <input name="middle_name" type="text" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Last Name</label>
                                        <input name="last_name" type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            NIK ( Nomor Induk Kependudukan )</label>
                                        <input name="nik" type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Gender</label>
                                        &nbsp;
                                        <input type="radio" name="gender" value="Male">
                                        <label for="gender">Male</label>
                                        &nbsp;
                                        <input type="radio" name="gender" value="Female">
                                        <label for="gender">Female</label>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col d-flex flex-nowrap">
                                        <label class="col-form-label" style="padding-right: 41px"><span
                                                class="text-danger">*</span>
                                            Relationship</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <select class="dropdown-relationship" name="relationship" id="cars">
                                            @foreach ($relationship as $rel)
                                                <option value="{{ $rel->id }}">{{ $rel->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col d-flex flex-nowrap">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Memorial Category</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <select name="memorial_category" id="memorials">
                                            @foreach ($category as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Date Of Birth</label>
                                        <input name="date_of_birth" type="text" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Date of Death</label>
                                        <input name="date_of_death" type="text" class="form-control" placeholder="yyyy-mm-dd" autocomplete="off"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Images</label>
                                        <input type="file" name="image" class="form-control" required multiple>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>Address</label>
                                        <textarea name="alamat"cols="73" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="sqr-btn btn-hero" type="submit">Submit</button>
                                </div>
                            </form> <!-- end of review-form -->
                        </div>
                        <!-- Login Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
