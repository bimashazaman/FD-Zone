@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="card">
            <div class="pt-2 ">
                <h1 class="pl-3" >Edit profile</h1>
            </div>
            <form method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">

     @csrf


     <div class="row">

         <div class="col-8 offset-2">




             <div class="form-group row">
                 <label for="title"
                        class="col-md-4 col-form-label ">Title</label>


                 <input id="caption"
                        type="text" class="form-control  "
                        name="caption"
                        value="{{ old('title') }}"
                        required autocomplete="caption" autofocus>



                 @error('title')

                 <strong>{{ $message }}</strong>

                 @enderror

             </div>

             <div class="form-group row">
                 <label
                        class="col-md-4 col-form-label ">Description</label>


                 <input
                        type="text" class="form-control  "
                        name="Description"
                        value="{{ old('description') }}"
                        required autocomplete="caption" autofocus>



                 @error('Description')

                 <strong>{{ $message }}</strong>

                 @enderror

             </div>
             <div class="form-group row">
                 <label
                     class="col-md-4 col-form-label ">URL</label>

             <input
                 type="text" class="form-control  "
                 name="url"
                 value="{{ old('url') }}"
                 required autocomplete="url" autofocus>



             @error('url')

             <strong>{{ $message }}</strong>

             @enderror

         </div>

             <div class="row p-4">
                 <label for="image"
                        class="col-md-4 col-form-label justify-content-between font-weight-bold">Profile Image</label>
                 <input type="file" class="form-control-file" id="image" name="image">

                 @error('image')

                 <strong>{{ $message }}</strong>

                 @enderror

             </div>

             <div class="d-flex p-4">
                 <button class="btn btn-primary ">Save</button>
             </div>







         </div>

     </div>
 </form>
</div>















</div>











@endsection

