<html>
<style>
    .myDiv {
        display: none;
        padding: 10px;
        margin-top: 20px;
    }

</style>

<body bgcolor="pink">
    <div id="overlay">
        <div id="popup">

            <?php
            if (isset($_SESSION['status'])) {
            ?>
                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->
            <?php
                unset($_SESSION['status']);
            }
            ?>
            <h4 id="fill-out-the-form-below-to-access-the-report " class="avantgarde-medium text-stratus text-left avant-garde-demi col-xs-12 col-lg-12 margin-10-bottom-lg margin-0-bottom-xs " data-qe="form-header ">
                <span class="header-text " style="color: #544d4d; font-size: 30px;">DON'T WAIT, GET THE PRICE NOW!<span class="close" onclick="document.getElementById('overlay').style.display='none'" style="color: #000000;">&times;</span></span>
            </h4>

            <!-- form -->
            <form action="db/popup.php" method="POST" class="form-builder-form sfdc-form-adaptive-label" data-sfdc-form="dynamic:true,signup:false,event:false,paginated:false,formType:lead,cookieRead:true,cookieWrite:true,closeTimeout:-1,minHeight:,disableDB:false,locale:en_in,submitEvent:">
                <!-- <form method="Post" action="db/getquote" class="form-builder-form sfdc-form-adaptive-label" data-sfdc-form="dynamic:true,signup:false,event:false,paginated:false,formType:lead,cookieRead:true,cookieWrite:true,closeTimeout:-1,minHeight:,disableDB:false,locale:en_in,submitEvent:"> -->
                <div class="fields-container section">
                    <div class="fields-wrapper clearfix">
                        <div class="field-container-50">
                            <div class="firstName textFieldInput section">
                                <div class="field">
                                    <!-- <label id="fname" class="placeholder">First name</label> -->
                                    <input type="text" name="fname" aria-required="true" required="true" aria-labelledby="fname" placeholder="First Name" />
                                    <span class="error-msg">Enter your first name</span>
                                </div>
                            </div>
                        </div>
                        <div class="field-container-50">
                            <div class="lastName textFieldInput section">
                                <div class="field">
                                    <!-- <label id="UserLastName" class="placeholder">Last name</label> -->
                                    <input id="lname" type="text" name="lname" aria-required="true" required="true" aria-labelledby="UserLastName" placeholder="Last Name" />
                                    <span class="error-msg">Enter your last name</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="emailInput textFieldInput section">
                    <div class="field">
                        <!-- <label id="UserEmail" class="placeholder">Work Email</label> -->
                        <input id="email" type="email" name="email" aria-required="true" required="true" aria-labelledby="UserEmail" placeholder="Email" />
                        <!-- <span class="error-msg">Enter a valid email address</span> -->
                    </div>
                </div>
                <div class="phoneInput textFieldInput section">
                    <div class="field">
                        <!-- <label id="UserPhone" class="placeholder">Phone</label> -->
                        <input id="phone" type="tel" name="phone" aria-required="true" required="true" aria-labelledby="UserPhone" placeholder="Phone Number" />
                        <span class="error-msg">Enter a valid phone number</span>
                    </div>
                </div>

                <!-- <div class="product textFieldInput section"> -->
                <div class="field" style="padding-top:20px; width:100%;">
                    <select id="myselection" class="product textFieldInput section">
                        <option>Select Product</option>
                        <option value="boltingtools">Bolting Tools</option>
                        <option value="insitumachining">In Situ Machining</option>
                        <option value="tubetools">Tube Tools</option>
                    </select>

                    <!-- Bolting Tools -->
                    <div id="showboltingtools" class="myDiv" style="color: #000000">
                        <div class="mydiv1">
                            <div id="sshowtorquewrench">
                                <p style="color:#000000"><strong>Torque Wrenches</strong></p>
                                <input type="checkbox" name="product[]" value="TSL Series Square Drive Hydraulic Torque Wrenches - 112 Nm to 69427 Nm">TSL Series Square Drive Hydraulic Torque Wrenches - 112 Nm to 69427 Nm</label><br>
                                <input type="checkbox" name="product[]" value="THL Series Low Profile Hydraulic Torque Wrenches - 293 Nm to 53512 Nm">THL Series Low Profile Hydraulic Torque Wrenches - 293 Nm to 53512 Nm</label><br>
                                <input type="checkbox" name="product[]" value="THL Series Ultra Slim Low Profile Hydraulic Torque Wrenches - 260 Nm to 5925 N">THL Series Ultra Slim Low Profile Hydraulic Torque Wrenches - 260 Nm to 5925 Nm</label><br><br>
                            </div>

                            <div id="sshowbolttensioner">
                                <p style="color:#000000"><strong>Bolt Tensioners</strong></p>
                                <input type="checkbox" name="product[]" value="BTL Series Top Side Tensioners - 234 kN to 5406 kN">BTL Series Top Side Tensioners - 234 kN to 5406 kN</label><br>
                                <input type="checkbox" name="product[]" value="SLT Series Spring Return Hydraulic Bolt Tensioners - 160 kN to 3200 kN">SLT Series Spring Return Hydraulic Bolt Tensioners - 160 kN to 3200 kN</label><br>
                                <input type="checkbox" name="product[]" value="MST Series Multi Stage Hydraulic Bolt Tensioners - 464 kN to 1231 kN">MST Series Multi Stage Hydraulic Bolt Tensioners - 464 kN to 1231 kN</label><br><br>
                            </div>
                        </div>
                    </div>
                    <!-- Bolting Tools -->

                    <!-- In Situ Machining -->
                    <div id="showinsitumachining" class="myDiv" style="color:#000000">
                        <div id="pipecuttingbevellingmachine" class="group2">
                            <p style="color:#000000"><strong>Pipe Cutting Bevelling Machine</strong></p>
                            <input type="checkbox" name="product[]" value="TTCB Series Heavy Duty Pipe Cutting & Beveling Machines - 22 to 48">TTCB Series Heavy Duty Pipe Cutting & Beveling Machines - 22" to 48"</label><br>
                            <input type="checkbox" name="product[]" value="TCSL Series Lightweight Slim Profile Pipe Cutting & Beveling Machines - 2 to 24">TCSL Series Lightweight Slim Profile Pipe Cutting & Beveling Machines - 2" to 24"</label><br>
                        </div>

                        <div id="pipeflangefacing" class="group2">
                            <p style="color:#000000"><strong>Pipe Flange Facing</strong></p>
                            <input type="checkbox" name="product[]" value="TTFF Series Internal Diameter Mounted Flange Facing Machine - 2 to 120">TTFF Series Internal Diameter Mounted Flange Facing Machine - 2" to 120"</label><br>
                        </div>

                        <div id="tubepipebevellingmachine" class="group2">
                            <p style="color:#000000"><strong>Tube Pipe Beveling Machine</strong></p>
                            <input type="checkbox" name="product[]" value="TFM 2042 Series Tube/Pipe Bevelling Machines - 20 mm to 42 mm">TFM 2042 Series Tube/Pipe Bevelling Machines - 20 mm to 42 mm<br>
                            <input type="checkbox" name="product[]" value="TFM 2876 Series Tube/Pipe Bevelling Machines - 28 mm to 76 mm">TFM 2876 Series Tube/Pipe Bevelling Machines - 28 mm to 76 mm</label><br>
                            <input type="checkbox" name="product[]" value="TFM 39105 Series Tube/Pipe Bevelling Machines - 39 mm to 104 mm">TFM 39105 Series Tube/Pipe Bevelling Machines - 39 mm to 104 mm</label><br>
                            <input type="checkbox" name="product[]" value="TFM 51203 Series Tube/Pipe Bevelling Machines - 51 mm to 203 mm">TFM 51203 Series Tube/Pipe Bevelling Machines - 51 mm to 203 mm</label><br>
                            <input type="checkbox" name="product[]" value="TFM 99306 Series Tube/Pipe Bevelling Machines - 100 mm to 306 mm">TFM 99306 Series Tube/Pipe Bevelling Machines - 100 mm to 306 mm</label><br>
                            <input type="checkbox" name="product[]" value="TFM 102457 Series Tube/Pipe Bevelling Machines - 102 mm to 457 mm">TFM 102457 Series Tube/Pipe Bevelling Machines - 102 mm to 457 mm</label><br>
                        </div>
                    </div>
                    <!-- In Situ Machining -->

                    <!-- Tube Tools -->
                    <div id="showtubetools" class="myDiv" style="color:#000000">
                        <div id="tubeexpander" class="group3">
                            <p style="color:#000000"><strong>Tube Expander</strong></p>
                            <input type="checkbox" name="product[]" value="Boiler Tube Expander">Boiler Tube Expander</label><br>
                            <input type="checkbox" name="product[]" value="Heat Exchanger and Condenser Tube Expanders">Heat Exchanger and Condenser Tube Expanders</label><br>
                        </div>
                        <div id="tuberolling" class="group3">
                            <p style="color:#000000"><strong>Tube Rolling Controls & Drive</strong></p>
                            <input type="checkbox" name="product[]" value="Electric Tube Expansion System - 110 V to 230 V (2 kW)">Electric Tube Expansion System - 110 V to 230 V (2 kW)</label><br>
                            <input type="checkbox" name="product[]" value="Hydraulic Tube Expansion System - 19 mm to 102 mm">Hydraulic Tube Expansion System - 19 mm to 102 mm</label><br>
                        </div>

                        <div id="tuberemoval" class="group3">
                            <p style="color:#000000"><strong>Tube Removal Tools & Equipments</strong></p>
                            <input type="checkbox" name="product[]" value="Continous Hydraulic Tube Pulling System - 9.53 mm to 101.6 mm (150 mm pull stroke)">Continous Hydraulic Tube Pulling System - 9.53 mm to 101.6 mm (150 mm pull stroke)</label><br>
                            <input type="checkbox" name="product[]" value="Master Tugger Hydraulic Tube Pulling System - 9.53 mmm to 101.6 mm (150 mm pull stroke) ideal for tube stubs">Master Tugger Hydraulic Tube Pulling System - 9.53 mmm to 101.6 mm (150 mm pull stroke) ideal for tube stubs</label><br>
                            <input type="checkbox" name="product[]" value="Pneumatic Tube Removal Spinner - Non ferrous tubes up to 1 (30 m/min pull rate)">Pneumatic Tube Removal Spinner - Non ferrous tubes up to 1" (30 m/min pull rate)</label><br>
                            <input type="checkbox" name="product[]" value="One Turn Tube Cutter - 15.87 mm to 63.50 mm (14 to 22 BWG thk) Non-ferrous and thin-walled ferrous tubes">One Turn Tube Cutter - 15.87 mm to 63.50 mm (14 to 22 BWG thk) Non-ferrous and thin-walled ferrous tubes</label><br>
                            <input type="checkbox" name="product[]" value="TATP Series Internal Tube Cutter - 15.87 mm to 38. mm (12 to 22 BWG thk) Ferrous or Non-Ferrous tubes of the Condensers, Heat-Exchanger">TATP Series Internal Tube Cutter - 15.87 mm to 38. mm (12 to 22 BWG thk) Ferrous or Non-Ferrous tubes of the Condensers, Heat-Exchangers </label><br>
                            <input type="checkbox" name="product[]" value="TB-68 Series Internal Tube Cutter - 15 mm to 113 mm (upto 8 mm thk) thick walled boiler tubes of 2” O.D. and higher">TB 68 Series Internal Tube Cutter - 15 mm to 113 mm (upto 8 mm thk) thick walled boiler tubes of 2” O.D. and higher</label><br>
                        </div>
                    </div>
                    <!-- Tube Tools -->
                </div>
                <!-- </div> -->
                <div class="company textFieldInput section">
                    <div class="field" data-db-field>
                        <input id="company" type="text" name="company" placeholder="Company" aria-required="true" required="true" placeholder="Company" />
                        <!-- <label for="CompanyName" class="placeholder">Company</label> -->
                        <span class="error-msg">Enter your company name</span>
                    </div>
                </div>
                <div class="location textFieldInput section">
                    <div class="field" data-db-field>
                        <input id="location" type="text" name="location" placeholder="location" aria-required="true" required="true" placeholder="location" />
                        <!-- <label for="CompanyName" class="placeholder">Company</label> -->
                        <span class="error-msg">Enter your company location</span>
                    </div>
                </div>
                <div class="checkboxInput section">
                    <div class="safeharbor-wrapper hide-checkbox">
                        <div data-legal-type="disclosure">
                            <div class="field">
                                <input class="sr-only" type="checkbox" id="Accept_Terms__c" name="Accept_Terms__c" />
                                <div class="checkbox-ui" data-input-check></div>
                                <div class="checkbox-ui-label">
                                    By clicking Get A Quote I confirm that I have read and agree to the <a href="https://tritorc.com/privacy-policy" target="_blank">Privacy Statement</a>.</div>
                                <span class="safeharbor-err-msg error-msg-block">
                                    This is a required field
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <button value="Submit" type="submit" class="btn" style="background: #000000; color:#ffffff; border: 2px solid #000000; padding: 10px 26px;">Get A Quote</button>
            </form>
            <!-- </form> -->

        </div>
    </div>
</body>


<!-- Modal PopUp Script Starts -->
<script>
    var delay_popup = 10000;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup)
</script>
<!-- Modal PopUp Script Ends -->



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myselection').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv").hide();
            $("#show" + demovalue).show();
        });
    });

    $(document).ready(function() {
        $('#myselection1').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv1").hide();
            $("#sshow" + demovalue).show();
        });
    });
</script>
<!-- 
<script>
    $(function () {
    $(".custom-close").on('click', function() {
        $('#myModal').modal('hide');
    });
});
</script> -->

</html>