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

// Gallery items with complete details
$galleryImages = [
    [
        'url' => BASE_URL . '/images/gallery/pr-1.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-1.webp',
        'alt' => 'Fishing In Lotus Pond Handmade Painting',
        'title' => 'Fishing In Lotus Pond Handmade Painting For Home Wall Decor',
        'description' => 'A stunning handmade painting depicting a serene scene of fishing in a lotus pond. This piece beautifully captures the tranquility of nature and traditional life, making it a perfect addition to your home wall decor.',
        'artist' => 'Nisha Dial',
        'medium' => 'Oil on Canvas',
        'size' => '20 x 20 Inches',
        'price' => 126000
    ],
    [
        'url' => BASE_URL . '/images/gallery/pr-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-2.webp',
        'alt' => 'The Blooming Glory Handmade Painting',
        'title' => 'The Blooming Glory Handmade Painting',
        'description' => 'A stunning handmade painting showcasing the blooming glory of nature. This masterpiece combines artistic excellence with meticulous attention to detail.',
        'artist' => 'Nisha Dial',
        'medium' => 'Oil on Canvas',
        'size' => '36 x 36 inches',
        'price' => 226800
    ],
    [
        'url' => BASE_URL . '/images/gallery/pr-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-3.webp',
        'alt' => 'Traditional Pichwai Artwork',
        'title' => 'Traditional Pichwai Art With Gold Work',
        'description' => 'Exquisite Pichwai painting featuring intricate gold work and traditional motifs. Each detail is carefully crafted by skilled artisans using age-old techniques.',
        'artist' => 'Meena Sharma',
        'medium' => 'Natural Colors with Gold Work',
        'size' => '30 x 40 Inches',
        'price' => 185000
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<?php include 'includes/footer.php'; ?>
