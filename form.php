<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- cal -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Gender
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Female</a>
                                    <a class="dropdown-item" href="#" value="M" selected>Male</a></li></a>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="datepicker">DOB</label>
                                <input id="datepicker" width="276" value="1974-01-20" />
                                <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                                <div class="invalid-feedback">Select a dob.</div>
                            </div>
                            <div class="form-group">
                                <label for="ssn">SSN</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="ssn" id="ssn" required="" value="111-22-3333">
                                <div class="invalid-feedback">Enter the SSN.</div>
                            </div>

                            <div class="form-group">
                                <label for="address1">Address</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="address" id="address1" required="" value="1725 Slough Avenue">
                                <div class="invalid-feedback">Enter the address.</div>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="city" id="city" required="" value="Scranton">
                                <div class="invalid-feedback">Enter the city.</div>
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="state" id="state" required="" value="PA">
                                <div class="invalid-feedback">Enter the state.</div>
                            </div>

                            <div class="form-group">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="zip" id="zip" required="" value="18505">
                                <div class="invalid-feedback">Enter the address.</div>
                            </div>

                            <div class="form-group">
                                <label for="state" class="control-label">State</label>
                                    <select class="form-control" id="state" name="state">
                                        <option value="">N/A</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DC">District of Columbia</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="IA">Iowa</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MD">Maryland</option>
                                        <option value="ME">Maine</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MT">Montana</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NY">New York</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA" selected>Pennsylvania</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VA">Virginia</option>
                                        <option value="VT">Vermont</option>
                                        <option value="WA">Washington</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="" value="test@noemail.com">
                                <div class="invalid-feedback">Enter the address.</div>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="phone" id="phone" required="" value="717-555-0177">
                                <div class="invalid-feedback">Enter the address.</div>
                            </div>

                            

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