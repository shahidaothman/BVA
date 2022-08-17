function uses() {
    $('#calculate_form').submit(function(e) {
        // console.log($(this).serialize());
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'layout/php/action/uses.php',
            data: $(this).serialize(),
            dataType: "json",
            success: function(data) {
                console.log (data);
                window.location.href = "#ouses";
            }
        });
    });
}