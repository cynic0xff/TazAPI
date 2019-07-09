<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Check</h3>
                        </div>
                        <div class="card-body">
                            <form class="loginform" role="form" autocomplete="off" id="loginform" novalidate="" method="POST">
                            <div class="form-group">
                                    <label for="fname">First name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="fname" id="fname" required="" value="Joe">
                                    <div class="invalid-feedback">Please enter your first name.</div>
                            </div>

                            <div class="form-group">
                                    <label for="mname">Middle name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="mname" id="mname" value="Kurt">
                            </div>

                            <div class="form-group">
                                    <label for="lname">Last name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="lname" id="lname" required="" value="Tank">
                                    <div class="invalid-feedback">Please enter your last name.</div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Gender
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Female</a>
                                    <a class="dropdown-item" href="#">Male</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ssn">SSN</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="ssn" id="ssn" required="" value="111-22-3333">
                                <div class="invalid-feedback">Oops, you missed this one.</div>
                            </div>
                                



                                <GivenName>Joe</GivenName>
            <MiddleName>Kurt</MiddleName>
            <FamilyName>Tank</FamilyName>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Check</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'check.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                if (jsonData.success == "1")
                {
                    alert('Success...');

                } else if(jsonData.success == "2") {

                    alert('Pending for ' + $('#ssn').val());
                }
                else
                {
                    alert('Failed...');
                }
           }
       });
     });
});
</script>
</body>
</html>