<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="container-fluid py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h1 class="mb-4" style="color: #333;">Bestseller Showcase</h1>
                <p style="color: #666; max-width: 800px; margin: 0 auto;">Shop Our Bestsellers Art & Paintings Collection with 4.5+ Avg Ratings and More than 5000+ Orders & Happy Customers.</p>
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
        'url' => BASE_URL . '/images/gallery/best-1.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-1.webp',
        'alt' => 'Best Selling Artwork 1',
        'title' => 'Customer Favorite',
        'description' => 'One of our most popular pieces, beloved for its stunning detail and composition'
    ],
    [
        'url' => BASE_URL . '/images/gallery/best-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-2.webp',
        'alt' => 'Best Selling Artwork 2',
        'title' => 'Timeless Classic',
        'description' => 'A masterpiece that continues to captivate art enthusiasts'
    ],
    [
        'url' => BASE_URL . '/images/gallery/best-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-3.webp',
        'alt' => 'Best Selling Artwork 3',
        'title' => 'Collector\'s Choice',
        'description' => 'Highly sought-after piece that exemplifies artistic excellence'
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<?php include 'includes/footer.php'; ?>
