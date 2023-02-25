<!-- sign-in -->
	<div class="sign-in">
		<div class="container">
			<div class="sign-in-form">
				<div class="in-form">
					<h3>Sign in your Account</h3>
					<p class="use">Having hands on experience in creating innovative 
							designs,I do offer design solutions which harness.</p>
					<form id="form" name="login_form" method="POST">
						<input type="text" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" name="email">
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="" name="password1">
						<div class="ckeck-bg">
							<div class="checkbox-form">
								<center><input type="submit" value="Login" name="Login"></center>
							</div>
						</div>
					</form>
					<div class="new-people">
				<h4>For New People</h4>
				<p>Having hands on experience in creating innovative designs,I do offer design solutions which harness</p>
				<a href="{SITE_MOD}registration-nct/">Register Here</a>
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