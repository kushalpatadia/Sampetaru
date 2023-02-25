<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".%delaytime%s">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <center>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse%count%" aria-expanded="true" aria-controls="collapse%count%">
              <b>%startlocation% To %endlocation% %Symbol%</b>
            </a>
        </center>
        </h4>
    </div>
    <div id="collapse%count%" class="panel-collapse collapse in" role="tabpane%count%" aria-labelledby="heading%count%">
        <div class="panel-body">
        <center>
            <table style="align: center;">
                <!-- <tr>
                    <th colspan="4" class="center" style="color: green;"><b>YOUR POST DETAILS</b></th>
                </tr> -->
                <tr>
                    <th colspan="2" style="color: gold;">STARTING</th>
                    <th colspan="2" style="color: gold;">STOP</th>
                </tr>
                <tr>
                    <td><b>Location:</b></td>
                    <td>%startlocation%</td>
                    <td>Location:</td>
                    <td>%endlocation%</td>
                </tr>
                <tr>
                    <td>DATE:</td>
                    <td>%startdate%</td>
                    <td>DATE:</td>
                    <td>%enddate%</td>
                </tr>
                <tr>
                    <td>TIME:</td>
                    <td>%starttime%</td>
                    <td>TIME:</td>
                    <td>%endtime%</td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td colspan="2" style="text-align: right;">TRANSPORTATION BY:</td>
                    <td colspan="2">%transportation%</td>
                </tr>
                <tr>
                    <td colspan="2">ESTIMETED CARRING WEIGHT:</td>
                    <td colspan="2">%weight%</td>
                </tr>
                <tr>
                    <th>STOPS:</th>
                    <td>%stop1%</td>
                    <td>%stop2%</td>
                    <td>%stop3%</td>
                </tr>
            </table>
            <div>
                <div class="row">
                <div class="container"">
                    <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <button data-toggle="modal" data-target="#myModal%p_id%" style="width:175px;height:45px;background-color:gold;color:white;border:none;font-size:20px; border-radius:5px;">Update Post</button>
                        </div>
                    <div class="col-md-3">
                        <form method="GET" action="{SITE_MOD}deletepost-nct/">
                            <button name="id" value="%p_id%" style="width:175px;height:45px;background-color:gold;color:white;border:none;font-size:20px; border-radius:5px;float:left;">Delete Post </a>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </center>
        </div>
    </div>
</div>
<!-- model -->
<div class="modal fade" id="myModal%p_id%" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Form</h4>
        </div>
        <div class="modal-body">
<form>
<input type="hidden" name="hiddenvariable" value="%p_id%">
<center><h4>POST INFORMATION</h4></center>
<div class="form-group">
<label>Start Location</label>
<input type="text" class="form-control" placeholder="From*" name="from_city" value="%startlocation%" required="">
</div>
<div class="form-group">
<label>End Location</label>
<input type="text" class="form-control" placeholder="To" name="end" value="%endlocation%" required="">
</div>
<div class="form-group">
<label>Start Date</label>
<input type="text" class="form-control" placeholder="Start Date" name="StartDate" value="%startdate%" required="">
</div>
<div class="form-group">
<label>End Date</label>
<input type="text" class="form-control" placeholder="End Date*" name="EndDate" value="%enddate%" required="">
</div>

<h4>Aditional information</h4><br>

<div class="form-group">
<label>Current Way of travelling : </label> %transportation%
<label>Select Way of travelling(if you want to change) : </label>
<input type="radio" name="travellingradio" value="Train">train
<input type="radio" name="travellingradio" value="Bus">bus
<input type="radio" name="travellingradio" value="Air">Air
</div>

<div class="form-group">
<label>Stops before destination</label>
<input type="text" class="form-control" name="stop1" placeholder="First Stop" value="%stop1%">
<input type="text" class="form-control" name="stop2" placeholder="Second Stop" value="%stop2%">
<input type="text" class="form-control" name="stop3" placeholder="Third Stop" value="%stop3%">
</div>
<div class="form-group">
<label>Estimations</label>
<input type="text" class="form-control" name="eStartTime" placeholder="Possible star5 time" required="" value="%starttime%">
<input type="text" class="form-control" name="eEndTime" placeholder="Possible end time" required="" value="%endtime%">
<input type="text" class="form-control" name="eWeight" placeholder="estimated Carrying weight*" required="" value="%weight%">
</div>
<input type="submit" value="Submit" name="btnupdate" class="btn btn-success btn-block btn-lg">
</form>


        </div>
    </div>
      
    </div>
</div>

<style type="text/css">
    .center
    {
        text-align: center;
    }
</style>