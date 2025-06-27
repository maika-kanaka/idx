<?php
// Get page parameter from URL, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define allowed pages for security
$allowed_pages = [
    'home', 'qrcode', 'transportasi', 'akomodasi', 'lokasi', 'dokumentasi', 
    'wisata', 'contact', 'absensi', 'day1-rundown', 'day1-citytour', 
    'day2-csr', 'day2-teambuilding', 'day2-galadinner', 'day3-singapore', 
    'day3-johor', 'day3-batam'
];

// Sanitize page parameter
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Migunesia - Company Website</title>
    
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="uk-navbar-container navbar-transparent" uk-navbar uk-sticky>
        <div class="uk-container">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#" onclick="showPage('home')">
                    <img src="https://guestbook.migunesia.com/storage/anu-anu-builder/event-2352/logo1.png" alt="Migunesia Logo" class="logo">
                </a>
            </div>
            
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="#" onclick="showPage('home')">HOME</a></li>
                    <li><a href="#" onclick="showPage('qrcode')">MY QR CODE</a></li>
                    <li><a href="#" onclick="showPage('transportasi')">TRANSPORTASI</a></li>
                    <li><a href="#" onclick="showPage('akomodasi')">AKOMODASI</a></li>
                    <li>
                        <a href="#">KEGIATAN</a>
                        <div class="uk-navbar-dropdown" uk-dropdown>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-parent">
                                    <a href="#">Day 1</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="#" onclick="showPage('day1-rundown')">Rundown</a></li>
                                        <li><a href="#" onclick="showPage('day1-citytour')">City Tour</a></li>
                                    </ul>
                                </li>
                                <li class="uk-parent">
                                    <a href="#">Day 2</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="#" onclick="showPage('day2-csr')">CSR</a></li>
                                        <li><a href="#" onclick="showPage('day2-teambuilding')">Team Building</a></li>
                                        <li><a href="#" onclick="showPage('day2-galadinner')">Gala Dinner</a></li>
                                    </ul>
                                </li>
                                <li class="uk-parent">
                                    <a href="#">Day 3</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="#" onclick="showPage('day3-singapore')">Rundown Singapore</a></li>
                                        <li><a href="#" onclick="showPage('day3-johor')">Rundown Johor Baru</a></li>
                                        <li><a href="#" onclick="showPage('day3-batam')">Rundown Batam to Jakarta</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" onclick="showPage('lokasi')">LOKASI</a></li>
                    <li><a href="https://google.com" target="_blank">DOKUMENTASI</a></li>
                    <li><a href="#" onclick="showPage('wisata')">INFORMASI WISATA</a></li>
                    <li><a href="#" onclick="showPage('contact')">CONTACT US</a></li>
                    <li><a href="#" onclick="showPage('absensi')">ABSENSI</a></li>
                </ul>
                
                <!-- Mobile Menu -->
                <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" uk-toggle>
                    <span uk-navbar-toggle-icon></span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile Offcanvas Menu -->
    <div id="offcanvas" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-nav-default">
                <li><a href="#" onclick="showPage('home'); UIkit.offcanvas('#offcanvas').hide();">HOME</a></li>
                <li><a href="#" onclick="showPage('qrcode'); UIkit.offcanvas('#offcanvas').hide();">MY QR CODE</a></li>
                <li><a href="#" onclick="showPage('transportasi'); UIkit.offcanvas('#offcanvas').hide();">TRANSPORTASI</a></li>
                <li><a href="#" onclick="showPage('akomodasi'); UIkit.offcanvas('#offcanvas').hide();">AKOMODASI</a></li>
                <li class="uk-parent">
                    <a href="#">KEGIATAN</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-nav-header">Day 1</li>
                        <li><a href="#" onclick="showPage('day1-rundown'); UIkit.offcanvas('#offcanvas').hide();">Rundown</a></li>
                        <li><a href="#" onclick="showPage('day1-citytour'); UIkit.offcanvas('#offcanvas').hide();">City Tour</a></li>
                        <li class="uk-nav-header">Day 2</li>
                        <li><a href="#" onclick="showPage('day2-csr'); UIkit.offcanvas('#offcanvas').hide();">CSR</a></li>
                        <li><a href="#" onclick="showPage('day2-teambuilding'); UIkit.offcanvas('#offcanvas').hide();">Team Building</a></li>
                        <li><a href="#" onclick="showPage('day2-galadinner'); UIkit.offcanvas('#offcanvas').hide();">Gala Dinner</a></li>
                        <li class="uk-nav-header">Day 3</li>
                        <li><a href="#" onclick="showPage('day3-singapore'); UIkit.offcanvas('#offcanvas').hide();">Rundown Singapore</a></li>
                        <li><a href="#" onclick="showPage('day3-johor'); UIkit.offcanvas('#offcanvas').hide();">Rundown Johor Baru</a></li>
                        <li><a href="#" onclick="showPage('day3-batam'); UIkit.offcanvas('#offcanvas').hide();">Rundown Batam to Jakarta</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="showPage('lokasi'); UIkit.offcanvas('#offcanvas').hide();">LOKASI</a></li>
                <li><a href="https://google.com" target="_blank">DOKUMENTASI</a></li>
                <li><a href="#" onclick="showPage('wisata'); UIkit.offcanvas('#offcanvas').hide();">INFORMASI WISATA</a></li>
                <li><a href="#" onclick="showPage('contact'); UIkit.offcanvas('#offcanvas').hide();">CONTACT US</a></li>
                <li><a href="#" onclick="showPage('absensi'); UIkit.offcanvas('#offcanvas').hide();">ABSENSI</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- HOME PAGE -->
        <div id="home" class="page-content active" style="min-height: auto;">
            <?php include 'pages/home.php'; ?>
        </div>

        <!-- MY QR CODE PAGE -->
        <div id="qrcode" class="page-content">
            <?php include 'pages/qrcode.php'; ?>
        </div>

        <!-- TRANSPORTASI PAGE -->
        <div id="transportasi" class="page-content">
            <?php include 'pages/transportasi.php'; ?>
        </div>

        <!-- AKOMODASI PAGE -->
        <div id="akomodasi" class="page-content">
            <?php include 'pages/akomodasi.php'; ?>
        </div>

        <!-- DAY 1 RUNDOWN PAGE -->
        <div id="day1-rundown" class="page-content">
            <?php include 'pages/day1-rundown.php'; ?>
        </div>

        <!-- DAY 1 CITY TOUR PAGE -->
        <div id="day1-citytour" class="page-content">
            <?php include 'pages/day1-citytour.php'; ?>
        </div>

        <!-- DAY 2 CSR PAGE -->
        <div id="day2-csr" class="page-content">
            <?php include 'pages/day2-csr.php'; ?>
        </div>

        <!-- DAY 2 TEAM BUILDING PAGE -->
        <div id="day2-teambuilding" class="page-content">
            <?php include 'pages/day2-teambuilding.php'; ?>
        </div>

        <!-- DAY 2 GALA DINNER PAGE -->
        <div id="day2-galadinner" class="page-content">
            <?php include 'pages/day2-galadinner.php'; ?>
        </div>

        <!-- DAY 3 SINGAPORE PAGE -->
        <div id="day3-singapore" class="page-content">
            <?php include 'pages/day3-singapore.php'; ?>
        </div>

        <!-- DAY 3 JOHOR BARU PAGE -->
        <div id="day3-johor" class="page-content">
            <?php include 'pages/day3-johor.php'; ?>
        </div>

        <!-- DAY 3 BATAM TO JAKARTA PAGE -->
        <div id="day3-batam" class="page-content">
            <?php include 'pages/day3-batam.php'; ?>
        </div>

        <!-- LOKASI PAGE -->
        <div id="lokasi" class="page-content">
            <?php include 'pages/lokasi.php'; ?>
        </div>

        <!-- INFORMASI WISATA PAGE -->
        <div id="wisata" class="page-content">
            <?php include 'pages/wisata.php'; ?>
        </div>

        <!-- CONTACT US PAGE -->
        <div id="contact" class="page-content">
            <?php include 'pages/contact.php'; ?>
        </div>

        <!-- ABSENSI PAGE -->
        <div id="absensi" class="page-content">
            <?php include 'pages/absensi.php'; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="uk-section uk-section-secondary">
        <div class="uk-container">
            <div class="uk-text-center">
                <p>&copy; 2025 Smart Holiday. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- UIKit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Initialize UIKit components
            UIkit.use(UIkit);
            
            // Show home page by default
            showPage('home');
        });

        function showPage(pageId) {
            // Hide all pages
            $('.page-content').removeClass('active');
            
            // Remove existing background classes
            $('.page-content').removeClass('bg-option-1 bg-option-2');
            
            // Generate random background for the page
            const randomBg = Math.random() < 0.5 ? 'bg-option-1' : 'bg-option-2';
            
            // Show selected page with random background
            if(pageId != 'home'){
                const selectedPage = $('#' + pageId);
                selectedPage.addClass('active ' + randomBg);
            }
            
            // Scroll to top
            $('html, body').animate({scrollTop: 0}, 300);
        }

        // Handle mobile menu click
        $('.uk-offcanvas-bar a').on('click', function() {
            // Close mobile menu
            UIkit.offcanvas('#offcanvas').hide();
        });
    </script>
</body>
</html> 