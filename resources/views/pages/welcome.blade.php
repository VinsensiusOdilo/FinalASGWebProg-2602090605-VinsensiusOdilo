@extends("layout.master")

@section("content")

<div class="container justify-content-center d-flex mt-5">

    <div class="my-profile justify-content-center align-items-top">
        <img src="{{ asset("img/profile-pic.png") }}" class="my-profile-pic" alt="">
        <p class="text-center my-name">Nameless User</p>
        <p class="text-center my-job">Frontend Developer</p>
        <p class="text-center my-loc">City, Country</p>
        <a class="text-center nav-link mt-5" href="">My Network</a>
        <a class="text-center nav-link" href="">Notification</a>
    </div>

    <div class="d-flex flex-column mx-3">
       
        @foreach ($post as $p)
        
            <div class="card mb-5">
                
                <div class="card-header">
                    {{ $p->topic }}
                </div>
                <div class="card-body d-flex ms-3">
                    <div class="profile-picture-container">
                        <img src="{{ asset("img/" . $p->user->img_path ) }}" alt="person" class="profile-picture rounded-circle">
                    </div>
                    <div>
                        <p class="person-name">{{ $p->user->name }}</p>
                        <p class="person-title">{{ $p->user->job }}</p>
                    </div>
                </div>

                <div class="content-container">
                    {{ $p->content }}
                </div>

                <div class="action-container">
                    <span class="btn like-btn">Like ({{$p->like}})</span>
                </div>

                
            </div>

        @endforeach

    </div>

</div>

@endsection