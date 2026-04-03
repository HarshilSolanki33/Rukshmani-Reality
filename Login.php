<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
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
        body { font-family: 'Poppins', sans-serif; background: #fdfcfb; }
        /* Smooth fade in animation */
        .fade-up { animation: fadeUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        
        /* Custom scrollbar for mobile */
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e2d1c3; border-radius: 10px; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-6 relative bg-gradient-to-br from-[#fdfcfb] to-[#e2d1c3]">

    <div class="absolute inset-0 bg-white/40 backdrop-blur-3xl"></div>

    <div class="relative bg-white w-full max-w-5xl rounded-[2rem] md:rounded-[3rem] shadow-2xl flex flex-col md:flex-row overflow-hidden fade-up max-h-[95vh] md:max-h-[850px]">
        
        <button onclick="window.history.back()" class="absolute top-4 right-6 md:top-6 md:right-8 text-gray-400 hover:text-[#b9874b] transition-all z-50 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="w-full md:w-1/2 p-8 md:p-14 lg:p-20 overflow-y-auto custom-scroll flex flex-col justify-center">
            <div class="mb-8 md:mb-10 text-center md:text-left">
                <img src="Gallery/Realty_Logo-2.png" alt="Logo" class="h-10 md:h-12 mx-auto md:mx-0 mb-6 object-contain">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2"style="font-family: 'Playfair Display', 'Georgia', serif;">Welcome Back</h2>
                <p class="text-gray-400 font-medium"style="font-family: 'Playfair Display', 'Georgia', serif;">Login to manage your account</p>
            </div>

            <form action="auth_handler.php" method="POST" class="space-y-5 md:space-y-6">
                <div class="flex flex-col">
                    <label class="text-[10px] md:text-[11px] font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1"style="font-family: 'Playfair Display', 'Georgia', serif;">Email Address</label>
                    <input type="email" name="login_email" placeholder="Enter email" required
                           class="w-full px-5 py-3.5 md:py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-[#b9874b]/10 focus:border-[#b9874b] outline-none transition-all placeholder:text-gray-300">
                </div>

                <div class="flex flex-col">
                    <label class="text-[10px] md:text-[11px] font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1"style="font-family: 'Playfair Display', 'Georgia', serif;">Password</label>
                    <input type="password" name="login_password" placeholder="Enter password" required
                           class="w-full px-5 py-3.5 md:py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-4 focus:ring-[#b9874b]/10 focus:border-[#b9874b] outline-none transition-all placeholder:text-gray-300">
                </div>

                <button type="submit" name="btn_login" 
                        class="w-full bg-[#b9874b] text-white py-3.5 md:py-4 rounded-2xl font-bold text-lg shadow-xl shadow-[#b9874b]/20 hover:bg-[#a6763d] active:scale-[0.98] transition-all"style="font-family: 'Playfair Display', 'Georgia', serif;">
                    Login
                </button>
            </form>
            
            <p class="mt-8 text-center md:text-left text-sm text-gray-500"style="font-family: 'Playfair Display', 'Georgia', serif;">
                Don't have an account? <a href="signup.php" class="text-[#b9874b] font-bold hover:underline">Create One</a>
            </p>
        </div>

        <div class="w-full md:w-1/2 bg-[#faf9f6] flex flex-col items-center justify-center p-10 md:p-16 border-t md:border-t-0 md:border-l border-gray-100">
            <div class="text-center w-full max-w-[320px]">
                <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-6 md:mb-8"style="font-family: 'Playfair Display', 'Georgia', serif;">Or continue with</h3>
                
                <div class="flex justify-center w-full overflow-hidden">
                    <div id="g_id_onload"
                         data-client_id="185280678671-iq5gt5clq7lldqvtahoskoqpmmp0cih7.apps.googleusercontent.com"
                         data-context="signin"
                         data-ux_mode="popup"
                         data-callback="handleCredentialResponse"
                         data-auto_prompt="false">
                    </div>

                    <div class="g_id_signin" 
                         data-type="standard" 
                         data-shape="pill" 
                         data-theme="outline" 
                         data-text="signin_with" 
                         data-size="large" 
                         data-logo_alignment="left"
                         data-width="280">
                    </div>
                </div>

                <p class="text-xs text-gray-400 italic mt-10 md:mt-12 leading-relaxed">
                    Fast, secure sign in for "Rukmani Realty"
                </p>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(isset($_SESSION['msg_title'])): ?>
    <script>
        Swal.fire({
            title: '<?= $_SESSION['msg_title']; ?>',
            text: '<?= $_SESSION['msg_text']; ?>',
            icon: '<?= $_SESSION['msg_type']; ?>',
            confirmButtonColor: '#b9874b',
            customClass: { popup: 'rounded-[2rem]' }
        });
    </script>
    <?php unset($_SESSION['msg_title'], $_SESSION['msg_text'], $_SESSION['msg_type']); endif; ?>

    <script>
    function handleCredentialResponse(response) {
        fetch('auth_handler.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ google_token: response.credential })
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') { 
                window.location.href = data.redirect; 
            } else { 
                Swal.fire({
                    title: 'Login Error',
                    text: data.message,
                    icon: 'error',
                    confirmButtonColor: '#b9874b'
                }); 
            }
        })
        .catch(err => console.error("Error:", err));
    }
    </script>
</body>
</html>