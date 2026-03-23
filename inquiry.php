<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name  = isset($_POST['name'])  ? trim($_POST['name'])  : "";
$email = isset($_POST['email']) ? trim($_POST['email']) : "";
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";

if($name=="" || $phone==""){
    echo "required";
    exit;
}

$check = pg_query_params(
$conn,
"SELECT * FROM inquiries WHERE phone=$1 OR email=$2",
array($phone,$email)
);

if(pg_num_rows($check) > 0){
    echo "duplicate";
    exit;
}

$insert = pg_query_params(
$conn,
"INSERT INTO inquiries(name,email,phone) VALUES($1,$2,$3)",
array($name,$email,$phone)
);

if($insert){
    echo "success";
}else{
    echo "error";
}

exit;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
font-family:'Poppins',sans-serif;
}
.heading{
font-family:'Playfair Display',serif;
}
</style>

<title>Inquiry Form</title>
</head>

<body class="bg-[#eae6df] flex items-center justify-center min-h-screen p-4">

<div class="relative w-full max-w-md bg-[#f4f1ec] rounded-2xl shadow-2xl p-6 sm:p-8">

<button 
onclick="closeForm()" 
class="absolute top-3 right-4 text-xl text-gray-500 hover:text-black hover:scale-110 transition">
✕
</button>

<!-- LOGO -->
<img src="../Guest Side/Gallery/Realty_Logo-2.png" 
class="w-16 sm:w-[70px] mb-3">


<h2 class="text-xl sm:text-2xl heading font-semibold mb-1">
Create Account
</h2>

<p class="text-sm text-gray-500 mb-6">
Join Rukmani Realty and list your property easily
</p>

<form id="inquiryForm" method="POST" action="inquiry.php">

<div>
<label class="text-sm font-medium">Full Name</label>

<input
id="name"
name="name"
type="text"
placeholder="Enter your name"
class="w-full mt-1 p-2 border rounded-md text-sm"
>

<p id="nameError" class="text-red-500 text-xs mt-1 hidden"></p>

</div>

<div>

<label class="text-sm font-medium">Email</label>

<input
id="email"
name="email"
type="email"
placeholder="Enter email"
class="w-full mt-1 p-2 border rounded-md text-sm"
>

</div>

<div>

<label class="text-sm font-medium">Phone</label>

<input
id="phone"
name="phone"
type="text"
placeholder="Enter phone number"
class="w-full mt-1 p-2 border rounded-md text-sm"
>

<p id="phoneError" class="text-red-500 text-xs mt-1 hidden"></p>

</div>

<button
type="submit"
class="w-full py-2.5 mt-4 bg-[#b08a57] text-white rounded-lg"
>
Inquiry Now
</button>

</form>

</div>


<!-- POPUP -->

<div id="popup" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center">

<div class="bg-white rounded-xl p-6 text-center w-[90%] max-w-sm">

<h3 class="text-lg font-semibold mb-2">
Thank You
</h3>

<p id="popupText" class="text-gray-600 text-sm mb-4"></p>

<button onclick="closePopup()" class="px-5 py-2 bg-[#b08a57] text-white rounded-lg">
OK
</button>

</div>

</div>


<script>

const form = document.getElementById("inquiryForm")

form.addEventListener("submit",function(e){

e.preventDefault()

let name = document.getElementById("name").value.trim()
let email = document.getElementById("email").value.trim()
let phone = document.getElementById("phone").value.trim()

let nameError = document.getElementById("nameError")
let phoneError = document.getElementById("phoneError")

let valid = true

nameError.classList.add("hidden")
phoneError.classList.add("hidden")

if(name === ""){
nameError.innerText="Fill this field"
nameError.classList.remove("hidden")
valid=false
}

if(phone === ""){
phoneError.innerText="Fill this field"
phoneError.classList.remove("hidden")
valid=false
}

if(!/^[0-9]{10}$/.test(phone)){
phoneError.innerText="Invalid phone"
phoneError.classList.remove("hidden")
valid=false
}

if(!valid) return

let formData = new FormData(form)

fetch("inquiry.php",{
method:"POST",
body:formData
})

.then(res => res.text())
.then(data => {

if(data === "duplicate"){
showPopup("Your inquiry already exists")
}

else if(data === "success"){
showPopup("Inquiry sent successfully")
form.reset()
}

else{
showPopup("Something went wrong")
}

})

})


function showPopup(message){

document.getElementById("popupText").innerText = message
document.getElementById("popup").classList.remove("hidden")

}

function closePopup(){

document.getElementById("popup").classList.add("hidden")

}
function closeForm(){
window.parent.closeInquiry();
}

</script>

</body>
</html>