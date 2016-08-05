$(document).ready(function(){

    $.ajax({
        type: "GET",
        url: 'server.php',
        dataType: 'json',
        data: "type=borough",
        success: function(borough){
            for (var i = 0; i < borough.length; i++) {
                $('#borough').append('<option>' + borough[i] + '</option>');
            };
            $('#borough > option:first-child').attr('disabled', "");
        },
        error: function(){
            console.log('error Ajax');
        }
    });

    $('#borough').change(function(){
        var borough_select = $(this).children('option:selected').text();
        $.ajax({
            type: "GET",
            url: 'server.php',
            dataType: 'json',
            data: "type=block&borough=" + borough_select,
            success: function(block){
                for (var i = 0; i < block.length; i++) {

                    $('#block').append('<option>' + block[i] + '</option>');
                };
            },
            error: function(){
                console.log('error Ajax');
            }
        });
    })

    $('#search').click(function(){
        $.ajax({
            type: "GET",
            url: 'server.php',
            dataType: 'json',
            data: "type=search",
            success: function(results){
                $('.results img').hide();
                for (var i = 0; i < results.length; i++) {
                    $('#results__list').append('<div>' + results[i] + '</div>');
                };
            },
            beforeSend: function() {
                $(this).attr('disabled', 'disabled');
                $('.results').show();
                $("html:not(:animated),body:not(:animated)").animate({scrollTop: $('.results').offset().top}, 300);;
            },
            error: function(){
                console.log('error Ajax');
            }
        });
    })
});





        /*beforeSend: function() {
            form.find('input[type="submit"]').attr('disabled', 'disabled');
            $('.cssload-progress').removeClass('unvisible');
        },
        success: function(data){
            if (data['error'] == 0) {
                $('section').css('display','none');
                $('#regForm').modal('hide');
                $('.thank-back').css('display','block');
            } else{
                console.log(data['error']);
            };
         },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        },
        complete: function(data) {
            form.find('input[type="submit"]').prop('disabled', false);
            $('.cssload-progress').addClass('unvisible');
        }*/
