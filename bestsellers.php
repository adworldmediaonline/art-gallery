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
        'alt' => 'Shrinath Ji (Shri Krishna) With Cows Gold Pichwai Art Painting',
        'title' => 'Shrinath Ji (Shri Krishna) With Cows Gold Pichwai Art Painting',
        'description' => 'A magnificent Pichwai artwork depicting Shrinath Ji with cows, featuring intricate gold work. This traditional piece showcases the divine beauty of Krishna in the classic Pichwai style.',
        'artist' => 'TheBimba',
        'medium' => 'Pichwai Art',
        'original_price' => 2468,
        'price' => 1899,
        'discount_percentage' => 23
    ],
    [
        'url' => BASE_URL . '/images/gallery/best-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-2.webp',
        'alt' => 'The Legend Of Ramayana Pattachitra Art Painting For Home Wall Art Decor',
        'title' => 'The Legend Of Ramayana Pattachitra Art Painting For Home Wall Art Decor',
        'description' => 'A stunning Pattachitra art painting depicting the legendary tale of Ramayana. This traditional piece brings the epic story to life through intricate details and masterful artistry.',
        'artist' => 'TheBimba',
        'medium' => 'Pattachitra Art',
        'original_price' => 2468,
        'price' => 1899,
        'discount_percentage' => 23
    ],
    [
        'url' => BASE_URL . '/images/gallery/best-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/best-3.webp',
        'alt' => 'Auspicious Tree Of Life Madhubani Art Painting For Home Wall Art Decor',
        'title' => 'Auspicious Tree Of Life Madhubani Art Painting For Home Wall Art Decor',
        'description' => 'A beautiful Madhubani art painting featuring the auspicious Tree of Life motif. This traditional piece showcases the rich cultural heritage of Madhubani art with intricate patterns and symbolic elements.',
        'artist' => 'TheBimba',
        'medium' => 'Madhubani Art',
        'original_price' => 2468,
        'price' => 1899,
        'discount_percentage' => 23
    ]
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>

<?php include 'includes/footer.php'; ?>
