@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="card">
            <div class="pt-2 ">
                <h1 class="">Add new post</h1>
            </div>
        <form method="POST" action="/p/store" enctype="multipart/form-data">
            @csrf
        <div class="row">

            <div class="col-8 offset-2">




                            <div class="form-group row">
                    <label for="caption"
                           class="col-md-4 col-form-label ">Caption</label>


                        <input id="caption"
                               type="text" class="form-control  "
                               name="caption"
                               value="{{ old('caption') }}"
                               required autocomplete="caption" autofocus>



                        @error('caption')

                                        <strong>{{ $message }}</strong>

                        @enderror

                </div>

                <div class="row">
                    <label for="image"
                           class="col-md-4 col-form-label justify-content-between">Upload Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')

                                        <strong>{{ $message }}</strong>

                    @enderror

                </div>

                <div class="row p-4 justify-content-center ">
                    <button class="btn btn-primary">Add new</button>
                </div>






        </div>

        </div>
        </form>
        </div>
    </div>











@endsection
