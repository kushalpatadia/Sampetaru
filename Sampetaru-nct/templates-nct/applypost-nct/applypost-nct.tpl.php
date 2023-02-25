<!-- sign-in -->
  <div class="sign-in">
    <div class="container">
      <div class="in-form">
        <h3>Your equirement</h3>
        <p class="use">Having hands on experience in creating innovative 
                designs,I do offer design solutions which harness.</p>
        <br>
        <center><h4>Already have an Account ?<a href="{SITE_MOD}login-nct/">  Sign In »</a> </h4></center>
        <div class="sign-in-form">
          <div class="in-form Personal">
            <h4>Post Information</h4>
            <form method="POST" name="registration_form" id="form">
              <div class="row">
                <div class="col-md-6">
                  <label>Start Location</label>
                  <input type="text" placeholder="From*" name="from_city" value="%from_city%" required=""><br><br>
                </div>
                <div class="col-md-6">
                  <label>End Location</label>
                  <input type="text" placeholder="To" name="end" value="%To%" required=""><br><br>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Start Date</label>
                  <input type="text" placeholder="Start Date" name="StartDate" value="%start_date%" required=""><br><br>
                </div>
                <div class="col-md-6">
                  <label>End Date</label>
                  <input type="text" placeholder="End Date*" name="EndDate" value="%end_date%" required=""><br><br>
                </div>
              </div>
              <h4 class="kij">Additional Information</h4>
              <br>
              <label>Way of travelling:</label>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <input type="radio" name="travellingradio" value="Train" required="">train
                </div>
                <div class="col-md-2">
                  <input type="radio" name="travellingradio" value="Bus">bus
                </div>
                <div class="col-md-2">
                  <input type="radio" name="travellingradio" value="Air">Air
                </div>
              </div>
              <br>
              <label>Stops before destination</label>
              <input type="text" name="stop1" placeholder="First Stop"><br><br>
              <input type="text" name="stop2" placeholder="Second Stop" ><br><br>
              <input type="text" name="stop3" placeholder="Third Stop" ><br><br>
              <h4 class="kij">Estimations</h4>
              <input type="text" name="eStartTime" placeholder="Possible star5 time" required=""><br><br>
              <input type="text" name="eEndTime" placeholder="Possible end time" required=""><br><br>
              <input type="text" name="eWeight" placeholder="estimated Carrying weight*" required=""><br><br>
              <input type="submit" value="post" name="post" class="btn-block">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- //sign-in -->