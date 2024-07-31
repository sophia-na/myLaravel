@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}"></a>
                 <img src="/storage/{{$post->image}}" class="w-100">
            </div>
        </div>    
            <div class="row pt-2 pb-2">
             <div class='col-6 offset-3'>
                <div>
                <div class="d-flex align-item:center">
                <div class="pr-3">
                 <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:40px; max-height:40px" >
                 </div>  
               <div>
               <div class="font-weight-bold">
                            <!-- <a href="/profile/{{ $post->user->id }}"> -->
                                <!-- <span class="text-dark">{{ $post->user->username }}</span> -->
                            </a>
                            <!-- <a href="#" class="pl-3">Follow</a> -->
                            <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                          </p>
                </div>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-12 d-flex justify-content-center">{{$posts->links()}}</div>
                  </div>
               </div>  
             </div>
        </div>
        @endforeach
   </div>
@endsection
