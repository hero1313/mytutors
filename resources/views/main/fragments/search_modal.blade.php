<div class="modal fade" id="search-tutor" tabindex="-1" role="dialog" aria-labelledby="search-tutor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-second" role="document">
    
    <div class="modal-content search-modal-content">
       <form id="regForm" action="/search">
       <h5 class="s_search">რეპეტიტორის ძებნა</h5>
        <div class="wizard-tutor">
          <div  class=" steps">
              <div class="hr-modal"></div>
                <div class="step-item flex">
                  <span class="step">
                    <h1>1</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                  </span>
                  <h5>რეპეტიტორი</h5>
                </div>
                <div class="step-item flex">
                  <span class="step">
                    <h1>2</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                  </span>
                  <h5>ფორმატი</h5>
                </div>
                <div class="step-item flex">
                  <span class="step">
                    <h1>3</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                  </span>
                  <h5>ეტაპი</h5>
                </div>
                <div class="step-item flex">
                  <span class="step">
                    <h1>4</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                  </span>
                  <h5>პირობები</h5>
                </div>
          </div>
          <div>
            <!-- step 1  ფინიშ-->
            <div class=" tab sagani-wizard  ">
              <!-- საგანი -->
                  <div class="item">
                    <h2 class="titles">სასკოლო საგანი</h2>
                    <select class="wizard-select" name="school-subject" class="form-select form-select-lg mb-3 wizard-select" aria-label=".form-select-lg example">
                      <option value="">აირჩიე საგანი</option>
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
              <!-- გამოცდილება -->
                  <div class="item">
                      <h2 class="titles">გამოცდილება</h2>
                      <select class="form-select form-select-lg  wizard-select"  name="experience" aria-label=".form-select-lg example">
                        <option value="">გამოცდილება</option>
                        <option value="0">გამოცდილების გარეშე</option>
                        <option value="5">5 წლამდე</option>
                        <option value="10">10 წლამდე</option>
                      </select>
                  </div>
                  <!-- სერთიფიკატი -->
                  <div class="item">
                      <h2 class="titles">სერთიფიკატი</h2>
                      <div class="flex rese">
                        <label for="school-level-1" class="input-label flex" for="html">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                            <div>
                                <h3>სერთიფიცირებული</h3>
                                <h6>რეპეტიტორს გავლილი აქვს სერთიფიცირება</h6>
                            </div>
                        </label>
                        <input id="school-level-1" type="radio" id="html" name="certified" value="სერთიფიცირებული">
                      </div>
                  </div>
              </div>
            <!-- step 2 ფინიშ -->
            <div class="tab">
              <div>
                <!-- ფასი -->
                  <div class="form-group">
                    <label class="form-label" for="exampleFormControlSelect1">მაქსიმალური ფასი</label>
                    <div class="number input-numbers flex counter">
                      <span class="minus minus1">-</span>
                      <input type="text" name="max-price"  value="0"/>
                      <span class="plus plus1">+</span>
                    </div>
                  </div>
                  <!-- ფორმატი -->
                  <div class="item">
                      <h2 class="titles">კურსის ფორმატი</h2>
                      <div class="flex rese">
                          <label for="school-level-1" class="input-label flex" for="html">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                            <div>
                                <h3>დისტანციური</h3>
                                <h6>გაკვეთილები ჩატარდება ონლაინ რეჟიმში</h6>
                            </div>
                          </label>
                          <input id="school-level-1" type="radio" id="html" name="lesson-format" value="დისტანციურად">
                      </div>
                      <div class="flex rese">
                        <label for="school-level-1" class="input-label flex" for="html">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                          <div>
                              <h3>ფიზიკური</h3>
                              <h6>გაკვეთილები ჩატარდება ფიზიკურად</h6>
                          </div>
                        </label>
                        <input id="school-level-1" type="radio" id="html" name="lesson-format" value="ფიზიკურად">
                      </div>
                  </div>
              </div>
            </div>
            <!-- step 3 ფინიშ -->
            <div class="tab">
              <!-- ეტაპი -->
                <div class="item">
                    <h2 class="titles">სასკოლო ეტაპი</h2>
                    <div class="flex rese">
                      <label for="school-level-1" class="input-label flex" for="html">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                        <div>
                            <h3>დაწყებითი ეტაპი</h3>
                            <h6>მოსწავლეები 1-5 კლასამდე</h6>
                        </div>
                      </label>
                      <input id="school-level-1" type="radio" id="html" name="school-level" value="დაწყებითი">
                    </div>

                    <div class="flex rese">
                      <label for="school-level-2" class="input-label flex" for="html">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                        <div>
                            <h3>საშუალო ეტაპი</h3>
                            <h6>მოსწავლეები 5-9 კლასამდე</h6>
                        </div>
                      </label>
                      <input id="school-level-2" type="radio" id="html" name="school-level" value="საშუალო">
                    </div>

                    <div class="flex rese">
                      <label for="school-level-3" class="input-label flex" for="html">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                        <div>
                            <h3>დამამთავრებელი ეტაპი</h3>
                            <h6>მოსწავლეები 9-12 კლასამდე</h6>
                        </div>
                      </label>
                      <input id="school-level-3" type="radio" id="html" name="school-level" value="დამამთავრებელი">
                    </div>
                    
                    <div class="flex rese">
                      <label for="school-level-3" class="input-label flex" for="html">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREMKnzGvSZ-XFINMfYHQhlR0VGyzqZg41nTA&usqp=CAU" alt="">
                        <div>
                            <h3>სრული ეტაპი</h3>
                            <h6>მოსწავლეები 1-12 კლასამდე</h6>
                        </div>
                      </label>
                      <input id="school-level-3" type="radio" id="html" name="school-level" value="სრული">
                    </div>
                </div>   
            </div>
            <!-- step 4 -->
            <div class="tab">
              <div>
                <!-- დღეები -->
                <div class="item">
                  <h2 class="titles">დღეების რაოდენობა</h2>
                  <div class="range-wrap">
                    <input min="1" max="7" value="2" name="homework-days" type="range" class="range">
                    <output class="bubble"></output>
                  </div>
                </div>
                <!-- ხანგრძლივობა -->
                <div class="item">
                  <div class="form-group">
                    <label class="form-label" for="exampleFormControlSelect1">ხანგრძლივობა (წუთი)</label>
                    <div class="number input-numbers flex counter">
                      <span class="minus minus1">-</span>
                      <input type="text"  name="lesson-hours" value="0"/>
                      <span class="plus plus1">+</span>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        
      </div>
      <div style="overflow:auto;">
          <button type="button" class="btn prev-wizard" id="prevBtn" onclick="nextPrev(-1)">დაბრუნება</button>
          <button type="button" class="btn next-wizard" id="nextBtn" onclick="nextPrev(1)">შემდეგი</button>
      </div>
</form>
    </div>
  </div>
</div>

<script>
  const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 1;
  const max = range.max ? range.max : 7;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}
</script>