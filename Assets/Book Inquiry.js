const form = document.getElementById("inquiryForm");
const success = document.getElementById("successBox");

form.addEventListener("submit", e=>{
  e.preventDefault();

  // basic validation
  if(document.getElementById("phone").value.length < 10){
    alert("Enter valid mobile number");
    return;
  }

  // show popup
  success.classList.add("show");

  // reset form
  form.reset();
});

function closeSuccess(){
  success.classList.remove("show");
}
