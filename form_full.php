<form id="sky_enqform" role="form" method="post" action="../submit.php" class="">
	<input type="hidden" name="<?= $FIELD_DEPT ?>" value="cesales" />
	<input type="hidden" name="<?= $FIELD_DEPT_NAME ?>" value="ce" />
	<input type="hidden" name="<?= $FIELD_REDIRECT ?>" value="/skyhomes/step_success.php" />
	<input type="hidden" name="max id" value="<?php echo $_GET['mx']?>" />
	<input type="hidden" name="subject" value="CE AUS Skyhomes " id="subject" />
	<input type="hidden" name="<?= $FIELD_SEND_CUSTOMER_MAIL ?>" id="send_conf" value="" />
	<div class="important_check">
		<label for="<?= $FIELD_SPAM ?>" class="important_check">
			<input type="text" name="<?= $FIELD_SPAM ?>" value="" class="important_check" />
		</label>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<h1 style="margin-bottom:14px;" class="col-enq text-large">Online enquries.</h1>
		</div>
	</div>
	<fieldset>
		<legend class="hidden"><strong>Required</strong>: Your details.</legend>
		<div class="row">
			<div class="form-group col-sm-6">
				<label class="sr-only" for="Full_Name_101">Full Name</label>
				<div class="input-group"> <span class="input-group-addon"><span class="glyphicons  glyphicons-user" ></span></span>
					<input type="text" class="form-control {validate:{required:true}}" name="Full_Name_101" id="Full_Name_101" title="Full Name Required" placeholder="Full Name *" value="<?php if (!empty($_GET[" f "])) { echo $_GET['f'], ' ', $_GET['l']; }?>">
				</div>
			</div>
			<div class="form-group col-sm-6">
				<label class="sr-only " for="<?= $FIELD_EMAIL ?>">Email address</label>
				<div class="input-group"> <span class="input-group-addon"><span class="glyphicons glyphicons-envelope" ></span></span>
					<input type="email" class="form-control {validate:{required:true,email:true}}" name="<?= $FIELD_EMAIL ?>" id="<?= $FIELD_EMAIL ?>" maxlength="254" title="Valid Email Required" placeholder="Email Address *" value="<?php echo $_GET['txtEmail']?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<div class="input-group"> <span class="input-group-addon"><span class="glyphicons  glyphicons-iphone" ></span></span>
					<label class="sr-only" for="<?= $FIELD_MOBI_PHONE ?>">Mobile Phone</label>
					<input type="number" class="form-control {validate:{required:true}}" name="<?= $FIELD_MOBI_PHONE ?>" id="<?= $FIELD_MOBI_PHONE ?>" title="Phone Number Required" placeholder="Mobile Number *" value="<?php echo $_GET['p3'] ?>">
				</div>
			</div>
			<div class="form-group col-sm-6 ">
				<label class="sr-only" for="Country_204">Select your location</label>
				<select id="Country_204" name="Country_204" class="form-control" title="Location Required">
					<option value="">Select your location*</option>
					<option value="" disabled="disabled">------------------------------</option>
					<optgroup label="Australian States:">
						<option value="Australian, VIC">Victoria</option>
						<!--[if lt IE 7]><option value="Australian, VIC" selected="selected">Victoria</option><![endif]-->
						<option value="Australian, ACT">A.C.T.</option>
						<option value="Australian, NSW">New South Wales</option>
						<option value="Australian, NT">Northern Territory</option>
						<option value="Australian, QLD">Queensland</option>
						<option value="Australian, SA">South Australia</option>
						<option value="Australian, TAS">Tasmania</option>
						<option value="Australian, WA">Western Australia</option>
					</optgroup>
					<optgroup label="Non Australian:">
						<?php include_once("i_countrydropdown.php") ?>
					</optgroup>
				</select>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="row" style="margin-bottom:1em;">
			<div class="form-group col-sm-12">
				<label class="sr-only" for="<?= $FIELD_COMMENTS ?>">Comments / Questions</label>
				<div class="input-group"> <span class="input-group-addon"><span class="glyphicons glyphicons-quote"></span></span>
					<input type="text" class="form-control" placeholder="Questions or comments?" name="<?= $FIELD_COMMENTS ?>" id="<?= $FIELD_COMMENTS ?>">
				</div>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<div class="row" style="margin-bottom:1em;">
			<div class="form-group col-xs-12 col-md-7">
				<label class="checkbox-inline small-label" for="<?= $FIELD_CENTEQ_OPTIN ?>">
					<input class="" type="checkbox" checked id="<?= $FIELD_CENTEQ_OPTIN ?>" name="<?= $FIELD_CENTEQ_OPTIN ?>" value="yes">
					<span> Receive info from <strong>Central Equity</strong> about upcoming properties & events <a href="http://www.centralequity.com.au/privacy.php<?php //if (marketing()) echo"?id=",marketing() ?>" target="_blank"><img src="http://centralequity.com.au/images/privacy_light.png" border="0" style="vertical-align:middle"></a></span></label>
			</div>
			<div class="form-group col-xs-12 col-md-5">
				<button type="submit" id="submit_enq" class="btn btn-lg btn-solid-enq btn-rounded pull-right submitform submit_enq"> SUBMIT <span class="glyphicons glyphicons-chevron-right"></span> </button>
			</div>
		</div>
	</fieldset>
</form>
