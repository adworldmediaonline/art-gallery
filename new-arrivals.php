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
        'alt' => 'Orange Lily Metal Framed Floral Artwork Painting',
        'title' => 'Orange Lily Metal Framed Floral Artwork Painting',
        'description' => 'Beautiful metal framed floral artwork featuring vibrant orange lilies. This stunning piece adds a touch of elegance and natural beauty to any space.',
        'original_price' => 19800,
        'price' => 16500,
        'discount_percentage' => 17
    ],
    [
        'url' => BASE_URL . '/images/gallery/new-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-2.webp',
        'alt' => 'Rosa Gallica Framed Floral Artwork Painting',
        'title' => 'Rosa Gallica Framed Floral Artwork Painting',
        'description' => 'Elegant framed floral artwork featuring the classic Rosa Gallica. This timeless piece brings a touch of botanical beauty and sophistication to any interior.',
        'original_price' => 19800,
        'price' => 16500,
        'discount_percentage' => 17
    ],
    [
        'url' => BASE_URL . '/images/gallery/new-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/new-3.webp',
        'alt' => 'Pink Lily Metal Framed Floral Artwork Painting',
        'title' => 'Pink Lily Metal Framed Floral Artwork Painting',
        'description' => 'Exquisite metal framed floral artwork showcasing delicate pink lilies. This elegant piece combines natural beauty with contemporary framing to create a stunning focal point for any room.',
        'price_on_inquiry' => true
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<?php include 'includes/footer.php'; ?>
