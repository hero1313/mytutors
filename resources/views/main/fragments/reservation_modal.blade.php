{{-- reservation form --}}
<div class="modal fade pr-0" id="reservation_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="reservation" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="res-close">
              <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="reservation/teacher_id/{{$user->id}}" method="POST">
            @csrf
              <div class="row reservation-container">
                  <div class="reservation-form col-sm-12">
                      <div class="colest">
                          <div class="flex reservation-item">
                              <img src="../img/{{$user->photo}}" alt="">
                              <div class="teacher-info">
                                  <h4>{{$user->homework_address}}</h4>
                                  <h6>{{$user->name}}</h6>
                                  <h6>{{$user->school_subject}}</h6>
                                  <div class="flex">
                                      <div class="course-info">
                                          <h5>დღეების რაოდენობა</h5>
                                          <h4>{{$user->number_days}} დღე / კვირაში</h4>
                                      </div>
                                      <div class="course-info">
                                        <h5>ხანგრძლივობა</h5>
                                        <h4>{{$user->hours}} წუთი</h4>
                                      </div>
                                      <div class="course-info">
                                          <h5>ფასი</h5>
                                          <h4>{{$user->price}} ლარი</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="course-description">
                              <h5>
                                  საჭიროებისამებრ მიუთითეთ დამატებითი ინფორმაცია
                              </h5>
                              <textarea class="form-control"  name="desc" rows="3"></textarea>
                          </div>
                      </div>
                      
                  </div>
                  <div class="col-sm-12">
                      <div class="payment-col colest">
                          <h5 class="pay-title">გადახდის დეტალები</h5>
                          {{-- <div class="flex reservation-pay">
                              <h4>კურსის ღირებულება :</h4>
                              <h5>600 ლარი</h5>
                          </div> --}}
                          <div class="flex reservation-pay">
                              <h4>ყოველთვიური შენატანი :</h4>
                              <h5>{{$user->price}} ლარი</h5>
                          </div>
                          <div class="flex reservation-pay">
                              <h4> კურსის ხანგრძლივობა :</h4>
                              <h5>
                                <select class="form-select" name="month" aria-label="Default select example">
                                        <option value="3">3 თვე</option>
                                        <option value="6">6 თვე</option>
                                        <option value="12">12 თვე</option>
                                </select>
                              </h5>
                          </div>
                          <hr class="res-hr">
                          <div class="flex reservation-sum-pay">
                              <h4>შესატანი თანხა :</h4>
                              <h5>{{$user->price}} ლარი</h5>
                          </div>
                            {{--                                           
                          <button class="btn btn-pay btn-payment">
                              კურსის ყიდვა
                          </button> --}}
                          <button type="submit" class="btn btn-pay btn-reservation">
                              კურსის დაჯავშნა
                          </button>
                          <h5 class="res-desinfo">
                              დაჯავშნა უფასოა
                          </h5>
                      </div>
                  </div>
              </div>
          </form>
        </div>
    </div>
</div>