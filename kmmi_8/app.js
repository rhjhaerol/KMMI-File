$(document).ready(function() {

    $('#btn-time').on({
        click: function(event) {
            $.ajax({
                type: "POST",
                url: "api/get_time.php",
                dataType: "json",
                encode: true,
            }).done(function(data) {
                $("#server-time-box").html(
                    data.formatted
                );
            }).fail(function(data) {
                $("#server-time-box").html(
                    'Could not reach server, please try again later.'
                );
            });
        }
    });

    $('#currency').submit(function(event) {

        var current_amount = $('#current-amount').val();

        $.ajax({
            type: "POST",
            url: "api/currency.php",
            data: {
                value: current_amount
            },
            dataType: "json",
            encode: true,
        }).done(function(data) {
            $("#currency-result-box").html(
                data.result
            );
        }).fail(function(data) {
            $("#currency-result-box").html(
                'Could not reach server, please try again later.'
            );
        });

        event.preventDefault();
    });

    $("#login").click(function(){
    
        var action = $("#lg-form").attr('action');
        var form_data = {
            username: $("#login_username").val(),
            password: $("#login_password").val(),
            is_ajax: 1
        };

        $.ajax({
            type: "POST",
            url: action,
            data: form_data,
            success: function(response)
            {
                if(response == "success")
                    $("#lg-form").slideUp('slow', function(){
                        $("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
                    });
                else
                    $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
            }
        });
        return false;
    });

    $('#login-app').submit(function(event) {

        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();

        $.ajax({
            type: "POST",
            url: "api/login.php",
            data: {
                username: username,
                password: password
            },
            dataType: "json",
            encode: true,
        }).done(function(data) {

            $('#login-infobox').css('display', 'block');

            $("#login-infobox-success").html(data.success ? 'Success' : 'Error');
            $("#login-infobox-message").html(data.message);

            if (data.success) {
                $(location).prop('href', 'dashboard.php');
            }

        }).fail(function(data) {
            $('#login-infobox').css('display', 'block');
            $("#login-infobox-success").html('Error!');
            $("#login-infobox-message").html('Could not reach server, please try again later.');
        });

        event.preventDefault();
    });

    $('#data-table-filter').submit(function(event) {

        var search = $('#data-table-filter-text').val();

        $.ajax({
            type: "POST",
            url: "api/get_data.php",
            data: {
                search: search
            },
            dataType: "json",
            encode: true,
        }).done(function(result) {

            $("#tbody-data-table").empty();

            var count = 1;

            result.data.forEach(element => {
                $("#tbody-data-table").append(`<tr><td>${count}</td><td>${element[0]}</td><td>${element[1]}</td></tr>`);
                count++;
            });

            $('#infobox-total-data').html(result.total);
            $('#infobox-total-row').html((count - 1));

        }).fail(function(result) {

            $("#tbody-data-table").empty();

        });

        event.preventDefault();
    });

    setTimeout(() => {
        $('#btn-time').trigger('click');
    }, 1000);

    setTimeout(() => {
        $('#data-table-filter').trigger('submit');
    }, 1000);

});