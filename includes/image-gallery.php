<?php
function renderImageGallery($images, $columns = 3) {
    if (empty($images)) return;

    $columnClass = 'col-12 col-md-6 col-lg-' . (12 / $columns);
?>
    <div class="image-gallery py-5">
        <div class="container-fluid">
            <div class="row g-4">
                <?php foreach ($images as $index => $image): ?>
                <div class="<?php echo $columnClass; ?>">
                    <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                        <div class="aspect-ratio" style="padding-bottom: 75%;">
                            <img
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 3 2'%3E%3C/svg%3E"
                                data-src="<?php echo $image['url']; ?>"
                                data-srcset="<?php echo $image['url']; ?> 1x, <?php echo $image['url_2x']; ?> 2x"
                                alt="<?php echo htmlspecialchars($image['alt']); ?>"
                                class="lazy-load position-absolute top-0 start-0 w-100 h-100 object-fit-cover transition"
                                width="800"
                                height="600"
                            >
                            <div class="gallery-item-overlay position-absolute bottom-0 start-0 w-100 d-flex align-items-end justify-content-center pb-3">
                                <button class="btn btn-light px-4 py-2" data-bs-toggle="modal" data-bs-target="#productModal-<?php echo $index; ?>">
                                    More Info
                                </button>
                            </div>
                        </div>
                        <div class="product-info p-3 bg-white">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h3 class="product-title h5 mb-1"><?php echo htmlspecialchars($image['title']); ?></h3>
                                    <?php if (isset($image['medium'])): ?>
                                    <p class="product-medium mb-1"><?php echo htmlspecialchars($image['medium']); ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($image['size'])): ?>
                                    <p class="product-size mb-0"><?php echo htmlspecialchars($image['size']); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="text-end">
                                    <?php if (isset($image['artist'])): ?>
                                    <p class="artist-name mb-1"><?php echo htmlspecialchars($image['artist']); ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($image['price'])): ?>
                                    <div class="price-container text-end">
                                        <?php if (isset($image['original_price'])): ?>
                                        <p class="original-price mb-1"><s>$<?php echo number_format($image['original_price'] / 83, 2); ?></s></p>
                                        <?php endif; ?>
                                        <p class="product-price <?php echo isset($image['original_price']) ? 'text-danger' : ''; ?> mb-0">
                                            $<?php echo number_format($image['price'] / 83, 2); ?>
                                        </p>
                                        <?php if (isset($image['discount_percentage'])): ?>
                                        <p class="discount-tag mb-0">Save <?php echo $image['discount_percentage']; ?>%</p>
                                        <?php endif; ?>
                                    </div>
                                    <?php elseif (isset($image['price_on_inquiry'])): ?>
                                    <div class="price-container text-end">
                                        <p class="price-inquiry mb-0">Price on inquiry</p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Modal -->
                <div class="modal fade" id="productModal-<?php echo $index; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img
                                            src="<?php echo $image['url']; ?>"
                                            alt="<?php echo htmlspecialchars($image['alt']); ?>"
                                            class="img-fluid rounded-3 mb-3"
                                        >
                                        <?php if (isset($image['price'])): ?>
                                        <div class="modal-price-container text-center">
                                            <h3 class="h4 mb-0">$<?php echo number_format($image['price'] / 83, 2); ?></h3>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="h3 mb-3"><?php echo htmlspecialchars($image['title']); ?></h2>
                                        <?php if (isset($image['artist'])): ?>
                                        <p class="text-muted mb-2">By <?php echo htmlspecialchars($image['artist']); ?></p>
                                        <?php endif; ?>
                                        <?php if (isset($image['medium'])): ?>
                                        <p class="mb-2"><?php echo htmlspecialchars($image['medium']); ?></p>
                                        <?php endif; ?>
                                        <?php if (isset($image['size'])): ?>
                                        <p class="mb-4"><?php echo htmlspecialchars($image['size']); ?></p>
                                        <?php endif; ?>
                                        <p class="mb-4"><?php echo htmlspecialchars($image['description']); ?></p>
                                        <form class="inquiry-form" onsubmit="return handleInquirySubmit(event, <?php echo $index; ?>)">
                                            <div class="mb-3">
                                                <label for="name-<?php echo $index; ?>" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name-<?php echo $index; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email-<?php echo $index; ?>" class="form-label">Email ID</label>
                                                <input type="email" class="form-control" id="email-<?php echo $index; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone-<?php echo $index; ?>" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone-<?php echo $index; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="address-<?php echo $index; ?>" class="form-label">Address</label>
                                                <textarea class="form-control" id="address-<?php echo $index; ?>" rows="2" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-<?php echo $index; ?>" class="form-label">Message</label>
                                                <textarea class="form-control" id="message-<?php echo $index; ?>" rows="3" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <style>
        .gallery-item {
            transition: all 0.3s ease;
            background: #fff;
            margin-bottom: 20px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .gallery-item .aspect-ratio {
            position: relative;
            overflow: hidden;
        }
        .gallery-item img.lazy-load {
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img.lazy-load {
            transform: scale(1.05);
        }
        .gallery-item-overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .gallery-item:hover .gallery-item-overlay {
            opacity: 1;
        }
        .product-info {
            border-top: 1px solid rgba(0,0,0,0.1);
            padding: 1.2rem;
            background: #fff;
        }
        .product-title {
            color: #333;
            font-weight: 600;
            font-size: 1.1rem;
            line-height: 1.4;
        }
        .product-medium {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 0.3rem;
        }
        .product-size {
            color: #666;
            font-size: 0.95rem;
        }
        .artist-name {
            color: #333;
            font-size: 1rem;
            font-weight: 500;
            text-align: right;
        }
        .product-price {
            color: #333;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0;
        }
        .modal-price-container {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            margin: 1rem 0;
        }
        .modal-price-container h3 {
            color: #ff6b6b;
            font-size: 1.8rem;
            margin-bottom: 0;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.1);
            padding: 0.75rem 1rem;
        }
        .form-control:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 107, 0.25);
        }
        .btn-primary {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #ff5252;
            border-color: #ff5252;
        }
        .btn-light {
            background: rgba(255,255,255,0.9);
            border: none;
            font-weight: 500;
        }
        .btn-light:hover {
            background: #fff;
        }
        @media (max-width: 768px) {
            .modal-body {
                padding: 1rem;
            }
            .product-title {
                font-size: 1rem;
            }
            .product-medium,
            .product-size {
                font-size: 0.9rem;
            }
            .artist-name {
                font-size: 0.95rem;
            }
            .product-price {
                font-size: 1.1rem;
            }
        }
        .original-price {
            color: #666;
            font-size: 0.9rem;
            text-decoration: line-through;
        }
        .discount-tag {
            color: #ff6b6b;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .price-inquiry {
            color: #666;
            font-size: 1rem;
            font-style: italic;
            font-weight: 500;
        }
    </style>

    <script>
        // Lazy loading for images
        document.addEventListener('DOMContentLoaded', function() {
            var lazyLoadImages = document.querySelectorAll('img.lazy-load');
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var img = entry.target;
                        img.src = img.dataset.src;
                        if (img.dataset.srcset) {
                            img.srcset = img.dataset.srcset;
                        }
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                });
            });

            lazyLoadImages.forEach(function(img) {
                imageObserver.observe(img);
            });
        });

        function handleInquirySubmit(event, index) {
            event.preventDefault();
            const form = event.target;
            const name = document.getElementById(`name-${index}`).value;
            const email = document.getElementById(`email-${index}`).value;
            const phone = document.getElementById(`phone-${index}`).value;
            const address = document.getElementById(`address-${index}`).value;
            const message = document.getElementById(`message-${index}`).value;

            // Log form data
            console.log('Form submitted:', { name, email, phone, address, message });

            // Clear form
            form.reset();

            // Close modal
            const modal = document.getElementById(`productModal-${index}`);
            const modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();

            // Redirect to thank you page
            window.location.href = 'thank-you.php';

            return false;
        }
    </script>
<?php
}
?>
