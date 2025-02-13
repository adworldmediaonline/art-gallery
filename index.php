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
        'url_2x' => BASE_URL . '/images/gallery/pr-1.webp',
        'alt' => 'Traditional Pichwai Painting',
        'title' => 'Krishna Leela',
        'description' => 'Traditional Pichwai art depicting Krishna\'s divine play'
    ],
    [
      'url' => BASE_URL . '/images/gallery/pr-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-2.webp',
        'alt' => 'Contemporary Pichwai Art',
        'title' => 'Modern Interpretation',
        'description' => 'Contemporary take on classic Pichwai themes'
    ],
    [
         'url' => BASE_URL . '/images/gallery/pr-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-3.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ],
    [
         'url' => BASE_URL . '/images/gallery/new-1.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-1.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ],
    [
         'url' => BASE_URL . '/images/gallery/new-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-2.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ],
    [
         'url' => BASE_URL . '/images/gallery/new-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-3.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ],
    [
         'url' => BASE_URL . '/images/gallery/best-1.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-1.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ],
    [
         'url' => BASE_URL . '/images/gallery/best-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-2.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ],
    [
         'url' => BASE_URL . '/images/gallery/best-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-3.webp',
        'alt' => 'Detailed Pichwai Work',
        'title' => 'Intricate Details',
        'description' => 'Showcasing the fine details of Pichwai craftsmanship'
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>



<?php include 'includes/footer.php'; ?>
