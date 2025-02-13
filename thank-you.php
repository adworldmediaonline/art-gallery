<?php include 'includes/header.php'; ?>

<div class="thank-you-page container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-8 text-center">
            <div class="thank-you-content p-5 bg-white rounded-3 shadow-sm">
                <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                <h1 class="mb-4">Thank You for Your Inquiry!</h1>
                <p class="lead mb-4">We have received your message and will get back to you shortly.</p>
                <div class="additional-info mb-4">
                    <p class="mb-2">In the meantime, you might want to:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-palette me-2"></i>Browse our <a href="<?php echo BASE_URL; ?>/artworks.php" class="text-decoration-none">Premium Collection</a></li>
                        <li class="mb-2"><i class="fas fa-star me-2"></i>Check out our <a href="<?php echo BASE_URL; ?>/bestsellers.php" class="text-decoration-none">Best Sellers</a></li>
                        <li class="mb-2"><i class="fas fa-box-open me-2"></i>View our <a href="<?php echo BASE_URL; ?>/new-arrivals.php" class="text-decoration-none">New Arrivals</a></li>
                    </ul>
                </div>
                <a href="<?php echo BASE_URL; ?>/index.php" class="btn btn-primary px-4 py-2">Return to Homepage</a>
            </div>
        </div>
    </div>
</div>

<style>
    .thank-you-content {
        border: 1px solid rgba(0,0,0,0.1);
    }
    .thank-you-content .fas {
        color: #28a745;
    }
    .additional-info ul li a {
        color: #ff6b6b;
    }
    .additional-info ul li a:hover {
        color: #ff5252;
    }
    .btn-primary {
        background-color: #ff6b6b;
        border-color: #ff6b6b;
    }
    .btn-primary:hover {
        background-color: #ff5252;
        border-color: #ff5252;
    }
</style>

<?php include 'includes/footer.php'; ?>
