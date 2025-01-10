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

    <div class="friend col-8">
        <div class="friend-inv-list friend-container">
            <div class="friend-inv title">
                <span class="text-start fw-bold fs-3">Invitations</span>
            </div>
        
            <div class="d-flex flex-column mx-3 my-3">

                <div class="notif d-flex ms-2 mb-3 align-items-center">
                    <div class="profile-picture-container">
                        <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
                    </div>
                    <div class="flex-grow-1">
                        <p class="person-name">Cameron</p>
                        <p class="person-title">Senior Software Enginner</p>
                    </div>
                    <div class="acc-btn">
                        <button class="btn btn-success">Accept</button>
                        <button class="btn btn-danger">Reject</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="friend-container mt-5">
            <div class="friend-list-title title">
                <span class="text-start fw-bold fs-3">Friend List</span>
            </div>

            <div class="d-flex flex-column mx-3 my-3">
                <div class="notif d-flex ms-2 mb-3 align-items-center">
                    <div class="profile-picture-container">
                        <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
                    </div>
                    <div class="flex-grow-1">
                        <p class="person-name">Cameron</p>
                        <p class="person-title">Senior Software Enginner</p>
                    </div>

                    <div class="message-btn">
                        <button class="btn btn-primary">Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection