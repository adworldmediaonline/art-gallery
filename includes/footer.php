    </main>
    </div>
    <footer class="py-3" style="background-color: #fff; box-shadow: 0 -2px 5px rgba(0,0,0,0.1);">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0" style="color: #333;">&copy; 2024 BRAND<span style="color: #ff6b6b;">NAME</span>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="<?php echo BASE_URL; ?>/privacy-policy" class="text-decoration-none me-3" style="color: #333; transition: color 0.3s;">Privacy Policy</a>
                    <span style="color: #333;">|</span>
                    <a href="<?php echo BASE_URL; ?>/terms" class="text-decoration-none ms-3" style="color: #333; transition: color 0.3s;">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        footer a:hover {
            color: #ff6b6b !important;
        }
        @media (max-width: 767px) {
            footer .row > div {
                margin: 5px 0;
            }
            footer .row > div:first-child {
                order: 2;
            }
            footer .row > div:last-child {
                order: 1;
            }
        }
    </style>
</body>
</html>
