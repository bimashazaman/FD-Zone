@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3 ">
                <img src="https://scontent.fdac99-1.fna.fbcdn.net/v/t1.6435-9/88248259_524282928489920_464711973913755648_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=a4a2d7&_nc_ohc=koiKcwseAt8AX_jz4Sc&tn=04ulz3onMWL83PUl&_nc_ht=scontent.fdac99-1.fna&oh=1509013645e28cafbac3c5a2dacac1d1&oe=60E7F30D " class="rounded-circle" width="150">
            </div>
                <div class="col-9 pt-2">
            <div class="">
                <div class="d-flex justify-content-between align-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p" class="font-weight-bold">Add new</a>
                    <a href="/profile/{{$user->id}}/edit" class="font-weight-bold">Edit Profile</a>
                  </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong>  posts</div>
                    <div class="pr-5"><strong>100M</strong>  followers</div>
                    <div class="pr-5"><strong>0</strong>  following</div>


                </div>
                <div class="pt-4 font-weight-bold">
                    <div >
                    <b>@if($user->title =! null)
                        <a>Add a title</a>
                        @else(){{{$user->profile->title}}}
                        @endif</b>
                    </div>

                        <div>
                            @if($user->description =! null)
                            <a>Add description</a>
                            @else(){{$user->profile->description}}
                            @endif
                        </div>
                <div> @if($user->url =! null)
                    <a>Add url</a>
                    @else(){{$user->profile->url}}
                    @endif</div>

                 </div>
                     </div>

            <div class="row pt-5">
                @foreach($user->posts as $posts)
                    <div class="col-4 pb-4">
                        <a href="/p/{{$posts->id}}"><img src="/storage/{{$posts->image}}" class="w-100"></a>
                    </div>
                @endforeach

                </div>

            </div>
                        </div>

    </div>





@endsection
