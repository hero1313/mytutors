@include('main.layouts.head')
<body id="body" style="overflow: hidden;">
<div class="cover">
     @include('main.layouts.header')
</div>
        </div>
<form action="{{ url('profile/edit_post/my_id/'.Auth::user()->id)}}" enctype='multipart/form-data' method="post">
    @csrf
    @method('PUT') 
    <div class="container edit-container">
        <div class="row edit-first-row">
            <div class=" col-12  col-md-5 col-lg-4 head-col">
                <section class="head-profile">
                    <h4>ინფორმაცია</h4>
                    <img src="../img/{{Auth::user()->photo}}" alt="">
                    <div class="input-profile-photo">
                        <button class="btn">
                            <input type="file" name="photo" value="{{Auth::user()->Certified_file}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                            </svg>
                        </button>
                    </div>
                    <h5>{{Auth::user()->name}} {{Auth::user()->lastname}}</h5>
                    <h6>{{Auth::user()->Certified}}</h6>
                    <h5 class="subjact-h5">{{Auth::user()->school_subject}}</h5>
                    <button class="btn btn-main">ნახე როგორც სტუმარმა</button>
                </section>
            </div>
            <div class=" col-12 col-md-7 col-lg-8 edit-info-col container">
                <div class="row">
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" >სახელი</label>
                        <input  class="form-control triangle-input"  type="text" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">გვარი</label>
                        <input  class="form-control triangle-input" type="text"  name="lastname" value="{{Auth::user()->lastname}}">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">ელ.ფოსტა</label>
                        <input  class="form-control triangle-input" type="email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">მობ.ნომერი</label>
                        <input class="form-control triangle-input" name="number" class="form-control" value="{{Auth::user()->number}}">
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">სტატუსი</label>
                        <select class="form-control triangle-input triangle-select" name="user_status" aria-label="Default select example">
                            <option value="რეპეტიტორი">რეპეტიტორი</option>
                            <option value="მოსწავლე">მოსწავლე</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">სერთიფიცირება</label>
                        <select class="form-control triangle-input triangle-select" name="Certified">
                            <option value="{{Auth::user()->Certified}}">{{Auth::user()->Certified}}</option>
                            <option value="სერთიფიცირებული">სერთიფიცირებული</option>
                            <option value="არასერთიფიცირებული">არასერთიფიცირებული</option>
                        </select>
                        <div class="certificate-input">
                            <input type="file" name="Certified_file" placeholder="სერთიფიკატი" value="{{Auth::user()->Certified_file}}">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#21acd6" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                </svg>
                                <h6>სერთიფიკატის ატვირთვა</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class=" col-12  col-md-5 col-lg-4  pl-0 proce">
                <section class="sub-info">
                    <div class="form-group col-12 ">
                        <label class="triangle_label"  for="email_modal">პროფესია</label>
                        <input class="form-control triangle-input" name="school_status" placeholder="მაგ: პედაგოგი" class="form-control" value="{{Auth::user()->school_status}}">
                    </div>
                    <div class="form-group col-12 ">
                        <label class="triangle_label" for="email_modal">ქალაქი</label>
                        <input  class="form-control triangle-input" type="text" name="country" value="{{Auth::user()->country}}">
                    </div>
                    <div class="form-group col-12 ">
                        <label class="triangle_label" for="email_modal">რეპეტიტორული გამოცდილება</label>
                        <input class="form-control triangle-input" placeholder="წელი"  type="number" name="experience" value="{{Auth::user()->experience}}">
                    </div>


                </section>
            </div>
            <div class=" col-12 col-md-7 col-lg-8   ">
                <div class="row sub-info">
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">სასკოლო ეტაპი</label>
                        <select class="form-control triangle-input triangle-select" name="school_level">
                            <option value="{{Auth::user()->school_level}}">{{Auth::user()->school_level}}</option>
                            <option value="დაწყებითი">დაწყებითი</option>
                            <option value="საშუალო">საშუალო</option>
                            <option value="დამამთავრებელი">დამამთავრებელი</option>
                            <option value="სრული">სრული</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">საგანი</label>
                        <select class="form-control triangle-input triangle-select" name="school_subject" aria-label="Default select example">
                            <option value="{{Auth::user()->school_subject}}">{{Auth::user()->school_subject}}</option>
                            <option value="ინგლისური">ინგლისური</option>
                            <option value="მათემატიკა">მათემატიკა</option>
                            <option value="ქართული">ქართული</option>
                            <option value="ისტორია">ისტორია</option>
                            <option value="ბიოლოგია">ბიოლოგია</option>
                            <option value="ქიმია">ქიმია</option>
                            <option value="ფიზიკა">ფიზიკა</option>
                            <option value="გეოგრაფია">გეოგრაფია</option>
                            <option value="ხელოვნება">ხელოვნება</option>
                            <option value="სამოქალაქო">სამოქალაქო</option>
                            <option value="რუსული">რუსული</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">კურსის ღირებულება</label>
                        <input  class="form-control triangle-input" name="price" type="number"  value="{{Auth::user()->price}}" >
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">გაკვეთილის ფორმატი</label>
                        <select class="form-control triangle-input triangle-select" name="homework_address">
                            <option value="{{Auth::user()->homework_address}}">{{Auth::user()->homework_address}}</option>
                            <option value="დისტანციურად">დისტანციურად</option>
                            <option value="ადგილზე მისვლით">ფიზიკურად</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">გაკვეთილის ხანგრძლივობა</label>
                        <input  class="form-control triangle-input" placeholder="წუთი" name="hours" type="number"  value="{{Auth::user()->hours}}" >
                    </div>
                    <div class="form-group col-12 col-sm-6">
                        <label class="triangle_label" for="email_modal">დღეების რაოდენობა</label>
                        <input  class="form-control triangle-input" name="number_days" type="number"  value="{{Auth::user()->number_days}}" >
                    </div>
                    <div class="form-group col-12">
                        <label class="triangle_label mt-3" for="email_modal">დამატებითი ინფორმაცია</label>
                        <textarea class="blue-textarea" cols="30" rows="7" id="w3review" name="description" rows="4" >{{Auth::user()->description}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="center mt-4"><button class="btn btn-main mt-4">განახლება</button></div>

    </div>
</form>



@include('main.layouts.footer')
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
<script src="js/index.js"></script>
</body>
</html>