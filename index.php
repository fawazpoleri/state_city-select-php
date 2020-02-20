<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#state").change(function(){
                var state_id=$(this).val();
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{stateID:state_id},
                    success:function(data){
                        $("#district").html(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
<center>
<div width="100px">
<select name="state" padding-top = "2px" margin="auto" id="state">
<option> Select a State</option>
<?php
while ($rows = $result->fetch_assoc())
{
$state_name = $rows[ 'state_name' ];
$state_id = $rows[ 'id' ];
?>
<option value="<?= $state_id; ?>"><?= $state_name; ?></option>
<?php } ?>
</select>
<select name="district" padding-top = "2px" margin="auto" id="district">
<option> Select a State</option>
</select>
</div>
</center>
</body>
</html>