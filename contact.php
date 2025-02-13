<?php include 'includes/header.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Contact Us</h1>
            <form id="contactForm" onsubmit="return handleContactSubmit(event)">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email ID</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" rows="2" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

<style>
    .form-control {
        border-radius: 8px;
        border: 1px solid rgba(0,0,0,0.1);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        border-color: #ff6b6b;
    }
    .btn-primary {
        background-color: #ff6b6b;
        border-color: #ff6b6b;
        padding: 12px;
        font-weight: 500;
        border-radius: 8px;
    }
    .btn-primary:hover {
        background-color: #ff5252;
        border-color: #ff5252;
    }
</style>

<script>
    function handleContactSubmit(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
        const message = document.getElementById('message').value;

        // Here you would typically send this data to your server
        console.log('Form submitted:', { name, email, phone, address, message });

        // Redirect to thank you page
        window.location.href = '<?php echo BASE_URL; ?>/thank-you.php';

        return false;
    }
</script>

<?php include 'includes/footer.php'; ?>
