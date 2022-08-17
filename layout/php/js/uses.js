function uses() {
    $('#c_power').submit(function(e) {

        // console.log($(this).serialize());
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'layout/php/action/uses.php',
            dataType: "json",
            success: function(data) {
                window.location.href = "#ouses";
            }
        });
    });
}