<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="container-fluid py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h1 class="mb-4" style="color: #333;">Buy Pichwai Paintings Online & Famous Pichwai Art</h1>
                <p style="color: #666; max-width: 800px; margin: 0 auto;">Looking for pichwai painting online in India? Shop for the best pichwai painting online from our collection of exclusive, customized & handmade products.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Gallery Section -->
<?php
include 'includes/image-gallery.php';

// Example gallery items
$galleryImages = [
    [
        'url' => BASE_URL . '/images/gallery/pr-1.webp',
        'url_2x' => BASE_URL . '/images/gallery/painting1@2x.jpg',
        'alt' => 'Traditional Pichwai Painting',
        'title' => 'Krishna Leela',
        'description' => 'Traditional Pichwai art depicting Krishna\'s divine play'
    ],
    [
        'url' => BASE_URL . '/images/gallery/painting2.jpg',
        'url_2x' => BASE_URL . '/images/gallery/painting2@2x.jpg',
        'alt' => 'Contemporary Pichwai Art',
        'title' => 'Modern Interpretation',
        'description' => 'Contemporary take on classic Pichwai themes'
    ],
    [
        'url' => BASE_URL . '/images/gallery/painting3.jpg',
        'url_2x' => BASE_URL . '/images/gallery/painting3@2x.jpg',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Our Services</h5>
                <p class="card-text">We provide high-quality services to meet your needs.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">About Us</h5>
                <p class="card-text">Learn more about our company and our mission.</p>
                <a href="<?php echo BASE_URL; ?>/about" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">Get in touch with us for any inquiries.</p>
                <a href="<?php echo BASE_URL; ?>/contact" class="btn btn-primary">Contact Now</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
