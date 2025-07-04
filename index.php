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
    <title>IDX - Trust in Motion</title>
    
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css?v=0.0.7">
    <link rel="stylesheet" href="css/rundown.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="uk-navbar-container navbar-transparent" uk-navbar uk-sticky id="main-navbar" style="display: none;">
        <div class="uk-container">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="javascript:void(0)" onclick="showPage('home')">
                    <img src="https://guestbook.migunesia.com/storage/anu-anu-builder/event-2352/logo1.png" alt="Migunesia Logo" class="logo">
                </a>
            </div>
            
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="javascript:void(0)" onclick="showPage('home')">HOME</a></li>
                    <li><a href="javascript:void(0)" onclick="showPage('qrcode')">MY QR CODE</a></li>
                    <li><a href="javascript:void(0)" onclick="showPage('transportasi')">TRANSPORTASI</a></li>
                    <li><a href="javascript:void(0)" onclick="showPage('akomodasi')">AKOMODASI</a></li>
                    <li>
                        <a href="javascript:void(0)">KEGIATAN</a>
                        <div class="uk-navbar-dropdown" uk-dropdown>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-parent">
                                    <a href="javascript:void(0)">Day 1</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="javascript:void(0)" onclick="showPage('day1-rundown')">Rundown</a></li>
                                        <li><a href="javascript:void(0)" onclick="showPage('day1-citytour')">City Tour</a></li>
                                    </ul>
                                </li>
                                <li class="uk-parent">
                                    <a href="javascript:void(0)">Day 2</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="javascript:void(0)" onclick="showPage('day2-csr')">CSR</a></li>
                                        <li><a href="javascript:void(0)" onclick="showPage('day2-teambuilding')">Team Building</a></li>
                                        <li><a href="javascript:void(0)" onclick="showPage('day2-galadinner')">Gala Dinner</a></li>
                                    </ul>
                                </li>
                                <li class="uk-parent">
                                    <a href="javascript:void(0)">Day 3</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="javascript:void(0)" onclick="showPage('day3-singapore')">Tata cara tour</a></li>
                                    </ul>
                                </li>

                                <li><a href="https://drive.google.com/drive/folders/1IrqArNDbL3fRusZGmDDvr9l6lzBOXUGu" target="_blank">Booklet Team Building</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" onclick="showPage('lokasi')">LOKASI</a></li>
                    <li><a href="https://drive.google.com/drive/folders/17TeBO97OlkSm1yZaPMHythqPakF9dDqf" target="_blank">DOKUMENTASI</a></li>
                    <li><a href="javascript:void(0)" onclick="showPage('wisata')">INFORMASI WISATA</a></li>
                    <li>
                        <a href="javascript:void(0)">CONTACT US</a>
                        <div class="uk-navbar-dropdown" uk-dropdown>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="https://wa.me/6282247002050" target="_blank">Ketua Panitia<br><small>Dedy Aristiawan (SDM)</small></a></li>
                                <li><a href="https://wa.me/6282227522296" target="_blank">Wakil Ketua Panitia<br><small>Roos Eliza Putri (SDM)</small></a></li>
                                <li><a href="https://wa.me/6281311390074" target="_blank">Transportasi<br><small>Arieko W. (SDM)</small></a></li>
                                <li><a href="https://wa.me/6285691368284" target="_blank">Perlengkapan<br><small>Ady Sutrisno (SPR)</small></a></li>
                                <li><a href="https://wa.me/6281298427841" target="_blank">Fun & Team Bonding<br><small>Adnan Bahalwan (PSR)</small></a></li>
                                <li><a href="https://wa.me/6281315454375" target="_blank">CSR<br><small>Valentina Simon (SPR)</small></a></li>
                                <li><a href="https://wa.me/6287883987579" target="_blank">Gala Dinner<br><small>Salsabila Putri (SDM)</small></a></li>
                                <li><a href="https://wa.me/6281287246740" target="_blank">Drama Musical Video<br><small>Carinna Andiva (SDM)</small></a></li>
                                <li class="uk-parent">
                                    <a href="javascript:void(0)">Tour Leader Smart Holiday</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="https://wa.me/6281687827" target="_blank">BUDI<br><small>0816-878-271</small></a></li>
                                        <li><a href="https://wa.me/6285883491252" target="_blank">EMMIL<br><small>0858-8349-1252</small></a></li>
                                        <li><a href="https://wa.me/628122155255" target="_blank">ESTER<br><small>0812-2155-255</small></a></li>
                                        <li><a href="https://wa.me/628119782828" target="_blank">ARIEL<br><small>0811-9782-828</small></a></li>
                                        <li><a href="https://wa.me/628128198200" target="_blank">DONI<br><small>0812-8198-200</small></a></li>
                                        <li><a href="https://wa.me/6289662110062" target="_blank">MATHIUS<br><small>0896-6211-0062</small></a></li>
                                        <li><a href="https://wa.me/628164824619" target="_blank">DHANNY<br><small>0816-4824-619</small></a></li>
                                        <li><a href="https://wa.me/628189191566" target="_blank">RENAULT<br><small>0818-919-156</small></a></li>
                                        <li><a href="https://wa.me/628131999097" target="_blank">YANSEN<br><small>0813-1999-0979</small></a></li>
                                        <li><a href="https://wa.me/628188550902" target="_blank">HENDRI<br><small>0818-855-090</small></a></li>
                                        <li><a href="https://wa.me/628118309788" target="_blank">AON<br><small>0811-8309-788</small></a></li>
                                        <li><a href="https://wa.me/628193417798" target="_blank">NANCY<br><small>0819-3417-7987</small></a></li>
                                        <li><a href="https://wa.me/628128193794" target="_blank">YOGI<br><small>0812-8193-794</small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
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
                <li><a href="javascript:void(0)" onclick="showPage('home'); UIkit.offcanvas('#offcanvas').hide();">HOME</a></li>
                <li><a href="javascript:void(0)" onclick="showPage('qrcode'); UIkit.offcanvas('#offcanvas').hide();">MY QR CODE</a></li>
                <li><a href="javascript:void(0)" onclick="showPage('transportasi'); UIkit.offcanvas('#offcanvas').hide();">TRANSPORTASI</a></li>
                <li><a href="javascript:void(0)" onclick="showPage('akomodasi'); UIkit.offcanvas('#offcanvas').hide();">AKOMODASI</a></li>
                <li class="uk-parent">
                    <a href="javascript:void(0)">KEGIATAN</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-nav-header">Day 1</li>
                        <li><a href="javascript:void(0)" onclick="showPage('day1-rundown'); UIkit.offcanvas('#offcanvas').hide();">Rundown</a></li>
                        <li><a href="javascript:void(0)" onclick="showPage('day1-citytour'); UIkit.offcanvas('#offcanvas').hide();">City Tour</a></li>
                        <li class="uk-nav-header">Day 2</li>
                        <li><a href="javascript:void(0)" onclick="showPage('day2-csr'); UIkit.offcanvas('#offcanvas').hide();">CSR</a></li>
                        <li><a href="javascript:void(0)" onclick="showPage('day2-teambuilding'); UIkit.offcanvas('#offcanvas').hide();">Team Building</a></li>
                        <li><a href="javascript:void(0)" onclick="showPage('day2-galadinner'); UIkit.offcanvas('#offcanvas').hide();">Gala Dinner</a></li>
                        <li class="uk-nav-header">Day 3</li>
                        <li><a href="javascript:void(0)" onclick="showPage('day3-singapore'); UIkit.offcanvas('#offcanvas').hide();">Tata cara tour</a></li>

                        <li><a href="https://drive.google.com/drive/folders/1IrqArNDbL3fRusZGmDDvr9l6lzBOXUGu" target="_blank">Booklet Team Building</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)" onclick="showPage('lokasi'); UIkit.offcanvas('#offcanvas').hide();">LOKASI</a></li>
                <li><a href="https://drive.google.com/drive/folders/17TeBO97OlkSm1yZaPMHythqPakF9dDqf" target="_blank">DOKUMENTASI</a></li>
                <li><a href="javascript:void(0)" onclick="showPage('wisata'); UIkit.offcanvas('#offcanvas').hide();">INFORMASI WISATA</a></li>
                <li class="uk-parent">
                    <a href="javascript:void(0)">CONTACT US</a>
                    <ul class="uk-nav-sub">
                        <li><a href="https://wa.me/6282247002050" target="_blank">Ketua Panitia<br><small>Dedy Aristiawan (SDM)</small></a></li>
                        <li><a href="https://wa.me/6282227522296" target="_blank">Wakil Ketua Panitia<br><small>Roos Eliza Putri (SDM)</small></a></li>
                        <li><a href="https://wa.me/6281311390074" target="_blank">Transportasi<br><small>Arieko W. (SDM)</small></a></li>
                        <li><a href="https://wa.me/6285691368284" target="_blank">Perlengkapan<br><small>Ady Sutrisno (SPR)</small></a></li>
                        <li><a href="https://wa.me/6281298427841" target="_blank">Fun & Team Bonding<br><small>Adnan Bahalwan (PSR)</small></a></li>
                        <li><a href="https://wa.me/6281315454375" target="_blank">CSR<br><small>Valentina Simon (SPR)</small></a></li>
                        <li><a href="https://wa.me/6287883987579" target="_blank">Gala Dinner<br><small>Salsabila Putri (SDM)</small></a></li>
                        <li><a href="https://wa.me/6281287246740" target="_blank">Drama Musical Video<br><small>Carinna Andiva (SDM)</small></a></li>
                        <li class="uk-nav-header">Tour Leader Smart Holiday</li>
                        <li><a href="https://wa.me/6281687827" target="_blank">BUDI<br><small>0816-878-271</small></a></li>
                        <li><a href="https://wa.me/6285883491252" target="_blank">EMMIL<br><small>0858-8349-1252</small></a></li>
                        <li><a href="https://wa.me/628122155255" target="_blank">ESTER<br><small>0812-2155-255</small></a></li>
                        <li><a href="https://wa.me/628119782828" target="_blank">ARIEL<br><small>0811-9782-828</small></a></li>
                        <li><a href="https://wa.me/628128198200" target="_blank">DONI<br><small>0812-8198-200</small></a></li>
                        <li><a href="https://wa.me/6289662110062" target="_blank">MATHIUS<br><small>0896-6211-0062</small></a></li>
                        <li><a href="https://wa.me/628164824619" target="_blank">DHANNY<br><small>0816-4824-619</small></a></li>
                        <li><a href="https://wa.me/628189191566" target="_blank">RENAULT<br><small>0818-919-156</small></a></li>
                        <li><a href="https://wa.me/628131999097" target="_blank">YANSEN<br><small>0813-1999-0979</small></a></li>
                        <li><a href="https://wa.me/628188550902" target="_blank">HENDRI<br><small>0818-855-090</small></a></li>
                        <li><a href="https://wa.me/628118309788" target="_blank">AON<br><small>0811-8309-788</small></a></li>
                        <li><a href="https://wa.me/628193417798" target="_blank">NANCY<br><small>0819-3417-7987</small></a></li>
                        <li><a href="https://wa.me/628128193794" target="_blank">YOGI<br><small>0812-8193-794</small></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Privacy Agreement Overlay -->
    <div id="privacy-overlay" class="privacy-overlay">
        <div class="privacy-content">
            <div class="uk-container uk-container-small" style="padding-left:0;">
                <div class="uk-card uk-card-default uk-card-body uk-text-center">
                    <div class="uk-margin-bottom">
                        <img src="imgs/logo1_black.png" alt="Migunesia Logo" style="max-width: 200px;">
                    </div>
                    
                    <div class="uk-text-left uk-margin">
                        <p class="uk-text-small">
                            Pemrosesan data pribadi karyawan digunakan hanya untuk kepentingan travel/ akomodasi peserta TB serta pengelolaan data pribadi karyawan dilakukan sesuai dengan Pedoman Pelindungan Data Pribadi PT Bursa Efek Indonesia versi 1.0 Tahun 2025.
                        </p>
                    </div>
                    
                    <div class="uk-margin">
                        <label class="uk-text-small">
                            <input class="uk-checkbox" type="checkbox" id="privacy-checkbox"> 
                            Saya setuju dengan ketentuan penggunaan data pribadi di atas
                        </label>
                    </div>
                    
                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-button-large" id="continue-btn" disabled onclick="acceptPrivacy()">
                            Lanjutkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main id="main-content" style="display: none;">
        <!-- HOME PAGE -->
        <div id="home" class="page-content" style="min-height: auto;">
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
    <script src="js/migunesia.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Initialize UIKit components
            // UIkit.use(UIkit);
            
            // Check if privacy has been accepted
            showPrivacyOverlay();
            
            // Handle checkbox change
            $('#privacy-checkbox').change(function() {
                console.log('checkbox changed');
                const isChecked = $(this).is(':checked');
                $('#continue-btn').prop('disabled', !isChecked);
            });
        });

        function showPrivacyOverlay() {
            $('#privacy-overlay').show();
            $('#main-content').hide();
            $('#main-navbar').hide();
        }

        function showMainContent() {
            $('#privacy-overlay').hide();
            $('#main-content').show();
            $('#main-navbar').show();
            
            // Show home page by default
            showPage('home');
        }

        function acceptPrivacy() {
            const isChecked = $('#privacy-checkbox').is(':checked');
            if (isChecked) {                
                // Show main content with fade effect
                $('#privacy-overlay').fadeOut(500, function() {
                    showMainContent();
                });
            }
        }

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
            }else{
                const selectedPage = $('#home');
                selectedPage.addClass('active ' + randomBg);
            }

            // Trigger animations for specific pages
            if(pageId === 'qrcode' || pageId === 'lokasi' || pageId === 'wisata' || pageId === 'transportasi') {
                // Force reflow to restart animations
                selectedPage[0].offsetHeight;
                
                // Add a small delay to ensure smooth animation start
                setTimeout(() => {
                    selectedPage.addClass('animate-in');
                }, 50);
            }
            
            // Scroll to top
            $('html, body').animate({scrollTop: 0}, 300);
        }

        // Handle mobile menu click
        $('.uk-offcanvas-bar a').on('click', function() {
            // Close mobile menu
            UIkit.offcanvas('#offcanvas').hide();
        });

        // Function to reset privacy agreement (for testing)
        function resetPrivacy() {
            localStorage.removeItem('privacy-accepted');
            location.reload();
        }

        // Add keyboard shortcut for reset (Ctrl+Shift+R)
        $(document).keydown(function(e) {
            if (e.ctrlKey && e.shiftKey && e.keyCode === 82) {
                resetPrivacy();
            }
        });
    </script>
</body>
</html> 