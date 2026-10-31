<html>
<head>
	<title>Check</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
<form method="post" enctype="multipart/form-data" action="" id="eng">
	<input id="in_image"  type="file" name="img[]" multiple>
<input type="submit" name="done">

</form>

<script>
    
    
    document.getElementById('in_image').addEventListener('change',function()
    {
        sendImage();
    });
    function sendImage()
    {
        formData = new FormData($("#eng")[0]);
        formData.append("myname",document.getElementsByName('img')[0]);
        $.ajax({
            url : "ck_req.php",
            type : "post",
            processData: false,
            contentType: false,
            data :  formData,
            success : function(response)
            {
                  console.log(response);
            }
        });
        
        
    }
    
</script>


</body>