@extends('main.index')
@section('content')
<style>
    .headers{
        background: rgb(53 153 183)  !important;
    }
</style>
<div style="display: flex" class="flex search-list">
    <div class="vertical-div">
        <div class="vertical-filter">
            <form action="/search">
                <div class="form-group serches">
                    <input type="search" class="form-control vertical-searchs" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="მოძებნე">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
                <!-- საგანი -->
                <div class="form-group vertical-select">
                    <label for="exampleFormControlSelect1">სასკოლო საგანი</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="school-subject">
                        <option value>საგანი</option>
                        <option value="ინგლისური">ინგლისური</option>
                        <option value="მათემატიკა">მათემატიკა</option>
                        <option value="ისტორია">ისტორია</option>
                        <option value="ქართული">ქართული</option>
                        <option value="ბიოლოგია">ბიოლოგია</option>
                        <option value="ფიზიკა">ფიზიკა</option>
                        <option value="ქიმია">ქიმია</option>
                        <option value="გეოგრაფია">გეოგრაფია</option>
                        <option value="სამოქალაქო">სამოქალაქო</option>
                        <option value="ხელოვნება">ხელოვნება</option>
                        <option value="რუსული">რუსული</option>
                    </select>
                </div>
                <!-- სასკოლო ეტაპი -->
                <div class="form-group">
                    <label class="form-label" for="exampleFormControlSelect1">სასკოლო ეტაპი</label>
                    <div class="vertical-radio">
                        <div class="form-check radio-flex-item">
                        <input class="form-check-input check-input" type="radio"  value="დაწყებით" name="school-level" id="flexRadioDefault2" >
                        <label class="form-check-label check-label" for="flexRadioDefault2">
                            1-5
                        </label>
                        </div>
                        <div class="form-check radio-flex-item">
                        <input class="form-check-input check-input" type="radio"  value="საშუალო"  name="school-level" id="flexRadioDefault2" >
                        <label class="form-check-label check-label" for="flexRadioDefault2">
                            5-9
                        </label>
                        </div>
                        <div class="form-check radio-flex-item">
                        <input class="form-check-input check-input" type="radio"  value="დამამთავრებელი" name="school-level"id="flexRadioDefault2" >
                        <label class="form-check-label check-label" for="flexRadioDefault2">
                            9-12
                        </label>
                        </div>
                    </div>
                </div>
                <!-- გამოცდილება -->
                <div class="form-group vertical-select">
                    <label for="exampleFormControlSelect1">გამოცდილება</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="experience">
                        <option value>გამოცდილება</option>
                        <option value="0">გამოცდილების გარეშე</option>
                        <option value="5">5 წლამდე</option>
                        <option value="10">10 წლამდე</option>
                    </select>
                </div>
                <!-- დღეები -->
                <div class="form-group vertical-select">
                    <label for="exampleFormControlSelect1">დღეების რაოდენობა</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="homework-days">
                        <option value>დღე</option>
                        <option value="1">1 დღე</option>
                        <option value="2">2 დღე</option>
                        <option value="3">3 დღე</option>
                        <option value="4">4 დღე</option>
                        <option value="5">5 დღე</option>
                        <option value="6">6 დღე</option>
                        <option value="7">7 დღე</option>
                    </select>
                </div>
                <!-- ხანგრძლივობა -->
                <div class="form-group">
                    <label class="form-label" for="exampleFormControlSelect1">ხანგრძლივობა (წუთი)</label>
                    <div class="number flex counter">
                        <span class="minus">-</span>
                        <input type="text"  name="lesson-hours" value="0"/>
                        <span class="plus">+</span>
                    </div>
                </div>
                <!-- გაკვეთიპის ფორმატი -->
                <div class="form-group">
                    <label class="form-label" for="exampleFormControlSelect1">ფორმატი</label>
                    <div class="form-check">
                        <input class="form-check-input input-2" type="radio" name="lesson-format" value="დისტანციურად" id="flexRadioDefault1">
                        <label class="form-check-label label-2" for="flexRadioDefault1">
                        დისტანციურად
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input-2" type="radio" value="ფიზიკურად" name="lesson-format" id="flexRadioDefault1">
                        <label class="form-check-label label-2" for="flexRadioDefault1">
                        ფიზიკური
                        </label>
                    </div>
                </div>
                <!-- მაქსიმალური ფასი -->
                <div class="form-group">
                    <label class="form-label" for="exampleFormControlSelect1">მაქსიმალური ფასი</label>
                    <div class="number flex counter">
                        <span class="minus">-</span>
                        <input type="text" name="max-price" value="0" />
                        <span class="plus">+</span>
                    </div>
                </div>
                <button class="btn btn-green-submit">გაფილტვრა</button>
            </form>
        </div>
    </div>
    <div class="cardest">
        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif
        <div class="row lister">
            @foreach($users as $user)
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3  col-12  card-col" >
                    <a href="../user/{{$user->id}}">
                        <div class="card light-shadow">
                                <div class="card-headers flex">
                                    <img src="../img/{{$user->photo}}" alt="" class="card-img">
                                    <span class="card-name">{{$user->name}}</span>
                                    <div class="card-gul">
                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/></svg>
                                    </div>
                                </div>
                                    <hr class="card-hr">
                                    <div class="card-desc flex">
                                        <h6 class="card-title">საგანი</h6>
                                        <h6 class="card-content">{{$user->school_subject}}</h6>
                                    </div>
                                    <div class="card-desc flex">
                                        <h6 class="card-title">ქალაქი</h6>
                                        <h6 class="card-content">{{$user->country}}</h6>
                                    </div>
                                </a>
                                    <div class="card-bottom flex">
                                            <button class="btn btn-reservation" data-toggle="modal" data-target="#reservation_{{$user->id}}">დაჯავშნა</button>
                                        <div class="card-price">
                                            <h6 class="price-h6">₾ {{$user->price}}</h6>
                                        </div>
                                    </div>
                        </div>        
                </div>
                @include('main.fragments.reservation_modal')
            @endforeach
        </div>
    </div>
</div>
@stop
