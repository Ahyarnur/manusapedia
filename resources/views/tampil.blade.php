@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
        <div class="col-md-4 mt-4">
            
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center fw-bold">
                     {{ Auth::user()->name }}
                        <div class="dropdown">
                            <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></span>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/sunting">Sunting</a></li>
                              <li><a class="dropdown-item" href="/delete/{{$post->id}}">Hapus</a></li>
                            </ul>
                        </div>
                    </div>
                    @if($post->image)
                    @if(Str::contains($post->image, ['.mp4', '.m4v']))
                            <video src="{{ asset($post->image) }}" class="card-img-top" controls style="width: auto; height: 10cm;">
                                Your browser does not support the video tag.
                            </video>
                        @else
                            <img src="{{ asset($post->image) }}" class="card-img-top" alt="..." style="width: auto; height: 10cm;">
                    @endif
                @endif
                        <div class="card-body">
                      <h5 class="fw-bold">{{ $post->title }}</h5>
                      <p>{{ $post->caption }}</p>
                    
                      <p></p>
                      <p>Diposting {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y')}}
                        <span> oleh</span> {{ Auth::user()->name }} </p>

                    </div>
                </div>
            </div>
        
            @endforeach
    </div>
</div>
@endsection