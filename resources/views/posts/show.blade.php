@extends('layouts.app')

@section('content')


    <div class="container">
     <div class="row">
         <div class="col-8">
             <div class="card-body d-flex">
                 <div class="card">
                     <img  src="/storage/{{ $post->image }}" class="w-100">
                 </div>
                 <div class="col-4">
                     <div>
                         <h3><STRONG>{{$post->user->username}}</STRONG></h3>
                         <p>{{$post->caption}}</p>
                     </div>
                 </div>
             </div>
         </div>

     </div>

















    </div>











@endsection
