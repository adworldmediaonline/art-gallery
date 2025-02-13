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
        'alt' => 'Fishing In Lotus Pond Handmade Painting',
        'title' => 'Fishing In Lotus Pond Handmade Painting For Home Wall Decor',
        'medium' => 'Oil on Canvas',
        'size' => '20 x 20 Inches',
        'artist' => 'Nisha Dial',
        'price' => 126000,
        'description' => 'A stunning handmade painting depicting a serene scene of fishing in a lotus pond. This piece beautifully captures the tranquility of nature and traditional life, making it a perfect addition to your home wall decor.'
    ],
    [
        'url' => BASE_URL . '/images/gallery/pr-2.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-2.webp',
        'alt' => 'Ethereal Reflection Handmade Painting',
        'title' => 'Ethereal Reflection Handmade Painting',
        'description' => 'A captivating handmade painting that explores ethereal reflections with masterful artistry. This piece showcases the perfect blend of technique and artistic vision.',
        'artist' => 'Nisha Dial',
        'medium' => 'Oil on Canvas',
        'size' => '36 x 36 inches',
        'price' => 226800
    ],
    [
        'url' => BASE_URL . '/images/gallery/pr-3.webp',
        'url_2x' => BASE_URL . '/images/gallery/pr-3.webp',
        'alt' => 'Ethereal Reflection Handmade Painting',
        'title' => 'Ethereal Reflection Handmade Painting',
        'description' => 'A captivating handmade painting that explores ethereal reflections with masterful artistry. This piece showcases the perfect blend of technique and artistic vision.',
        'artist' => 'Nisha Dial',
        'medium' => 'Oil on Canvas',
        'size' => '36 x 36 inches',
        'price' => 226800
    ],
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
    ],
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
    ],
    [
        'url' => BASE_URL . '/images/gallery/img-10.webp',
        'url_2x' => BASE_URL . '/images/gallery/img-10.webp',
        'alt' => 'The Foundation Handmade Painting For Home Wall Decor',
        'title' => 'The Foundation Handmade Painting For Home Wall Decor',
        'description' => 'A stunning handmade painting that explores the concept of foundation with masterful artistry. This contemporary piece combines artistic vision with meticulous execution.',
        'artist' => 'Anurag Anand',
        'medium' => 'Acrylic on Canvas',
        'size' => '35x 25 Inches',
        'price' => 92720
    ],
    [
        'url' => BASE_URL . '/images/gallery/img-11.webp',
        'url_2x' => BASE_URL . '/images/gallery/img-11.webp',
        'alt' => 'Sankat Mochan Handmade Painting For Home Wall Decor',
        'title' => 'Sankat Mochan Handmade Painting For Home Wall Decor',
        'description' => 'A masterful handmade painting depicting Sankat Mochan, created with exquisite attention to detail. This spiritual piece brings divine energy and artistic excellence to your living space.',
        'artist' => 'Anurag Anand',
        'medium' => 'Acrylic on Canvas',
        'size' => '38 x 33 Inches',
        'price' => 131040
    ],
    [
        'url' => BASE_URL . '/images/gallery/img-12.webp',
        'url_2x' => BASE_URL . '/images/gallery/img-12.webp',
        'alt' => 'In A Happy Place Handmade Painting For Home Wall Decor',
        'title' => 'In A Happy Place Handmade Painting For Home Wall Decor',
        'description' => 'A delightful handmade painting that captures the essence of happiness and serenity. This uplifting piece brings warmth and positive energy to any space with its thoughtful composition.',
        'artist' => 'Anurag Anand',
        'medium' => 'Acrylic on Canvas',
        'size' => '24 x 36 Inches',
        'price' => 75600
    ],
];

// Render the gallery with 3 columns
renderImageGallery($galleryImages, 3);
?>



<?php include 'includes/footer.php'; ?>
