<!-- sign-in -->
	<div class="sign-in">
		<div class="container">
			<div class="in-form">
				<h3>Register Here</h3>
				<p class="use">Having hands on experience in creating innovative 
								designs,I do offer design solutions which harness.</p>
				<br>
				<center><h4>Already have an Account ?<a href="{SITE_MOD}login-nct/">  Sign In »</a> </h4></center>
				<div class="sign-in-form">
					<div class="in-form Personal">
						<h4>Personal Information</h4>
						<form method="POST" name="registration_form" id="form">
							<input type="text" placeholder="Firstname*" name="fname" required=""><br><br>
							<input type="text" placeholder="Lastname*" name="lname" required=""><br><br>
							<input type="text" placeholder="Emailaddress*" name="email" required=""><br><br>
							<input type="text" placeholder="Occupation*" name="occupation" required=""><br><br>
							<input type="text" placeholder="Birthdate*" name="b_date" id="b_date" required=""><br><br>
							<h4 class="kij">User Address</h4>
							<input type="text" name="address1" placeholder="Block / street Address" required=""><br><br>
							<input type="text" name="area" placeholder="Area*" required=""><br><br>
							<input type="text" name="city" placeholder="City*" required=""><br><br>
							<input type="text" name="pincode" placeholder="Pincode" required=""><br><br>
							<input type="text" name="state" placeholder="State*" required=""><br><br>
							<input type="text" name="country" placeholder="Country*" required=""><br><br>
							<h4 class="kij">Adhar Card Verification</h4>
							<div class="">
								<!-- <div class="col-sm-4 inputs"> -->
									<input type="text" class="inputs" name="adhar1" placeholder="1111" maxlength="4">
								<!-- </div> -->
								<!-- <div class="col-sm-4 inputs"> -->
									<input type="text" class="inputs" name="adhar2" placeholder="1111" maxlength="4">
								<!-- </div> -->
								<!-- <div class="col-sm-4 inputs"> -->
									<input type="text" class="inputs" name="adhar3" placeholder="1111" maxlength="4">
									<button type="button" class="btn btn-default inputs">Verify</button>
								<!-- </div> -->
							</div>
									
							<h4 class="kij">Login Information</h4>
							<input type="password" placeholder="Password*" name="password" id="password">
							<input type="password" placeholder="Confirm Password*" name="password2">
							<input type="text" name="phone_no" id="phone_no" placeholder="Mobileno*">
							<br>
							<input type="submit" value="submit" name="submit" class="btn-block">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //sign-in -->
<!-- register form validation -->

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>     
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<style type="text/css">
.my-error-class {
    color:red;
    padding-left: 12px;
    font-size: 15px;
}
.my-valid-class {
    color:green;
}
.inputs
{
	width: 20% !important;
}
</style>
<script>
  jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Letters only please");
    $(function() {

      $("#form").validate({
          errorClass: "my-error-class",
          validClass: "my-valid-class",
        rules: {
          fname:{
              required:true,  
              lettersonly:true
          },
          lname:{
              required:true,  
              lettersonly:true
          },
          email: {
            required:true,
            email:true,
            minlength:7
          },
          password: {
              required:true,
              minlength:5
          },
          password2: {
              required:true,
              minlength:5,
              equalTo:"#password"
          },
          phone_no: {
              required:true,
              minlength:10,
              maxlength:10,
              number: true  
          }
        },
        messages:{
          fname:{
            required:'Please Enter First Name',
            lettersonly:'Only Characters are allowed'
          },
          lname:{
            required:'Please Enter Last Name',
            lettersonly:'Only Characters are allowed'
          },
          email: {
            required: 'Please Enter an Email address',
            email:'Please Enter an Valid Email address'
          },
          password2: {
            required:'please comfirm password',
            minlength:'password should be 5 char long',
            equalTo:'Password Does Not Match'
          },
          phone_no: {
            required: 'Please Enter Mobile Number',
            maxlength: 'Must use Mobile Number Only',
            minlength: 'Must use Mobile Number Only' 
          }
        }
       });
   });

</script>

<!-- register form validation end -->
<script type="text/javascript">
$(".inputs").keyup(function () {
if (this.value.length == this.maxLength) {
var $next = $(this).next('.inputs');
if ($next.length)
  $(this).next('.inputs').focus();
else
  $(this).blur();
}
});
</script>
<!---strat-date-piker-- -->
  <link rel="stylesheet" href="{SITE_CSS}jquery-ui.css" />
  <script src="{SITE_JS}js/jquery-ui.js"></script>
    <script>
        $(function() {
        $( "#b_date").datepicker({dateFormat: 'yy-mm-dd'});

        });
    </script>
<!---/End-date-piker--