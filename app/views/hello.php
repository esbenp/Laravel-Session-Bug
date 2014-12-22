<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var csrfTokenField = $("input[type=hidden][name=_token]");
        var csrfToken = csrfTokenField.val();
        csrfTokenField.remove();

        for(var i = 0; i < 50; i++) {
            $.ajax({
                url: "/test-route",
                method: "GET",
                headers: {
                    "X-CSRF-Token": csrfToken
                }
            });
        }
    });
    </script>
</head>
<body>

    <?php echo(Form::token()) ?>

</body>
</html>
