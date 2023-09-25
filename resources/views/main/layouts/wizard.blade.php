<style>
    #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }
  
  /* Style the input fields */
  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }
  
  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }
  
  /* Hide all steps by default: */
  .tab {
    display: none;
  }
  
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 40px;
    width: 40px;
    margin: 0 2px;
    background: #2eabcc ;
    border: none;
    border-radius: 10px;
    display: inline-block;
    opacity: 0.6;
  }
  .step svg{
      display: none;
  }
  
  /* Mark the active step: */

  .step {
    opacity: 1;
    background-color: #f1faff;
  }
  .step svg {
    display: none;
  }
  .step h1 {
    opacity: 1;
    color: #009ef7 ;
  }


  .step.active {
    opacity: 1;
    background-color: #009ef7;
  }
  .step.active svg {
    display: none;
  }
  .step.active h1 {
    opacity: 1;
    color: #fff;
  }




.step.finish {
    opacity: 1;
    background-color: #f1faff;
  }
  .step.finish svg {
    display: block;
    fill: #009ef7;
  }
  .step.finish h1 {
    display: none;
  }
  



  /* Mark the steps that are finished and valid: */
 
  .finish svg{
      fill: #fff;
      display: block;
    margin: 0 auto;
    margin-top: 7px;
    width: 27px;
    height: auto;


  }
  .step h1{
    font-size: 18px;
    text-align: center;
    margin-top: 6.5px;
  }
  .finish h1{
      display: none;
  }
  .steps{
      width: max-content;
      display: inline-grid;
  }
  .step{
      margin-bottom: 20px;
  }

  .next-wizard{
      background-color: #009ef7;
      color: #fff;
      padding: 5px 15px;
      float: right;
      border-radius: 10px;
  }
  .next-wizard:hover{
      background-color: #009ef7;
      color: #fff;
      padding: 5px 15px;
      
  }
  .prev-wizard{
      background-color: #009ef7;
      color: #fff;
      padding: 5px 15px;
      border-radius: 10px;
  }
  .prev-wizard:hover{
      background-color: #009ef7;
      color: #fff;
      padding: 5px 15px;
  }
  .tab h5{
      text-align: center;
      font-size: 25px;
      background-color: #2eabcc;
  }
  .step-item h5{
      font-size: 16px;
      color: #7e8299;
      margin-left: 5px;
      margin-top: 5px;
  }
  .wizard-tutor{
      display: flex;
      margin-bottom: 30px;
  }
  .sagani-label img{
      width: 60px;
      height: 60px;
      border-radius: 10px;
  }

  .wizard-radio{
      display: none;
  }
  .wizard-radio:checked +label >img{
    filter: blur(1px);
  -webkit-filter: blur(1px);
  }
  .radio-box{
      margin-left: 9px;
      margin-right: 9px;
      margin-bottom: 20px;
  }
  .sagani-wizard{
      display: block;
      flex-wrap:wrap ;
  }
  .wizard-tutor{
      width: 500px;
  }
  .tab{
      margin-left: 30px;
  }
  #regForm{
      width: max-content;
  }
  .hr-modal{
    height: 100px;
    width: 1px;
    z-index: 1;
    border-right: 1px dashed #bec7cc;
    position: absolute;
    height: 200px;
    margin-left: 22px;
  }
  .step-item{
    z-index: 2;
  }
  .slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 25px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #04AA6D; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #04AA6D; /* Green background */
  cursor: pointer; /* Cursor on hover */
}
.flex{
  display: flex ;
}
.block{
  display: block !important;
}
</style>

<script>

  
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "flex";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "ძებნა";
  } else {
    document.getElementById("nextBtn").innerHTML = "შემდეგი";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>