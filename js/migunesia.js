$(document).ready(function() {
    // Replace data dynamic
    replaceDataGuest();
});

function replaceDataGuest()
{
    const urlString = window.location.search;
    const urlParams = new URLSearchParams(urlString);
    const GUEST_CODE = urlParams.get('c');

    if (!GUEST_CODE) {
        console.log('Guest code not found');
        return;
    }

    $.ajax({
        url: 'https://sisendi.migunesia.com/idx2025/?get_guest_data=Y&c=' + GUEST_CODE,
        type: 'GET',
        success: function(response) {
            const guest_data = JSON.parse(response);
            const additional_data = JSON.parse(guest_data.additional_data);
            const hotel = {
                'swiss': {
                    'maps': 'https://maps.app.goo.gl/VGuHw4iDr1toFYa67',
                    'foto': 'imgs/location/1.png'
                },

                'radisson': {
                    'maps': 'https://maps.app.goo.gl/NcVPeFRDsWnYQabR6',
                    'foto': 'imgs/location/2.png'
                },

                'aston': {
                    'maps': 'https://maps.app.goo.gl/2zRRnuRCQpqGewak9',
                    'foto': 'imgs/location/3.png'
                },
            };

            // Set hotel image and maps link in akomodasi page if present
            var hotelField = additional_data['4914'];
            var hotelCode = '';

            if(hotelField.toLowerCase().indexOf('swiss') != -1) {
                hotelCode = 'swiss';
            } else if(hotelField.toLowerCase().indexOf('radisson') != -1) {
                hotelCode = 'radisson';
            } else if(hotelField.toLowerCase().indexOf('aston') != -1) {
                hotelCode = 'aston';
            }

            console.log(hotelField, hotelCode);

            if (hotelField && hotel[hotelCode]) {
                // Set hotel image
                $('#foto-hotel').attr('src', hotel[hotelCode].foto);
                // Set maps link
                $('.view-maps-btn a').attr('href', hotel[hotelCode].maps);
            }

            // spesifik 
            $("#qrcode-personal").attr('src', "https://portal.migunesia.com/img/vsimpleqrcode/" + guest_data.code + ".png");

            

            // Replace data dynamic...
            $('.replace-me-value').each(function() 
            {
                if($(this).data('field').indexOf('additional') != -1) {
                    $(this).val(additional_data[$(this).data('field').replace('additional[', '').replace(']', '')]);
                } else {
                    $(this).val(guest_data[$(this).data('field')]);
                }
            });

            // Replace data dynamic
            $('.replace-me-html').each(function() 
            {                
                if($(this).data('field').indexOf('additional') != -1) {
                    $(this).html(additional_data[$(this).data('field').replace('additional[', '').replace(']', '')]);
                } else {
                    $(this).html(guest_data[$(this).data('field')]);
                }
            });
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}