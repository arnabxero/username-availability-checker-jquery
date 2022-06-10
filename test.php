<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script src="lib/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
        function checkAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "subdir/check_availability.php",
                data: 'username=' + $("#username").val(),
                type: "POST",
                success: function(data) {
                    setTimeout(function() {
                        $("#user-availability-status").html(data);
                        $("#loaderIcon").hide();
                    }, 1000);
                },
                error: function() {}
            });
        }
    </script>




    <div id="frmCheckUsername">
        <label>Check Username:</label>
        <input name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()"><span id="user-availability-status"></span>
    </div>
    <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>


</body>

</html>