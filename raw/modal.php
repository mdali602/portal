<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example of Bootstrap 3 Modals</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    
</head>
<body>
<!-- <button type="button" class="btn btn-info" data-dismiss="modal" aria-hidden="true">&times;</button> -->

<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('toggle');
    });
</script>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
        
            <div class="modal-body">
                <p>Thanks for applying....</p>
                <p>You will be notified soon!</p>
                <!-- <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p> -->
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-default"><a href="update_profile.php">O.K.</a></button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        
        </div>
    </div>
</div>

</body>
</html>                                     