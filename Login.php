<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Rukmani Realty</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

<style>
body{
font-family:'Poppins',sans-serif;
}
.heading{
font-family:'Playfair Display',serif;
}
</style>

</head>

<body class="bg-[#f7f5f2] flex items-center justify-center min-h-screen px-4 sm:px-6">

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/40 backdrop-blur-md flex items-center justify-center">

<!-- Popup -->
<div class="relative w-full max-w-6xl bg-white rounded-3xl shadow-2xl flex flex-col lg:flex-row overflow-hidden">

<!-- Close Button -->
<button onclick="closePopup()" 
class="absolute right-5 top-4 text-2xl sm:text-3xl text-gray-500 hover:text-black transition">
✕
</button>

<!-- Left Login Form -->
<div class="w-full lg:w-1/2 p-6 sm:p-8 lg:p-10">

<img src="../Guest Side/Gallery/Realty Logo.png" class="h-14 sm:h-16 lg:h-20 mb-6">

<h2 class="text-2xl sm:text-3xl heading font-semibold text-gray-800 text-center">
Welcome Back
</h2>

<p class="text-center text-gray-500 text-sm mb-6">
Login to continue
</p>

<form action="login_process.php" method="POST" class="space-y-4">

<div>
<label class="text-sm font-medium">Email Address</label>

<input type="email"
name="email"
class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-[#b9874b] outline-none"
placeholder="Enter email"
required>

</div>

<div>
<label class="text-sm font-medium">Password</label>

<input type="password"
name="password"
class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-[#b9874b] outline-none"
placeholder="Enter password"
required>

</div>

<button
type="submit"
class="w-full py-3 bg-[#b9874b] text-white rounded-lg font-semibold hover:bg-[#a5773c] transition">

Login

</button>

</form>

</div>

<!-- Right Social Section -->
<div class="w-full lg:w-1/2 bg-gradient-to-br from-[#faf8f3] to-[#f2eee8] p-6 sm:p-8 lg:p-10 flex flex-col justify-center items-center text-center">

<h3 class="text-lg sm:text-xl font-semibold mb-6 lg:mb-8">
Or continue with
</h3>

<a href="google-login.php"
class="w-full max-w-sm mb-4 flex items-center justify-center gap-3 border border-[#b9874b]/40 rounded-xl py-3 bg-white hover:shadow-md transition">

<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" class="w-5">

Continue with Google

</a>



<p class="text-gray-500 text-sm mt-6">
Fast, secure sign in
</p>

</div>

</div>

</div>

<script>

function closePopup(){

if(document.referrer){
window.history.back();
}
else{
document.getElementById("overlay").style.display="none";
}

}

</script>

</body>
</html>