@include('main.layouts.head')
<body id="body" style="overflow: hidden; background:#f5f4f9;">
    <div class="cover">
            @include('main.layouts.header')
    </div>
    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-4 col-lg-3 profile-content prf">
                    <div class="photo-div">
                    <img class="photo" src="../img/{{$user->photo}}"  alt="">
                    </div>
                        <h5 class="name center">
                        {{$user->name}}
                        </h5>
                        <h6 class='certified center'>
                        {{$user->Certified}}
                        </h6>
                        <div class="row">
                        <div class="col-4  pre ">
                                <p> საგანი</p>
                        </div>
                        <div class="col-8 val ">
                                <p>{{$user->school_subject}}</p>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-4  pre">
                                <p>სტატუსი</p>
                        </div>
                        <div class="col-8 val ">
                                <p>{{$user->school_status}}</p>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-4  pre">
                                <p>ეტაპი</p>
                        </div>
                        <div class="col-8 val ">
                                <p>{{$user->school_level}}</p>
                        </div>
                        </div>
                        <div class="row">
                        <div  class="col-12 mt-3 " style="text-align:center;">
                            <button class="btn btn-reservation  w-100" data-toggle="modal" data-target="#reservation_{{$user->id}}">დაჯავშნა</button>

                        </div>
                        </div>
                    </div>

            
            <div class="col-md-8 col-lg-9 desc-prf">
                <div class="profile-head">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" onclick="info1()" id="info_1" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">ინფორმაცია</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" onclick="info2()" id="info_2" data-toggle="tab"  role="tab" aria-controls="profile" aria-selected="false">პირობები</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content profile-tab" id="content-1">                                      
                        <div class="row">
                            <div class="row col-md-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>სახელი</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->name}}</p>
                                </div>
                            </div>
                            <div class="row col-md-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>სტატუსი</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->school_status}}</p>
                                </div>
                            </div>
                            <div class="row col-md-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>საგანი</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->school_subject}}</p>
                                </div>
                            </div>
                            <div class="row col-lg-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>ფასი</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->price}} ლარი</p>
                                </div>
                            </div>
                            <div class="row col-lg-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>დღეები</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->number_days}} დღე / კვირაში</p>
                                </div>
                            </div>
                            <div class="row col-lg-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>ხანგრძლივობა</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->hours}} წუთი</p>
                                </div>
                            </div>
                            <div class="row col-lg-6 col-12">
                                <div class="col-6 desc_title">
                                    <label>ფორმატი</label>
                                </div>
                                <div class="col-6 desc_text">
                                    <p>{{$user->homework_address}}</p>
                                </div>
                            </div>

                            <div class="row col-md-12 col-12">
                                <br>
                                <hr>
                                <div class="col-md-12 desc_title center description">
                                    <label>დამატებითი ინფორმაცია</label>
                                </div>
                                <div class="col-md-12 desc_text description-text center">
                                    <p>{{$user->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab-content profile-tab" id="content-2">                                      
                        <div class="row">      
                            <div class="row col-12">
                                <br>
                                <hr>
                                <div class="col-md-12 desc_title center description">
                                    <label>აღწერა</label>
                                </div>
                                <div class="col-md-12 desc_text description-text center">
                                    <p>{{$users->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>    
            </div>
        </div>
    </div>
    @include('main.layouts.footer')
    @include('main.fragments.reservation_modal')
    <script>
        var content1 = document.getElementById("content-1")
        var content2 = document.getElementById("content-2")
        var content3 = document.getElementById("content-3")
        var content4 = document.getElementById("content-4")
        var content5 = document.getElementById("content-5")
            content2.style.display="none";
            content3.style.display="none";
            content4.style.display="none";
            content5.style.display="none";
        function info1() {
            content1.style.display="block";
            content2.style.display="none";
            content3.style.display="none";
            content4.style.display="none";
            content5.style.display="none";
        }
        function info2() {
            content1.style.display="none";
            content2.style.display="block";
            content3.style.display="none";
            content4.style.display="none";
            content5.style.display="none";
        }
        function info3() {
            content1.style.display="none";
            content2.style.display="none";
            content3.style.display="block";
            content4.style.display="none";
            content5.style.display="none";
        }
        function info4() {
            content1.style.display="none";
            content2.style.display="none";
            content3.style.display="none";
            content4.style.display="block";
            content5.style.display="none";
        }
        function info5() {
            content1.style.display="none";
            content2.style.display="none";
            content3.style.display="none";
            content4.style.display="none";
            content5.style.display="block";
        }
    </script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="js/index.js"></script>
</body>
</html>