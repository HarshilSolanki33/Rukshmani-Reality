<!-- Popup Overlay ONLY -->
<div id="inquiryOverlay" class="overlay">
    <div class="popup">
        <h2>Property Inquiry</h2>
        <form id="inquiryForm">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" id="message" name="message" placeholder="Preferred project?">
            </div>
            <button type="submit" class="btn btn-submit">Send Inquiry</button>
            <button type="button" class="btn btn-close">Close</button>
        </form>
    </div>
</div>


<link rel="stylesheet" href="./Assets/inquiry.css"></link>

<script src="./Assets/inquiry.js"></script>