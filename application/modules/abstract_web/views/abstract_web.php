<div id="body">
	<div class="content">
		<h2 align="center"><br>Submit Your Abstract</h2>
	<?php if($this->session->flashdata('error')){ ?>
			<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>&nbsp;<?php echo $this->session->flashdata('error'); ?><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
	<?php } ?>
	<?php if($this->session->flashdata('sukses')){ ?>
			<div class="alert alert-success" role="alert"><span class="sr-only">Success:</span>&nbsp;<?php echo $this->session->flashdata('sukses'); ?><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
	<?php } ?>
	<div style="margin:30px"> <b>
		<h3>Payment</h3> 
		<p>
			Registration fee for international participants is USD 100 and for domestic participants is IDR 1.000.000. The latest registration for general participant is October 8th, 2016. It should be transferred to:
			<div class="col-sm-2 col-md-2 col-xs-2">Bank</div>
			<div class="col-sm-6">: BNI</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Branch</div>
			<div class="col-sm-6">: Bogor</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Address</div>
			<div class="col-sm-6">: Kampus IPB, Jl. Raya Bogor, Jasinga, Darmaga</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">On behalf of</div>
			<div class="col-sm-6">: Rektor IPB c/q SBRC</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Account No.</div>
			<div class="col-sm-6">: 0166732560</div>
			<div class="clearfix"></div>
			<div class="col-sm-2 col-md-2 col-xs-2">Swift Code</div>
			<div class="col-sm-6">: BNINIDJABGR</div>
			<div class="clearfix"></div>
			<br>Please confirm your payment on <a href="mailto:icbbogor2016@gmail.com">icbbogor2016@gmail.com</a>.
		</p></b>
	<form action="<?php echo site_url('Registration/regis/speaker') ?>" method="POST" enctype="multipart/form-data">
			<div class="col-sm-12 ">
				<div class="mark_title">
					<span class="note">* </span> Marked field are required
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label>Title <span class="note">*</span></label>
					</div>
					<div class="col-sm-5">
						<select name="title" class="form-control" required>
							<option value="">Select Title</option>
							<option value="Mr" <?php if($this->session->flashdata('title') == 'Mr') echo "selected"; ?>>Mr</option>
							<option value="Ms" <?php if($this->session->flashdata('title') == 'Ms') echo "selected"; ?>>Ms</option>
							<option value="Mrs" <?php if($this->session->flashdata('title') == 'Mrs') echo "selected"; ?>>Mrs</option>
							<option value="Prof" <?php if($this->session->flashdata('title') == 'Prof') echo "selected"; ?>>Prof</option>
							<option value="Dr" <?php if($this->session->flashdata('title') == 'Dr') echo "selected"; ?>>Dr</option>
							<option value="Assist Prof Dr" <?php if($this->session->flashdata('title') == 'Assist Prof Dr') echo "selected"; ?>>Assist Prof Dr</option>
							<option value="Assoc Prof Dr" <?php if($this->session->flashdata('title') == 'Assoc Prof Dr') echo "selected"; ?>>Assoc Prof Dr</option>
						</select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
				    	<label for="inputFirstName">Full Name</label>
				    </div>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" name="fName" id="fName" placeholder="First Name" required <?php if($this->session->flashdata('fName')) echo "value = '".$this->session->flashdata('fName')."'"; ?>>
				    </div>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" name="lName" id="lName" placeholder="Last Name" required <?php if($this->session->flashdata('lName')) echo "value = '".$this->session->flashdata('lName')."'"; ?>>
				    </div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputLastName">Company Name</label>
				    </div>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" name="company" id="company" placeholder="Company/University Name" required <?php if($this->session->flashdata('company')) echo "value = '".$this->session->flashdata('company')."'"; ?>>
				    </div>
				 </div>
			</div>
			<div class="col-sm-12 form_abstract">
				 <div class="form-group">
				 	<div class="col-sm-4">
				 		<label for="inputLastName">City</label>
				    </div>
				    <div class="col-sm-3 col-md-3 col-xs-3">
				    	<input type="text" class="form-control" name="city" id="city" placeholder="City" required <?php if($this->session->flashdata('city')) echo "value = '".$this->session->flashdata('city')."'"; ?>>
				    </div>
				 </div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
				 		<label for="inputLastName">State</label>
				   	</div>
				    <div class="col-sm-3 col-md-3 col-xs-3">
				    	<input type="text" class="form-control" name="state" id="state" placeholder="State" required <?php if($this->session->flashdata('state')) echo "value = '".$this->session->flashdata('state')."'"; ?>>
				    </div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="selectCountry" >Country <span class="note">*</span></label>
					</div>
				    <div class="col-sm-3 col-md-3 col-xs-3">
				    	<select class="form-control" name="country" id="country" required>
				        	<option selected="selected" value="">Select country</option>
				            <option value="United States" <?php if($this->session->flashdata('country') == 'United States') echo "selected"; ?>>United States</option>
				            <option value="United Kingdom" <?php if($this->session->flashdata('country') == 'United Kingdom') echo "selected"; ?>>United Kingdom</option>
				            <option value="Afghanistan" <?php if($this->session->flashdata('country') == 'Afghanistan') echo "selected"; ?>>Afghanistan</option>
				            <option value="Albania" <?php if($this->session->flashdata('country') == 'Albania') echo "selected"; ?>>Albania</option>
				            <option value="Algeria" <?php if($this->session->flashdata('country') == 'Algeria') echo "selected"; ?>>Algeria</option>
				            <option value="American Samoa" <?php if($this->session->flashdata('country') == 'American Samoa') echo "selected"; ?>>American Samoa</option>
				            <option value="Andorra" <?php if($this->session->flashdata('country') == 'Andorra') echo "selected"; ?>>Andorra</option>
				            <option value="Angola" <?php if($this->session->flashdata('country') == 'Angola') echo "selected"; ?>>Angola</option>
				            <option value="Anguilla" <?php if($this->session->flashdata('country') == 'Anguilla') echo "selected"; ?>>Anguilla</option>
				            <option value="Antarctica" <?php if($this->session->flashdata('country') == 'Antarctica') echo "selected"; ?>>Antarctica</option>
				            <option value="Antigua and Barbuda" <?php if($this->session->flashdata('country') == 'Antigua and Barbuda') echo "selected"; ?>>Antigua and Barbuda</option>
				            <option value="Argentina" <?php if($this->session->flashdata('country') == 'Argentina') echo "selected"; ?>>Argentina</option>
				            <option value="Armenia" <?php if($this->session->flashdata('country') == 'Armenia') echo "selected"; ?>>Armenia</option>
				            <option value="Aruba" <?php if($this->session->flashdata('country') == 'Aruba') echo "selected"; ?>>Aruba</option>
				            <option value="Australia" <?php if($this->session->flashdata('country') == 'Australia') echo "selected"; ?>>Australia</option>
				            <option value="Austria" <?php if($this->session->flashdata('country') == 'Austria') echo "selected"; ?>>Austria</option>
				            <option value="Azerbaijan" <?php if($this->session->flashdata('country') == 'Azerbaijan') echo "selected"; ?>>Azerbaijan</option>
				            <option value="Bahamas" <?php if($this->session->flashdata('country') == 'Bahamas') echo "selected"; ?>>Bahamas</option>
				            <option value="Bahrain" <?php if($this->session->flashdata('country') == 'Bahrain') echo "selected"; ?>>Bahrain</option>
				            <option value="Bangladesh" <?php if($this->session->flashdata('country') == 'Bangladesh') echo "selected"; ?>>Bangladesh</option>
				            <option value="Barbados" <?php if($this->session->flashdata('country') == 'Barbados') echo "selected"; ?>>Barbados</option>
				            <option value="Belarus" <?php if($this->session->flashdata('country') == 'Belarus') echo "selected"; ?>>Belarus</option>
				            <option value="Belgium" <?php if($this->session->flashdata('country') == 'Belgium') echo "selected"; ?>>Belgium</option>
				            <option value="Belize" <?php if($this->session->flashdata('country') == 'Belize') echo "selected"; ?>>Belize</option>
				            <option value="Benin" <?php if($this->session->flashdata('country') == 'Benin') echo "selected"; ?>>Benin</option>
				            <option value="Bermuda" <?php if($this->session->flashdata('country') == 'Bermuda') echo "selected"; ?>>Bermuda</option>
				            <option value="Bhutan" <?php if($this->session->flashdata('country') == 'Bhutan') echo "selected"; ?>>Bhutan</option>
				            <option value="Bolivia" <?php if($this->session->flashdata('country') == 'Bolivia') echo "selected"; ?>>Bolivia</option>
				            <option value="Bosnia and Herzegovina" <?php if($this->session->flashdata('country') == 'Bosnia and Herzegovina') echo "selected"; ?>>Bosnia and Herzegovina</option>
				            <option value="Botswana" <?php if($this->session->flashdata('country') == 'Botswana') echo "selected"; ?>>Botswana</option>
				            <option value="Bouvet Island" <?php if($this->session->flashdata('country') == 'Bouvet Island') echo "selected"; ?>>Bouvet Island</option>
				            <option value="Brazil" <?php if($this->session->flashdata('country') == 'Brazil') echo "selected"; ?>>Brazil</option>
				            <option value="British Indian Ocean Territory" <?php if($this->session->flashdata('country') == 'British Indian Ocean Territory') echo "selected"; ?>>British Indian Ocean Territory</option>
				            <option value="Brunei Darussalam" <?php if($this->session->flashdata('country') == 'Brunei Darussalam') echo "selected"; ?>>Brunei Darussalam</option>
				            <option value="Bulgaria" <?php if($this->session->flashdata('country') == 'Bulgaria') echo "selected"; ?>>Bulgaria</option>
				            <option value="Burkina Faso" <?php if($this->session->flashdata('country') == 'Burkina Faso') echo "selected"; ?>>Burkina Faso</option>
				            <option value="Burundi" <?php if($this->session->flashdata('country') == 'Burundi') echo "selected"; ?>>Burundi</option>
				            <option value="Cambodia" <?php if($this->session->flashdata('country') == 'Cambodia') echo "selected"; ?>>Cambodia</option>
				            <option value="Cameroon" <?php if($this->session->flashdata('country') == 'Cameroon') echo "selected"; ?>>Cameroon</option>
				            <option value="Canada" <?php if($this->session->flashdata('country') == 'Canada') echo "selected"; ?>>Canada</option>
				            <option value="Canadian Nunavut Territory" <?php if($this->session->flashdata('country') == 'Canadian Nunavut Territory') echo "selected"; ?>>Canadian Nunavut Territory</option>
				            <option value="Cape Verde" <?php if($this->session->flashdata('country') == 'Cape Verde') echo "selected"; ?>>Cape Verde</option>
				            <option value="Cayman Islands" <?php if($this->session->flashdata('country') == 'Cayman Islands') echo "selected"; ?>>Cayman Islands</option>
				            <option value="Central African Republic" <?php if($this->session->flashdata('country') == 'Central African Republic') echo "selected"; ?>>Central African Republic</option>
				            <option value="Chad" <?php if($this->session->flashdata('country') == 'Chad') echo "selected"; ?>>Chad</option>
				            <option value="Chile" <?php if($this->session->flashdata('country') == 'Chile') echo "selected"; ?>>Chile</option>
				            <option value="China" <?php if($this->session->flashdata('country') == 'China') echo "selected"; ?>>China</option>
				            <option value="Christmas Island" <?php if($this->session->flashdata('country') == 'Christmas Island') echo "selected"; ?>>Christmas Island</option>
				            <option value="Cocos (Keeling Islands)" <?php if($this->session->flashdata('country') == 'Cocos (Keeling Islands)') echo "selected"; ?>>Cocos (Keeling Islands)</option>
				            <option value="Colombia" <?php if($this->session->flashdata('country') == 'Colombia') echo "selected"; ?>>Colombia</option>
				            <option value="Comoros" <?php if($this->session->flashdata('country') == 'Comoros') echo "selected"; ?>>Comoros</option>
				            <option value="Congo" <?php if($this->session->flashdata('country') == 'Congo') echo "selected"; ?>>Congo</option>
				            <option value="Cook Islands" <?php if($this->session->flashdata('country') == 'Cook Islands') echo "selected"; ?>>Cook Islands</option>
				            <option value="Costa Rica" <?php if($this->session->flashdata('country') == 'Costa Rica') echo "selected"; ?>>Costa Rica</option>
				            <option value="Cote D'Ivoire (Ivory Coast)" <?php if($this->session->flashdata('country') == "Cote D'Ivoire (Ivory Coast)") echo "selected"; ?>>Cote D'Ivoire (Ivory Coast)</option>
				            <option value="Croatia (Hrvatska)" <?php if($this->session->flashdata('country') == 'Croatia (Hrvatska)') echo "selected"; ?>>Croatia (Hrvatska)</option>
				            <option value="Cuba" <?php if($this->session->flashdata('country') == 'Cuba') echo "selected"; ?>>Cuba</option>
							<option value="Cyprus" <?php if($this->session->flashdata('country') == 'Cyprus') echo "selected"; ?>>Cyprus</option>
							<option value="Czech Republic" <?php if($this->session->flashdata('country') == 'Czech Republic') echo "selected"; ?>>Czech Republic</option>
							<option value="Denmark" <?php if($this->session->flashdata('country') == 'Denmark') echo "selected"; ?>>Denmark</option>
							<option value="Djibouti" <?php if($this->session->flashdata('country') == 'Djibouti') echo "selected"; ?>>Djibouti</option>
							<option value="Dominica" <?php if($this->session->flashdata('country') == 'Dominica') echo "selected"; ?>>Dominica</option>
							<option value="Dominican Republic" <?php if($this->session->flashdata('country') == 'Dominican Republic') echo "selected"; ?>>Dominican Republic</option>
							<option value="East Timor" <?php if($this->session->flashdata('country') == 'East Timor') echo "selected"; ?>>East Timor</option>
							<option value="Ecuador" <?php if($this->session->flashdata('country') == 'Ecuador') echo "selected"; ?>>Ecuador</option>
							<option value="Egypt" <?php if($this->session->flashdata('country') == 'Egypt') echo "selected"; ?>>Egypt</option>
							<option value="El Salvador" <?php if($this->session->flashdata('country') == 'El Salvador') echo "selected"; ?>>El Salvador</option>
							<option value="Equatorial Guinea" <?php if($this->session->flashdata('country') == 'Equatorial Guinea') echo "selected"; ?>>Equatorial Guinea</option>
							<option value="Eritrea" <?php if($this->session->flashdata('country') == 'Eritrea') echo "selected"; ?>>Eritrea</option>
							<option value="Estonia" <?php if($this->session->flashdata('country') == 'Estonia') echo "selected"; ?>>Estonia</option>
							<option value="Ethiopia" <?php if($this->session->flashdata('country') == 'Ethiopia') echo "selected"; ?>>Ethiopia</option>
							<option value="Falkland Islands (Malvinas)" <?php if($this->session->flashdata('country') == 'Falkland Islands (Malvinas)') echo "selected"; ?>>Falkland Islands (Malvinas)</option>
							<option value="Faroe Islands" <?php if($this->session->flashdata('country') == 'Faroe Islands') echo "selected"; ?>>Faroe Islands</option>
							<option value="Fiji" <?php if($this->session->flashdata('country') == 'Fiji') echo "selected"; ?>>Fiji</option>
							<option value="Finland" <?php if($this->session->flashdata('country') == 'Finland') echo "selected"; ?>>Finland</option>
							<option value="France" <?php if($this->session->flashdata('country') == 'France') echo "selected"; ?>>France</option>
							<option value="France, Metropolitan" <?php if($this->session->flashdata('country') == 'France, Metropolitan') echo "selected"; ?>>France, Metropolitan</option>
							<option value="French Guiana" <?php if($this->session->flashdata('country') == 'French Guiana') echo "selected"; ?>>French Guiana</option>
							<option value="French Polynesia" <?php if($this->session->flashdata('country') == 'French Polynesia') echo "selected"; ?>>French Polynesia</option>
							<option value="French Southern Territories" <?php if($this->session->flashdata('country') == 'French Southern Territories') echo "selected"; ?>>French Southern Territories</option>
							<option value="Gabon" <?php if($this->session->flashdata('country') == 'Gabon') echo "selected"; ?>>Gabon</option>
							<option value="Gambia" <?php if($this->session->flashdata('country') == 'Gambia') echo "selected"; ?>>Gambia</option>
							<option value="Georgia" <?php if($this->session->flashdata('country') == 'Georgia') echo "selected"; ?>>Georgia</option>
							<option value="Germany" <?php if($this->session->flashdata('country') == 'Germany') echo "selected"; ?>>Germany</option>
							<option value="Ghana" <?php if($this->session->flashdata('country') == 'Ghana') echo "selected"; ?>>Ghana</option>
							<option value="Gibraltar" <?php if($this->session->flashdata('country') == 'Gibraltar') echo "selected"; ?>>Gibraltar</option>
							<option value="Greece" <?php if($this->session->flashdata('country') == 'Greece') echo "selected"; ?>>Greece</option>
							<option value="Greenland" <?php if($this->session->flashdata('country') == 'Greenland') echo "selected"; ?>>Greenland</option>
							<option value="Grenada" <?php if($this->session->flashdata('country') == 'Grenada') echo "selected"; ?>>Grenada</option>
							<option value="Guadeloupe" <?php if($this->session->flashdata('country') == 'Guadeloupe') echo "selected"; ?>>Guadeloupe</option>
							<option value="Guam" <?php if($this->session->flashdata('country') == 'Guam') echo "selected"; ?>>Guam</option>
							<option value="Guatemala" <?php if($this->session->flashdata('country') == 'Guatemala') echo "selected"; ?>>Guatemala</option>
							<option value="Guinea" <?php if($this->session->flashdata('country') == 'Guinea') echo "selected"; ?>>Guinea</option>
							<option value="Guinea-Bissau" <?php if($this->session->flashdata('country') == 'Guinea-Bissau') echo "selected"; ?>>Guinea-Bissau</option>
							<option value="Guyana" <?php if($this->session->flashdata('country') == 'Guyana') echo "selected"; ?>>Guyana</option>
							<option value="Haiti" <?php if($this->session->flashdata('country') == 'Haiti') echo "selected"; ?>>Haiti</option>
							<option value="Heard and McDonald Islands" <?php if($this->session->flashdata('country') == 'Heard and McDonald Islands') echo "selected"; ?>>Heard and McDonald Islands</option>
							<option value="Honduras" <?php if($this->session->flashdata('country') == 'Honduras') echo "selected"; ?>>Honduras</option>
							<option value="Hong Kong" <?php if($this->session->flashdata('country') == 'Hong Kong') echo "selected"; ?>>Hong Kong</option>
							<option value="Hungary" <?php if($this->session->flashdata('country') == 'Hungary') echo "selected"; ?>>Hungary</option>
							<option value="Iceland" <?php if($this->session->flashdata('country') == 'Iceland') echo "selected"; ?>>Iceland</option>
							<option value="India" <?php if($this->session->flashdata('country') == 'India') echo "selected"; ?>>India</option>
							<option value="Indonesia" <?php if($this->session->flashdata('country') == 'Indonesia') echo "selected"; ?>>Indonesia</option>
							<option value="Iran" <?php if($this->session->flashdata('country') == 'Iran') echo "selected"; ?>>Iran</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland" <?php if($this->session->flashdata('country') == 'Iraq') echo "selected"; ?>>Ireland</option>
							<option value="Israel" <?php if($this->session->flashdata('country') == 'Israel') echo "selected"; ?>>Israel</option>
							<option value="Italy" <?php if($this->session->flashdata('country') == 'Italy') echo "selected"; ?>>Italy</option>
							<option value="Jamaica" <?php if($this->session->flashdata('country') == 'Jamaica') echo "selected"; ?>>Jamaica</option>
							<option value="Japan" <?php if($this->session->flashdata('country') == 'Japan') echo "selected"; ?>>Japan</option>
							<option value="Jordan" <?php if($this->session->flashdata('country') == 'Jordan') echo "selected"; ?>>Jordan</option>
							<option value="Kazakhstan" <?php if($this->session->flashdata('country') == 'Kazakhstan') echo "selected"; ?>>Kazakhstan</option>
							<option value="Kenya" <?php if($this->session->flashdata('country') == 'Kenya') echo "selected"; ?>>Kenya</option>
							<option value="Kiribati" <?php if($this->session->flashdata('country') == 'Kiribati') echo "selected"; ?>>Kiribati</option>
							<option value="Korea (North)" <?php if($this->session->flashdata('country') == 'Korea (North)') echo "selected"; ?>>Korea (North)</option>
							<option value="Korea (South)" <?php if($this->session->flashdata('country') == 'Korea (South)') echo "selected"; ?>>Korea (South)</option>
							<option value="Kuwait" <?php if($this->session->flashdata('country') == 'Kuwait') echo "selected"; ?>>Kuwait</option>
							<option value="Kyrgyzstan" <?php if($this->session->flashdata('country') == 'Kyrgyzstan') echo "selected"; ?>>Kyrgyzstan</option>
							<option value="Laos" <?php if($this->session->flashdata('country') == 'Laos') echo "selected"; ?>>Laos</option>
							<option value="Latvia" <?php if($this->session->flashdata('country') == 'Latvia') echo "selected"; ?>>Latvia</option>
							<option value="Lebanon" <?php if($this->session->flashdata('country') == 'Lebanon') echo "selected"; ?>>Lebanon</option>
							<option value="Lesotho" <?php if($this->session->flashdata('country') == 'Lesotho') echo "selected"; ?>>Lesotho</option>
							<option value="Liberia" <?php if($this->session->flashdata('country') == 'Liberia') echo "selected"; ?>>Liberia</option>
							<option value="Libya" <?php if($this->session->flashdata('country') == 'Libya') echo "selected"; ?>>Libya</option>
							<option value="Liechtenstein" <?php if($this->session->flashdata('country') == 'Liechtenstein') echo "selected"; ?>>Liechtenstein</option>
							<option value="Lithuania" <?php if($this->session->flashdata('country') == 'Lithuania') echo "selected"; ?>>Lithuania</option>
							<option value="Luxembourg" <?php if($this->session->flashdata('country') == 'Luxembourg') echo "selected"; ?>>Luxembourg</option>
							<option value="Macau" <?php if($this->session->flashdata('country') == 'Macau') echo "selected"; ?>>Macau</option>
							<option value="Macedonia" <?php if($this->session->flashdata('country') == 'Macedonia') echo "selected"; ?>>Macedonia</option>
							<option value="Madagascar" <?php if($this->session->flashdata('country') == 'Madagascar') echo "selected"; ?>>Madagascar</option>
							<option value="Malawi" <?php if($this->session->flashdata('country') == 'Malawi') echo "selected"; ?>>Malawi</option>
							<option value="Malaysia" <?php if($this->session->flashdata('country') == 'Malaysia') echo "selected"; ?>>Malaysia</option>
							<option value="Maldives" <?php if($this->session->flashdata('country') == 'Maldives') echo "selected"; ?>>Maldives</option>
							<option value="Mali" <?php if($this->session->flashdata('country') == 'Mali') echo "selected"; ?>>Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico" <?php if($this->session->flashdata('country') == 'Mexico') echo "selected"; ?>>Mexico</option>
							<option value="Micronesia">Micronesia</option>
							<option value="Moldova">Moldova</option>
							<option value="Monaco" <?php if($this->session->flashdata('country') == 'Monaco') echo "selected"; ?>>Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar" <?php if($this->session->flashdata('country') == 'Myanmar') echo "selected"; ?>>Myanmar</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal" <?php if($this->session->flashdata('country') == 'Nepal') echo "selected"; ?>>Nepal</option>
							<option value="Netherlands" <?php if($this->session->flashdata('country') == 'Netherlands') echo "selected"; ?>>Netherlands</option>
							<option value="Netherlands Antilles" <?php if($this->session->flashdata('country') == 'Netherlands Antilles') echo "selected"; ?>>Netherlands Antilles</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua" <?php if($this->session->flashdata('country') == 'Nicaragua') echo "selected"; ?>>Nicaragua</option>
							<option value="Niger" <?php if($this->session->flashdata('country') == 'Niger') echo "selected"; ?>>Niger</option>
							<option value="Nigeria" <?php if($this->session->flashdata('country') == 'Nigeria') echo "selected"; ?>>Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan" <?php if($this->session->flashdata('country') == 'Pakistan') echo "selected"; ?>>Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="Palestine" <?php if($this->session->flashdata('country') == 'Palestine') echo "selected"; ?>>Palestine</option>
							<option value="Panama" <?php if($this->session->flashdata('country') == 'Panama') echo "selected"; ?>>Panama</option>
							<option value="Papua New Guinea" <?php if($this->session->flashdata('country') == 'Papua New Guinea') echo "selected"; ?>>Papua New Guinea</option>
							<option value="Paraguay" <?php if($this->session->flashdata('country') == 'Paraguay') echo "selected"; ?>>Paraguay</option>
							<option value="Peru" <?php if($this->session->flashdata('country') == 'Peru') echo "selected"; ?>>Peru</option>
							<option value="Philippines" <?php if($this->session->flashdata('country') == 'Philippines') echo "selected"; ?>>Philippines</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Poland" <?php if($this->session->flashdata('country') == 'Poland') echo "selected"; ?>>Poland</option>
							<option value="Portugal" <?php if($this->session->flashdata('country') == 'Portugal') echo "selected"; ?>>Portugal</option>
							<option value="Qatar">Qatar</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania" <?php if($this->session->flashdata('country') == 'Romania') echo "selected"; ?>>Romania</option>
							<option value="Russian Federation" <?php if($this->session->flashdata('country') == 'Russian Federation') echo "selected"; ?>>Russian Federation</option>
							<option value="Rwanda">Rwanda</option>
							<option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							<option value="Saint Lucia">Saint Lucia</option>
							<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome and Principe">Sao Tome and Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Serbia">Serbia</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore" <?php if($this->session->flashdata('country') == 'Singapore') echo "selected"; ?>>Singapore</option>
							<option value="Slovak Republic">Slovak Republic</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa" <?php if($this->session->flashdata('country') == 'South Africa') echo "selected"; ?>>South Africa</option>
							<option value="Spain" <?php if($this->session->flashdata('country') == 'Spain') echo "selected"; ?>>Spain</option>
							<option value="Sri Lanka" <?php if($this->session->flashdata('country') == 'Sri Lanka') echo "selected"; ?>>Sri Lanka</option>
							<option value="St. Helena">St. Helena</option>
							<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
							<option value="Swaziland" <?php if($this->session->flashdata('country') == 'Swaziland') echo "selected"; ?>>Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syria">Syria</option>
							<option value="Taiwan" <?php if($this->session->flashdata('country') == 'Taiwan') echo "selected"; ?>>Taiwan</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Thailand" <?php if($this->session->flashdata('country') == 'Thailand') echo "selected"; ?>>Thailand</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad and Tobago">Trinidad and Tobago</option>
							<option value="Tunisia" <?php if($this->session->flashdata('country') == 'Tunisia') echo "selected"; ?>>Tunisia</option>
							<option value="Turkey" <?php if($this->session->flashdata('country') == 'Turkey') echo "selected"; ?>>Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine" <?php if($this->session->flashdata('country') == 'Ukraine') echo "selected"; ?>>Ukraine</option>
							<option value="United Arab Emirates" <?php if($this->session->flashdata('country') == 'United Arab Emirates') echo "selected"; ?>>United Arab Emirates</option>
							<option value="United Kingdom" <?php if($this->session->flashdata('country') == 'United Kingdom') echo "selected"; ?>>United Kingdom</option>
							<option value="United States" <?php if($this->session->flashdata('country') == 'United States') echo "selected"; ?>>United States</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Viet Nam" <?php if($this->session->flashdata('country') == 'Viet Nam') echo "selected"; ?>>Viet Nam</option>
							<option value="Virgin Islands (British)">Virgin Islands (British)</option>
							<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
							<option value="Western Sahara">Western Sahara</option>
							<option value="Yemen">Yemen</option>
							<option value="Yugoslavia">Yugoslavia</option>
							<option value="Zaire">Zaire</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
						</select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputEmail" >Email <span class="note">*</span></label>
					</div>
					<div class="col-sm-3 col-md-3 col-xs-3">
						<input type="email" class="form-control" name="email" id="email" placeholder="Your email" required <?php if($this->session->flashdata('email')) echo "value = '".$this->session->flashdata('email')."'"; ?>>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div  class="col-sm-4">
						<label for="inputPhoneNumber">Phone Number <span class="note">*</span></label>
					</div>
					<div class="col-sm-3 col-md-3 col-xs-3">
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="20" required pattern="^([\+][0-9]{1,3}[\ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9\ \.\-\/]{3,20})((x|ext|extension)[\ ]?[0-9]{1,4})?$" <?php if($this->session->flashdata('phone')) echo "value = '".$this->session->flashdata('phone')."'"; ?>>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="address" >Address</label>
					</div>
					<div class="col-sm-8">
						<textarea name="address" rows="3" class="form-control" id="address" maxlength="150"> <?php if($this->session->flashdata('address')) echo $this->session->flashdata('fName'); ?></textarea>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="category" >Abstract Category  <span class="note">*</span></label>
					</div>
					<div class="col-sm-8">
						<select class="form-control" name="category" id="category" required>
							<option value="Technology of Biomass" <?php if($this->session->flashdata('category') == 'Technology of Biomass') echo "selected"; ?>>Technology of Biomass</option>
							<option value="Application of Biomass" <?php if($this->session->flashdata('category') == 'Application of Biomass') echo "selected"; ?>>Application of Biomass</option>
							<option value="Sustainability of Biomass" <?php if($this->session->flashdata('category') == 'Sustainability of Biomass') echo "selected"; ?>>Sustainability of Biomass</option>
							<option value="Environment of Biomass" <?php if($this->session->flashdata('category') == 'Environment of Biomass') echo "selected"; ?>>Environment of Biomass</option>
							<option value="SCM of Biomass" <?php if($this->session->flashdata('category') == 'SCM of Biomass') echo "selected"; ?>>SCM of Biomass</option>
							<option value="Application of ICT for Biomass" <?php if($this->session->flashdata('category') == 'Application of ICT for Biomass') echo "selected"; ?>>Application of ICT for Biomass</option>
							<option value="Other">Other</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="titleSpeech" >Title of the speech</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="ctitle" id="ctitle" placeholder="Your title of the proposed talk" <?php if($this->session->flashdata('ctitle')) echo "value = '".$this->session->flashdata('ctitle')."'"; ?>>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label>Attach your Abstract (PDF) <span class="note">*</span></label>
					</div>
					<div class="col-sm-5">
                		<input id="PDF" name="userfile" type="file" class="form-control" placeholder="Browse" required />
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4"></div>
					<div class="col-sm-5">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>