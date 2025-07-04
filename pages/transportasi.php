<div class="transportasi-page">
    <!-- Flight Booking Card -->
    <?php include 'components/logo.php'; ?>
    <div class="flight-booking-container">
        <div class="flight-card">
            <!-- Flight Route Header -->
            <!-- <div class="flight-route">
                <div class="airport-code">CGK</div>
                <div class="flight-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" fill="black"/>
                        <line x1="3" y1="12" x2="21" y2="12" stroke="black" stroke-width="1" stroke-dasharray="5,5"/>
                    </svg>
                </div>
                <div class="airport-code">BTH</div>
            </div> -->

            <!-- Flight Details Form -->
            <div class="flight-details">
                <!-- Airplane Image -->
                <div class="airplane-image">
                    <div class="airplane-circle">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" fill="black"/>
                        <line x1="3" y1="12" x2="21" y2="12" stroke="black" stroke-width="1" stroke-dasharray="5,5"/>
                    </svg>
                    </div>
                </div>

                <!-- Form Fields -->
                <div class="form-section">
                    <div class="form-group">
                        <label>Keberangkatan</label>
                        <input type="text" value="" class="replace-me-value" data-field="additional[4912]" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Kepulangan</label>
                        <input type="text" value="" class="replace-me-value" data-field="additional[4913]" readonly>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Tour Leader (Berangkat)</label>
                            <input type="text" value="" class="replace-me-value" data-field="additional[4917]" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tour Leader (Kembali)</label>
                            <input type="text" value="" class="replace-me-value" data-field="additional[4918]" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kloter Keberangkatan</label>
                        <input type="text" value="" class="replace-me-value" data-field="additional[]" readonly>
                    </div>

                    <div class="form-group">
                        <label>Kloter Kepulangan</label>
                        <input type="text" value="" class="replace-me-value" data-field="additional[]" readonly>
                    </div>
                </div>
            </div>

            <!-- Contact Person -->
            <div class="contact-person">
                <h3 class="replace-me-html" data-field="fullname">Ny. Roos Eliza Putri</h3>
                <div class="contact-info">
                    <p>1. Peserta diharapkan datang <strong>30 menit sebelum waktu keberangkatan</strong></p>
                    <p>2. Jika membawa bagasi harap di informasikan kepada Tour Leader</p>
                    <p>3. Dan Lain-Lain</p>
                </div>
            </div>
        </div>
    </div>

    <!-- City Skyline Background -->
    <div class="city-skyline"></div>

    <?php include 'components/logo-bottom.php'; ?>
</div> 