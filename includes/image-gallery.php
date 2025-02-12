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
                                <button class="btn btn-light px-4 py-2" data-bs-toggle="modal" data-bs-target="#inquiryModal-<?php echo $index; ?>">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for each gallery item -->
                <div class="modal fade" id="inquiryModal-<?php echo $index; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Inquiry Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="inquiry-form" onsubmit="return handleInquirySubmit(event, <?php echo $index; ?>)">
                                    <div class="mb-3">
                                        <label for="name-<?php echo $index; ?>" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name-<?php echo $index; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email-<?php echo $index; ?>" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email-<?php echo $index; ?>" required>
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
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <style>
        .gallery-item {
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.2), 0 20px 60px -10px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            background: #fff;
            margin-bottom: 20px;
            padding: 10px;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.25), 0 30px 70px -10px rgba(0, 0, 0, 0.2);
        }
        .gallery-item img.lazy-load {
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 8px;
        }
        .gallery-item img.lazy-load.loaded {
            opacity: 1;
        }
        .gallery-item-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
            height: 40%;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .gallery-item:hover .gallery-item-overlay {
            opacity: 1;
        }
        .gallery-item-overlay .btn {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.95);
            border: none;
        }
        .gallery-item:hover .gallery-item-overlay .btn {
            transform: translateY(0);
            opacity: 1;
        }
        .gallery-item:hover .gallery-item-overlay .btn:hover {
            background: #fff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
        @media (max-width: 768px) {
            .gallery-item {
                box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.2), 0 20px 60px -10px rgba(0, 0, 0, 0.15);
            }
            .gallery-item-overlay {
                opacity: 1;
                height: 40%;
            }
            .gallery-item-overlay .btn {
                transform: translateY(0);
                opacity: 1;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }
        }
        .modal-dialog {
            max-width: 400px;
        }
        .modal-content {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border: none;
            border-radius: 12px;
        }
        .modal-header {
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.1);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            border-color: #ff6b6b;
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
            }, {
                rootMargin: '50px 0px',
                threshold: 0.01
            });

            lazyLoadImages.forEach(function(img) {
                imageObserver.observe(img);
            });
        });

        // Form handling
        function handleInquirySubmit(event, index) {
            event.preventDefault();

            const form = event.target;
            const name = document.getElementById(`name-${index}`).value;
            const email = document.getElementById(`email-${index}`).value;
            const message = document.getElementById(`message-${index}`).value;

            // Here you would typically send this data to your server
            console.log('Form submitted:', { name, email, message });

            // Show success message
            const modal = document.getElementById(`inquiryModal-${index}`);
            const modalInstance = bootstrap.Modal.getInstance(modal);

            // Clear form
            form.reset();

            // Close modal
            modalInstance.hide();

            // Show success toast or alert
            alert('Thank you for your inquiry. We will get back to you soon!');

            return false;
        }
    </script>
<?php
}
?>
