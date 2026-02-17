// ===== BROCHURE POPUP =====
function openPopup(projectName) {
  const popup = document.getElementById('brochurePopup');
  if (popup) {
    popup.classList.add('active');
    document.body.style.overflow = 'hidden';
    console.log('Opening brochure for:', projectName);
  }
}

function closePopup() {
  const popup = document.getElementById('brochurePopup');
  if (popup) {
    popup.classList.remove('active');
    document.body.style.overflow = 'auto';
  }
}

// Close popup on Escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closePopup();
  }
});

// ===== FORM SUBMIT HANDLER =====
function handleSubmit(event) {
  event.preventDefault();

  const name = document.getElementById('userName').value;
  const mobile = document.getElementById('userMobile').value;
  const email = document.getElementById('userEmail').value;

  if (!name || !mobile || !email) {
    alert('Please fill all required fields');
    return;
  }

  if (!/^[0-9]{10}$/.test(mobile)) {
    alert('Please enter a valid 10-digit mobile number');
    return;
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert('Please enter a valid email address');
    return;
  }

  alert('Thank you! We will send the brochure to your WhatsApp shortly.');

  document.getElementById('brochureForm').reset();
  closePopup();
}

document.addEventListener("DOMContentLoaded", () => {
  const rows = document.querySelectorAll(".brochure-row");
  const btn = document.getElementById("showMoreBtn");
  const visibleCount = 5;
  let expanded = false;

  function updateView() {
    rows.forEach((row, index) => {
      if (!expanded && index >= visibleCount) {
        row.classList.add("hidden");
      } else {
        row.classList.remove("hidden");
        row.classList.add("show");
      }
    });

    btn.textContent = expanded ? "Show Less" : "Show More";
  }

  updateView();

  btn.addEventListener("click", () => {
    expanded = !expanded;
    updateView();

    if (!expanded) {
      document.querySelector(".brochure-section")
        .scrollIntoView({ behavior: "smooth" });
    }
  });
});
