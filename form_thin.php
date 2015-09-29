<form id="sky_enqform" role="form" method="post" action="../submit.php" class="thinform">
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
		<div class="row">
			<div class="form-group col-sm-12">
				<label class="sr-only" for="Full_Name_101">My name is</label>
				<div class="input-group"><span class="input-group-addon"><span class="glyphicons  glyphicons-user" ></span></span>
					<input type="text" class="form-control {validate:{required:true}}" name="Full_Name_101" id="Full_Name_101" title="Full Name Required" placeholder="Full Name *" value="<?=$full_name?>">
				</div>
			</div>
			<div id="t_f_email" class="form-group col-sm-12 ">
				<label class="sr-only " for="<?= $FIELD_EMAIL ?>">Email address</label>
				<div class="input-group"> <span class="input-group-addon"><span class="glyphicons glyphicons-envelope" ></span></span>
					<input id="f_emailaddress" type="email" class="form-control {validate:{required:true,email:true}}" name="<?= $FIELD_EMAIL ?>" maxlength="254" title="Valid Email Required" placeholder="Email Address *" value="<?=$email?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div id="t_f_call" class="form-group col-sm-12">
				<div class="input-group"> <span class="input-group-addon"><span class="glyphicons  glyphicons-iphone" ></span></span>
					<label class="sr-only" for="<?= $FIELD_MOBI_PHONE ?>">Mobile Phone</label>
					<input id="f_phonenumber" type="tel" class="form-control {validate:{required:true}}" name="<?= $FIELD_MOBI_PHONE ?>" title="Phone Number Required" placeholder="Mobile Number *" value="">
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="row" style="margin-bottom:1em;">
			<div class="form-group col-sm-12">
				<label class="sr-only" for="<?= $FIELD_COMMENTS ?>">I've got some questions about...</label>
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
