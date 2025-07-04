<div class="uk-container qr-page-container">
    <?php include 'components/logo.php'; ?>
    <h1 class="uk-heading-large uk-text-center qr-title">QR Code</h1>
    <div class="uk-text-center uk-margin-large-top">
        <div style="max-width: 80vw;" class="uk-card uk-card-default uk-card-body uk-width-1-3@m uk-margin-auto qr-card" style="border-radius: 40px;">
            <img src="" alt="QR Code" class="qr-image" id="qrcode-personal">
        </div>
    </div>

    <?php include 'components/logo-bottom.php'; ?>
</div> 

<style>
    #qrcode-personal {
        max-width: 320px;
    }

    @media (max-width: 768px) {
        #qrcode-personal {
            max-width: 260px;
        }
    }
</style>