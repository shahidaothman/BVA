<script type="text/javascript">
    $(document).ready(function() {
        // var test = 0.048 * 200;
   
        $('#c_uses').submit(function(e) {    
         alert("here");
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
    });

    </script>