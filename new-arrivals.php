<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="container-fluid py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h1 class="mb-4" style="color: #333;">New Arrivals</h1>
                <p style="color: #666; max-width: 800px; margin: 0 auto;">Shop New Art Styles for your Wall Decor & Aesthetic Needs.</p>
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
        'url' => BASE_URL . '/images/gallery/new-1.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-1.webp',
        'alt' => 'New Arrival Artwork 1',
        'title' => 'Contemporary Masterpiece',
        'description' => 'A stunning new addition to our collection showcasing modern artistic brilliance'
    ],
    [
        'url' => BASE_URL . '/images/gallery/new-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-2.webp',
        'alt' => 'New Arrival Artwork 2',
        'title' => 'Traditional Innovation',
        'description' => 'Where traditional techniques meet contemporary vision'
    ],
    [
        'url' => BASE_URL . '/images/gallery/new-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-3.webp',
        'alt' => 'New Arrival Artwork 3',
        'title' => 'Artistic Excellence',
        'description' => 'The latest masterpiece showcasing exceptional artistic skill and creativity'
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<?php include 'includes/footer.php'; ?>
