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

    <div class="d-flex flex-column mx-3 notif-container">
        <div class="title mb-4">
            <span class="text-start fw-bold fs-3">Notifications</span>
        </div>



        <!-- Notif loop here -->
        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>

        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>

        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>
        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>
        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>
        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>
        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>
        <div class="notif d-flex ms-2 mb-3">
            <div class="profile-picture-container">
                <img src="{{ asset("img/person_1.jpg") }}" alt="person" class="profile-picture rounded-circle">
            </div>
            <div>
                <p class="person-name">Cameron</p>
                <p class="notif-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad fuga ex dolorum repellendus mollitia.</p>
            </div>
        </div>
    
    </div>

</div>

@endsection