// Popup Functions
function openPopup() {
    document.getElementById('inquiryOverlay').classList.add('show');
    document.body.classList.add('modal-open');
}
function closePopup() {
    document.getElementById('inquiryOverlay').classList.remove('show');
    document.body.classList.remove('modal-open');
}

// Auto-trigger from sidebar/nav (tame "Inquiry Now" par class add karo)
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.popup-trigger').forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            openPopup();
        });
    });
    
    // Close events
    document.getElementById('inquiryOverlay').addEventListener('click', function(e) {
        if (e.target === this) closePopup();
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePopup();
    });
    document.querySelector('.btn-close').addEventListener('click', closePopup);
    
    // Form submit demo
    document.getElementById('inquiryForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Inquiry sent to Rukmani Realty!');
        closePopup();
    });
});
