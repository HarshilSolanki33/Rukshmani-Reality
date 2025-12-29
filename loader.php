<div class="loader">

    <!-- Logo -->
    <img src="Gallery/Realty_Logo-2.png" alt="Rukshmani Group" class="loader-logo">

    <div class="line left"></div>

    <h1 class="loader-text">
        Building<span class="dot">.</span>Communities
    </h1>

    <div class="line right"></div>
</div>



<style>
 /* Fullscreen loader */
.loader {
    position: fixed;
    inset: 0;
    background: radial-gradient(circle at top, #ebd5adff, #948679ff);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 35px;
    z-index: 9999;
}

/* Text */
.loader-text {
    font-size: 44px;
    font-weight: 400;
    color: #f2f2f2;
    letter-spacing: 2px;
    font-family: "Playfair Display", serif;
    white-space: nowrap;
    animation: textReveal 1.8s ease forwards;
}

/* Dot animation */
.loader-text .dot {
    color: #df3333ff;
    animation: dotPulse 1.5s ease-in-out infinite;
}

/* Lines */
.line {
    height: 3px;
    width: 0;
    background: linear-gradient(
        90deg,
        transparent,
        #ffffff,
        transparent
    );
    opacity: 0.8;
}

/* Left line */
.line.left {
    animation: leftLine 2s ease-in-out infinite;
}

/* Right line */
.line.right {
    animation: rightLine 1.8s ease-in-out infinite;
}
/* Logo */
.loader-logo {
    width: 180px;
    margin-bottom: 30px;
    animation: logoFade 1.8s ease forwards;
}

/* Logo animation */
@keyframes logoFade {
    0% {
        opacity: 0;
        transform: translateY(12px) scale(0.95);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Stack logo + text vertically */
.loader {
    flex-direction: column;
}


/* Keyframes */
@keyframes leftLine {
    0% {
        width: 0;
        transform: translateX(60px);
        opacity: 0;
    }
    50% {
        width: 110px;
        opacity: 1;
    }
    100% {
        width: 110px;
        transform: translateX(0);
        opacity: 0.6;
    }
}

@keyframes rightLine {
    0% {
        width: 0;
        transform: translateX(-60px);
        opacity: 0;
    }
    50% {
        width: 110px;
        opacity: 1;
    }
    100% {
        width: 110px;
        transform: translateX(0);
        opacity: 0.6;
    }
}

/* Text animation */
@keyframes textReveal {
    0% {
        opacity: 0;
        letter-spacing: 8px;
        transform: translateY(10px);
    }
    100% {
        opacity: 1;
        letter-spacing: 2px;
        transform: translateY(0);
    }
}

/* Dot pulse */
@keyframes dotPulse {
    0%, 100% {
        opacity: 0.4;
        transform: scale(1);
    }
    50% {
        opacity: 1;
        transform: scale(1.3);
    }
}

/* Mobile responsive */
@media (max-width: 600px) {
    .loader-text {
        font-size: 30px;
    }

    .line {
        display: block;
        width: 50px;
        height: 2px;
        opacity: 0.6;
        animation-duration: 2.5s; /* thodu slow */
    }
}


/* responsive */
/* =========================
   RESPONSIVE LOADER
========================= */

/* Tablets */
@media (max-width: 992px) {
    .loader-logo {
        width: 90px;
        margin-bottom: 22px;
    }

    .loader-text {
        font-size: 36px;
        letter-spacing: 1.5px;
    }

    .line {
        width: 90px;
    }
}

/* Mobile landscape */
@media (max-width: 768px) {
    .loader {
        gap: 20px;
    }

    .loader-logo {
        width: 75px;
        margin-bottom: 18px;
    }

    .loader-text {
        font-size: 30px;
        letter-spacing: 1.2px;
        text-align: center;
    }

    .line {
        width: 70px;
    }
}

/* Mobile portrait */
@media (max-width: 576px) {
    .loader {
        padding: 0 16px;
    }

    .loader-logo {
        width: 110px;
        margin-bottom: 14px;
    }

    .loader-text {
        font-size: 26px;
        letter-spacing: 1px;
    }

    /* Lines thodi subtle */
    .line {
        width: 55px;
        opacity: 0.6;
    }
}

/* Very small devices */
@media (max-width: 380px) {
    .loader-logo {
        width: 65px;
    }

    .loader-text {
        font-size: 23px;
    }

    .line {
        display: block;
        width: 40px;
        height: 2px;
        opacity: 0.4;
    }
}

</style>
<script>
setTimeout(() => {
    document.querySelector(".loader").style.opacity = "0";
    document.querySelector(".loader").style.transition = "opacity 0.8s ease";
    setTimeout(() => {
        document.querySelector(".loader").style.display = "none";
    }, 800);
}, 3000);
</script>

