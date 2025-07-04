<style>
    @media (max-width: 768px) {
        #uk-grid-akomodasi {
            margin-left: -30px !important;
        }
    }
</style>

<div class="uk-container">
    <?php include 'components/logo.php'; ?>
    
    <h1 class="uk-heading-large uk-text-center uk-margin-large-bottom">Akomodasi</h1>
    
    <div class="uk-flex uk-flex-center">
        <div class="uk-grid-match uk-grid-medium" id="uk-grid-akomodasi" uk-grid style="width:100%; max-width: 500px; margin-left: 15px; margin-bottom: 100px;">

            <!-- START: Hotel Batam -->
            <div>
                <div class="uk-card uk-card-default hotel-card uk-box-shadow-medium">
                    <div class="uk-card-media-top">
                        <img id="foto-hotel" src="imgs/location/1.png" alt="Swiss-Belhotel Harbour Bay" uk-cover>
                        <canvas width="400" height="300"></canvas>
                    </div>

                    <div class="uk-card-body uk-text-center">
                        <h3 class="uk-card-title uk-margin-small-bottom replace-me-html" data-field="additional[4914]" style="color: #333; font-weight: 600; font-size: 1.25rem;">
                            -
                        </h3>
                        
                        <div style='border: 2px solid #fff; border: 1px solid #22605b; border-radius: 30px; margin-bottom: 15px;'>
                            <div class="uk-margin-small-top uk-margin-small-bottom">
                                <span class="uk-badge uk-text-small" style="background-color: #f0f0f0; color: #000 !important; padding: 4px 12px; border-radius: 12px; font-weight: 500;">Roommate</span>
                            </div>
                            
                            <h4 class="uk-margin-small-bottom replace-me-html" data-field="additional[4915]" style="margin-top: 0px; color: #333; font-weight: 600; font-size: 1.1rem;">
                                -
                            </h4>
                        </div>

                        <div style='border: 2px solid #fff; border: 1px solid #22605b; border-radius: 30px; margin-bottom: 15px;'>
                            <div class="uk-margin-small-top uk-margin-small-bottom">
                                <span class="uk-badge uk-text-small" style="background-color: #e8f4f3; color: #000 !important; padding: 4px 12px; border-radius: 12px; font-weight: 500;">Asal Divisi Roommate</span>
                            </div>
                            
                            <h4 class="uk-margin-small-bottom replace-me-html" data-field="additional[4916]" style="margin-top: 0px; color: #333; font-weight: 600; font-size: 1.1rem;">
                                -
                            </h4>
                        </div>
                        
                        <div class="uk-margin-top">
                            <button class="view-maps-btn uk-button uk-button-small">
                                <a href="" target="_blank" style="color: white; text-decoration: none;">VIEW MAPS</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hotel Batam -->

        </div>
    </div>

    <?php include 'components/logo-bottom.php'; ?>
</div> 