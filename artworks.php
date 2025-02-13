<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="container-fluid py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-11">
                <h1 class="mb-4" style="color: #333;">Original Handmade Paintings & Handmade Artworks</h1>
                <p style="color: #666; margin: 0 auto;">Explore the harmonious blend of tradition and modernity in our exquisite handmade paintings collection, celebrating the rich heritage of Indian paintings alongside contemporary innovations. Our curated selection, featuring masterpieces by acclaimed Indian artists, bridges the gap between traditional artistry and modern expression. Each piece in our handmade paintings collection embodies the dynamic spirit of contemporary Indian art, showcasing the nation's evolving creative landscape. With meticulous craftsmanship and unparalleled creativity, our collection invites you to experience the best of both worlds. Whether you seek timeless classics or avant-garde creations, our handmade collection promises to enhance your space with the brilliance of India's artistic legacy, offering a captivating journey through tradition and modernity.</p>
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
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<?php include 'includes/footer.php'; ?>
