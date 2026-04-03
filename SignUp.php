<?php
session_start();
// Jo referer available hoy ane te login/signup na hoy, to ene save karo
if(isset($_SERVER['HTTP_REFERER']) && !strpos($_SERVER['HTTP_REFERER'], 'signup.php')){
    $_SESSION['redirect_to'] = $_SERVER['HTTP_REFERER'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; overflow: hidden; }
        .light-golden-bg {
            background: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
            min-height: 100vh;
        }
        .custom-scroll::-webkit-scrollbar { width: 5px; }
        .custom-scroll::-webkit-scrollbar-track { background: transparent; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e2d1c3; border-radius: 10px; }
        .custom-scroll::-webkit-scrollbar-thumb:hover { background: #b9874b; }
        .fade-up { animation: fadeUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .error-text { color: #ef4444; font-size: 11px; font-weight: 600; margin-top: 4px; margin-left: 4px; }
        .input-error { border-color: #ef4444 !important; }
    </style>
</head>
<body class="light-golden-bg flex items-center justify-center p-4 relative">

    <div class="absolute inset-0 bg-white/60 backdrop-blur-[80px]"></div>

    <div class="relative bg-white/90 w-full max-w-5xl h-[90vh] md:h-auto max-h-[850px] rounded-[3rem] shadow-[0_32px_64px_-12px_rgba(185,135,75,0.15)] flex flex-col md:row overflow-hidden border border-white/50 fade-up">
        
        <button onclick="window.history.back()" class="absolute top-8 right-10 text-gray-400 hover:text-[#b9874b] hover:rotate-90 transition-all duration-300 z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex flex-col md:flex-row h-full">
            <div class="w-full md:w-[62%] p-8 md:p-14 overflow-y-auto custom-scroll">
                <div class="mb-8">
                    <img src="Gallery/Realty_Logo-2.png" alt="Logo" class="h-16 w-auto object-contain mb-6">
                    <h2 class="text-4xl font-bold text-gray-800 mb-2" style="font-family: 'Playfair Display', 'Georgia', serif;">Create Account</h2>
                    <p class="text-gray-400 font-medium" style="font-family: 'Playfair Display', 'Georgia', serif;">Join Rukmani Realty and list your property easily</p>
                </div>

                <form id="signupForm" action="auth_handler.php" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
                    <div class="flex flex-col">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1 mb-1" style="font-family: 'Playfair Display', 'Georgia', serif;">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter name" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-[#b9874b]/10 focus:border-[#b9874b] outline-none">
                        <span id="nameError" class="error-text hidden"></span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1 mb-1"style="font-family: 'Playfair Display', 'Georgia', serif;">Email *</label>
                            <input type="email" id="email" name="email" placeholder="Enter email" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-[#b9874b]/10 focus:border-[#b9874b] outline-none">
                            <span id="emailError" class="error-text hidden"></span>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1 mb-1"style="font-family: 'Playfair Display', 'Georgia', serif;">Phone *</label>
                            <input type="text" id="phone" name="phone" placeholder="10 digit number" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-[#b9874b]/10 focus:border-[#b9874b] outline-none">
                            <span id="phoneError" class="error-text hidden"></span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1 mb-1"style="font-family: 'Playfair Display', 'Georgia', serif;">Password</label>
                            <input type="password" id="password" name="password" placeholder="Min 6 chars" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-[#b9874b]/10 focus:border-[#b9874b] outline-none">
                            <span id="passwordError" class="error-text hidden"></span>
                        </div>
                       
                    </div>

                    <button type="submit" name="btn_signup" class="w-full bg-[#b9874b] text-white py-4 rounded-2xl font-bold text-lg shadow-xl shadow-[#b9874b]/20 hover:bg-[#a6763d] transition-all"style="font-family: 'Playfair Display', 'Georgia', serif;">
                        Create Account
                    </button>
                </form>
            </div>

            <div class="w-full md:w-[38%] bg-gray-50/40 p-10 flex flex-col items-center justify-center border-l border-gray-100 text-center">
                <div class="space-y-8">
                    <h3 class="text-2xl font-bold text-gray-800"style="font-family: 'Playfair Display', 'Georgia', serif;">Or continue with</h3>
                    
                    <div id="g_id_onload"
                         data-client_id="185280678671-iq5gt5clq7lldqvtahoskoqpmmp0cih7.apps.googleusercontent.com"
                         data-callback="handleCredentialResponse"
     data-auto_select="false"
     data-itp_support="true"> </div>

<div class="flex justify-center my-4">
    <div class="g_id_signin" 
         data-type="standard" 
         data-shape="rectangular" 
         data-theme="outline" 
         data-text="signin_with" 
         data-size="large" 
         data-logo_alignment="left"
         data-width="100%"> </div>
</div>

<script>
function handleCredentialResponse(response) {
    // Backend ne data moklava mate
    fetch('your_php_file.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ credential: response.credential })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            window.location.href = data.redirect;
        } else {
            alert("Login Failed: " + data.message);
        }
    })
    .catch(err => console.error("Error:", err));
}
</script>
<script>
    function handleCredentialResponse(response) {
    console.log("Token received, sending to server...");
    
    // Mobile mate Fetch API ne vadhare robust banavi che
    fetch('auth_handler.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json' // Mobile compatibility mate
        },
        // 'credential' ane 'google_token' banne mokli shako cho safer side mate
        body: JSON.stringify({ 
            google_token: response.credential,
            credential: response.credential 
        })
    })
    .then(res => {
        if (!res.ok) throw new Error('Network response was not ok');
        return res.json();
    })
    .then(data => {
        if (data.status === 'success') {
            // Mobile ma redirect fast thavu joie
            window.location.replace(data.redirect || 'index.php'); 
        } else {
            console.error("Server Error:", data.message);
            alert("Error: " + data.message);
        }
    })
    .catch(err => {
        console.error("Fetch Error:", err);
        // Mobile ma alert vadhare useful hoy che debugging mate
        alert("Connection issue. Please check your internet or try again.");
    });
}

// Form Validation Logic
document.getElementById('signupForm').addEventListener('submit', function(e) {
    let isValid = true;
    const fields = {
        name: { input: document.getElementById('name'), error: document.getElementById('nameError') },
        email: { input: document.getElementById('email'), error: document.getElementById('emailError') },
        phone: { input: document.getElementById('phone'), error: document.getElementById('phoneError') },
        password: { input: document.getElementById('password'), error: document.getElementById('passwordError') }
    };

    // Reset Errors
    Object.values(fields).forEach(f => {
        if(f.error) f.error.classList.add('hidden');
        if(f.input) f.input.classList.remove('input-error');
    });

    // Validation
    if (fields.name.input.value.trim() === "") {
        fields.name.error.textContent = "Full Name is required";
        fields.name.error.classList.remove('hidden');
        fields.name.input.classList.add('input-error');
        isValid = false;
    }
    
    // Phone Validation (Mobile mate jaruri)
    if (fields.phone.input.value.length < 10) {
        fields.phone.error.textContent = "Valid Phone Number is required";
        fields.phone.error.classList.remove('hidden');
        fields.phone.input.classList.add('input-error');
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault(); // Stop form submission if invalid
    }
});
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(isset($_SESSION['msg_title'])): ?>
<script>
    Swal.fire({
        title: '<?php echo $_SESSION['msg_title']; ?>',
        text: '<?php echo $_SESSION['msg_text']; ?>',
        icon: '<?php echo $_SESSION['msg_type']; ?>',
        confirmButtonColor: '#b9874b'
    });
</script>
<?php 
    unset($_SESSION['msg_title']); // Ek var alert batavya pachi delete kari nakho
    unset($_SESSION['msg_text']);
    unset($_SESSION['msg_type']);
endif; ?>
</body>
</html>