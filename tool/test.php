<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form>
<select id="first" >
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
    <option value="4" selected>Option 4 </option>
</select>
<select id="second">
</select>
<div id="msg"></div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $('#first').change(function()
    {
        populateSecond();
    });
    $('#second').change(function()
    {
        addToDB();
    });
    function populateSecond()
    {
        var first = $('#first').val();
        var req = $.post('getSelect2.php', {val: first});
        req.done(function(data)
        {
            $('#second').html(data);
            $('#msg').html('Second dropdown populated with data from option ' + first + ' in first dropdown');
        });
    }
    function addToDB()
    {
        var first = $('#first').val();
        var second = $('#second').val();
        if(second != "0")
        {       
            var req = $.post('addToDB.php', {val1: first, val2: second});
            req.done(function(data)
            {
                $('#msg').html(data);
            });
        }
    }
    //run this on page load
    populateSecond();
</script>
</body>
</html>