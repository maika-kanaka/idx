<div class="uk-container">
    <?php include 'components/logo.php'; ?>

    <h1 class="uk-heading-large uk-text-center">Absensi</h1>
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-margin-auto">
        <h3 class="uk-text-center">Form Absensi</h3>
        <form class="uk-form-stacked">
            <div class="uk-margin">
                <label class="uk-form-label">Nama Lengkap</label>
                <input class="uk-input" type="text" placeholder="Masukkan nama lengkap">
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">ID Peserta</label>
                <input class="uk-input" type="text" placeholder="Masukkan ID peserta">
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Kegiatan</label>
                <select class="uk-select">
                    <option>Pilih kegiatan</option>
                    <option>Day 1 - City Tour</option>
                    <option>Day 2 - CSR</option>
                    <option>Day 2 - Team Building</option>
                    <option>Day 2 - Gala Dinner</option>
                    <option>Day 3 - Singapore Tour</option>
                </select>
            </div>
            <div class="uk-margin">
                <button class="uk-button uk-button-primary uk-width-1-1">Submit Absensi</button>
            </div>
        </form>
    </div>

    <?php include 'components/logo-bottom.php'; ?>
</div> 