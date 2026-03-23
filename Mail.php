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

<!-- FORM CONTAINER -->
<div class="relative w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-lg bg-[#f4f1ec] rounded-2xl shadow-2xl p-6 sm:p-8">

  <!-- Close -->
  <button onclick="history.back()" class="absolute top-3 right-4 text-xl sm:text-2xl text-gray-500 hover:text-black transition">
    ✕
  </button>

  <!-- Logo -->
  <img src="../Guest Side/Gallery/Realty_Logo-2.png" class="w-16 sm:w-20 md:w-24 mb-4 mx-auto">

  <!-- Heading -->
  <h2 class="text-xl sm:text-2xl md:text-3xl heading font-semibold mb-2 text-center">Send Mail To Us</h2>
  <p class="text-sm sm:text-base text-gray-500 mb-6 text-center">Fill the form and send your mail</p>

  <!-- FORM -->
  <form id="inquiryForm" class="space-y-4">

    <!-- NAME -->
    <div>
      <label class="text-sm sm:text-base font-medium">Full Name <span class="text-red-500">*</span></label>
      <input id="name" type="text" placeholder="Enter your name" required
      class="w-full mt-1 p-3 sm:p-3 border rounded-md text-sm sm:text-base placeholder:text-xs sm:placeholder:text-sm focus:outline-none focus:ring-2 focus:ring-[#b08a57]">
      <p id="nameError" class="text-red-500 text-xs mt-1 hidden"></p>
    </div>

    <!-- EMAIL -->
    <div>
      <label class="text-sm sm:text-base font-medium">Email</label>
      <input id="email" type="email" placeholder="Enter your email"
      class="w-full mt-1 p-3 sm:p-3 border rounded-md text-sm sm:text-base placeholder:text-xs sm:placeholder:text-sm focus:outline-none focus:ring-2 focus:ring-[#b08a57]">
    </div>

    <!-- SUBMIT BUTTON -->
    <button type="submit"
      class="w-full py-3 sm:py-3 mt-2 bg-[#b08a57] text-white rounded-lg font-semibold text-sm sm:text-base hover:bg-[#9a7647] transition">
      Send Mail
    </button>

  </form>
</div>

<script>
const form = document.getElementById("inquiryForm");

form.addEventListener("submit", function(e){
  e.preventDefault();

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();

  const nameError = document.getElementById("nameError");

  let valid = true;
  nameError.classList.add("hidden");

  // Name validation
  if(name === ""){
    nameError.innerText = "Fill this field";
    nameError.classList.remove("hidden");
    valid = false;
  } else if(!/^[A-Za-z ]+$/.test(name)){
    nameError.innerText = "Invalid input";
    nameError.classList.remove("hidden");
    valid = false;
  }

  if(!valid) return;

  // Mailto redirect
  const subject = "Property Inquiry";
  const body = `Name: ${name}%0D%0AEmail: ${email}`;

  window.location.href = `mailto:yourmail@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
});
</script>

</body>
</html>