<div class="uk-container">
    <?php include 'components/logo.php'; ?>

    <div class="gala-dinner-page">
        <!-- Header Section -->
        <div class="gala-header uk-text-center uk-margin-large-bottom">
            <h1 class="uk-heading-large uk-text-center gala-title">GALA DINNER</h1>
            <div class="venue-info uk-margin-medium-top">
                <h3 class="venue-name">BALLROOM RADISSON HOTEL</h3>
                <div class="time-badge">18.30 - 00.15 WIB</div>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="gala-schedule uk-margin-large-bottom">
            <div class="schedule-table uk-overflow-auto">
                <table class="uk-table uk-table-striped uk-table-hover">
                    <thead>
                        <tr class="schedule-header">
                            <th class="time-column">Time</th>
                            <th class="activity-column">Activity (Action)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="time-cell">18:30 - 20:00</td>
                            <td class="activity-cell">
                                Registrasi & Dinner<br>
                                <div class="sub-activity">Opening</div>
                                <div class="sub-activity">Acara</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="time-cell">20:00 - 00:30</td>
                            <td class="activity-cell">
                                Pengumuman Pemenang Pre-Event Drama Musikal, Doorprize, & Grandprize<br>
                                <div class="sub-activity">Guest Star Performance by Padi Reborn</div>
                                <div class="sub-activity">HUT BEI</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Ketentuan Section -->
        <div class="requirements-section uk-margin-large-bottom">
            <div class="requirements-card">
                <h3 class="requirements-title">Ketentuan</h3>
                <ul class="requirements-list">
                    <li>Peserta yang menginap di Aston dan Swissbell Hotel akan disediakan shuttle bus mulai pukul 17:30-18:30 WIB untuk keberangkatan ke Radisson Hotel.</li>
                    <li>Dresscode: <strong>Vibrant Monochromatic</strong></li>
                    <li>Akan ada hadiah bagi peserta dengan dresscode terbaik-dresscode kategori individu dan dresscode group.</li>
                    <li>Pada saat registrasi, Karyawan akan dibagikan gelang sebagai tanda pengenal.</li>
                </ul>
            </div>
        </div>

        <!-- Dresscode Section -->
        <div class="dresscode-section uk-margin-large-bottom">
            <div class="dresscode-header uk-text-center uk-margin-large-bottom">
                <h1 class="dresscode-title">DRESSCODE GALA DINNER</h1>
                <div class="venue-info uk-margin-medium-top">
                    <h3 class="venue-name">BALLROOM RADISSON HOTEL</h3>
                    <div class="time-badge">18.30 - 00.15 WIB</div>
                </div>
            </div>

            <!-- Theme Section -->
            <div class="theme-section uk-text-center uk-margin-large-bottom">
                <h2 class="theme-title">THEME: VIBRANT MONOCHROMATIC</h2>
                <div class="theme-description">
                    <p>Outfit dengan warna <em>vibrant</em> satu warna <em>head to toe</em></p>
                    <p class="group-rule"><strong>Peserta grup tidak harus satu warna divisi (min. 5 orang per grup)</strong></p>
                </div>
            </div>

            <!-- Dresscode Images -->
            <div class="dresscode-images uk-margin-large-bottom uk-text-center">
                <img src="imgs/dresscode/gala-dinner.png" alt="Dresscode Examples" class="dresscode-example-img">
                <div class="warning-box uk-margin-top">
                    <div class="warning-label">WARNING</div>
                    <div class="forbidden-colors">
                        <strong>Forbidden Color:</strong><br>
                        Dark Color like Black, Grey, Navy Blue, Dark Brown, and White
                    </div>
                </div>
            </div>

            <!-- Criteria Section -->
            <div class="criteria-section uk-margin-large-bottom">
                <h2 class="criteria-title">KRITERIA DRESSCODE</h2>
                <ul class="criteria-list">
                    <li>Outfit <strong>monochromatic look</strong> satu warna <strong>head to toe</strong>.</li>
                    <li>Tampil <strong>standout!</strong> Warna <em>vibrant</em> dan meriah.</li>
                    <li>Terdapat <strong>aksesoris penunjang</strong> yang sesuai tema</li>
                </ul>
            </div>

            <!-- Competition Mechanism -->
            <div class="competition-section uk-margin-large-bottom">
                <h2 class="competition-title">MEKANISME PEMILIHAN BEST DRESSCODE</h2>
                <ul class="competition-list">
                    <li>Peserta akan difoto oleh fotografer & panitia: 18.30-20.30 WIB untuk kemudian dinilai oleh juri</li>
                    <li>Peserta juga dapat mengunggah foto diri/grupnya secara mandiri ke <em>link folder</em> (menyusul) pada pukul 18.30-20.30 WIB untuk kemudian dinilai oleh juri</li>
                    <li>Penilaian oleh juri: 20.30-21.00 WIB</li>
                    <li>Keputusan pemenang bersifat final</li>
                </ul>
                
                <div class="category-badge">
                    <div class="category-title">KATEGORI BEST DRESSCODE:</div>
                    <div class="category-text">BEST DRESSCODE INDIVIDU 1,2,3,4,5<br>BEST DRESSCODE GROUP 1,2,3</div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/logo-bottom.php'; ?>
</div>

<style>
.gala-dinner-page {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.gala-header {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    color: white;
    padding: 40px 20px;
    border-radius: 15px;
    margin-bottom: 30px;
}

.gala-title {
    font-size: 4rem;
    font-weight: bold;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    letter-spacing: 2px;
}

.venue-name {
    font-size: 1.5rem;
    margin: 10px 0;
    font-weight: 600;
    color: #fff;
}

.time-badge {
    background: #ff6b35;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: bold;
    font-size: 1.2rem;
    display: inline-block;
    box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
}

.schedule-table {
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    overflow: hidden;
}

.schedule-header {
    background: #1e3c72;
    color: white;
}

.schedule-header th {
    padding: 20px;
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
}

.time-column {
    width: 25%;
}

.activity-column {
    width: 75%;
}

.time-cell {
    background: #f8f9fa;
    font-weight: bold;
    text-align: center;
    vertical-align: top;
    padding: 20px;
    font-size: 1.1rem;
    color: #1e3c72;
}

.activity-cell {
    padding: 20px;
    font-size: 1rem;
    line-height: 1.6;
}

.sub-activity {
    margin-top: 15px;
    padding: 8px 15px;
    background: #e3f2fd;
    border-left: 4px solid #2196f3;
    font-weight: 500;
    border-radius: 0 8px 8px 0;
}

.requirements-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    border-left: 5px solid #ff6b35;
}

.requirements-title {
    color: #1e3c72;
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.requirements-list {
    list-style: none;
    padding: 0;
}

.requirements-list li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 30px;
    line-height: 1.6;
}

.requirements-list li:before {
    content: "•";
    color: #ff6b35;
    font-weight: bold;
    position: absolute;
    left: 0;
    font-size: 1.5rem;
}

.dresscode-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 40px 20px;
    border-radius: 20px;
    color: white;
}

.dresscode-title {
    font-size: 3.5rem;
    font-weight: bold;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    letter-spacing: 2px;
}

.theme-title {
    font-size: 2.5rem;
    color: #87ceeb;
    font-weight: bold;
    margin-bottom: 20px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.theme-description p {
    font-size: 1.2rem;
    margin: 10px 0;
}

.group-rule {
    color: #ffeb3b !important;
    font-weight: bold;
}

.dresscode-example-img {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.warning-box {
    background: #ff6b35;
    padding: 20px;
    border-radius: 15px;
    max-width: 400px;
    margin: 20px auto;
    transform: rotate(-2deg);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.warning-label {
    background: black;
    color: #ff6b35;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 1.1rem;
    margin-bottom: 10px;
    display: inline-block;
}

.forbidden-colors {
    color: white;
    font-size: 1rem;
    line-height: 1.4;
}

.criteria-title, .competition-title {
    color: #87ceeb;
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.criteria-list, .competition-list {
    list-style: none;
    padding: 0;
    background: rgba(255,255,255,0.1);
    padding: 25px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
}

.criteria-list li, .competition-list li {
    padding: 12px 0;
    position: relative;
    padding-left: 30px;
    line-height: 1.6;
    font-size: 1.1rem;
}

.criteria-list li:before, .competition-list li:before {
    content: "•";
    color: #87ceeb;
    font-weight: bold;
    position: absolute;
    left: 0;
    font-size: 1.5rem;
}

.category-badge {
    background: #ffd700;
    color: #1e3c72;
    padding: 20px;
    border-radius: 20px;
    text-align: center;
    margin-top: 30px;
    box-shadow: 0 5px 20px rgba(255, 215, 0, 0.3);
    transform: rotate(1deg);
}

.category-title {
    font-weight: bold;
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.category-text {
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1.4;
}

@media (max-width: 768px) {
    .gala-title {
        font-size: 2.5rem;
    }
    
    .dresscode-title {
        font-size: 2rem;
    }
    
    .theme-title {
        font-size: 1.8rem;
    }
    
    .time-cell, .activity-cell {
        padding: 15px 10px;
        font-size: 0.9rem;
    }
    
    .gala-header {
        padding: 30px 15px;
    }
    
    .dresscode-section {
        padding: 30px 15px;
    }
    
    .warning-box {
        transform: none;
        margin: 20px 0;
    }
    
    .category-badge {
        transform: none;
        margin: 20px 0;
    }
}
</style> 