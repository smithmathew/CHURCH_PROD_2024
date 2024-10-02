<html>
<head>
<title>Welcome to Church guestbook</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" src="js/formValidate.js"></script>
<SCRIPT LANGUAGE="JavaScript">

function submitMe(){
	if(trim(document.frm.nameTxt.value)==""){
		alert("Please enter name");
		document.frm.nameTxt.focus();
	}else if(trim(document.frm.emailTxt.value)=="" || !checkemail(document.frm.emailTxt.value)){
		alert("Please enter valid email");
		document.frm.emailTxt.focus();
	}else if(trim(document.frm.commentsTxt.value)==""){
		alert("Please enter comments");
		document.frm.commentsTxt.focus();
	}else if((document.frm.commentsTxt.value).indexOf("<") != -1){
		alert("Only alpha numeric characters are allowed as comments");
		document.frm.commentsTxt.focus();
	}else{
		document.frm.action = "guestBookSave.php";
		document.frm.submit();
	}
}
</script>     
</head>
<body bgcolor="#F1F6FC">
<div align="center"> 
<font size="5" color="#334B57"><b>Welcome to Church guestbook</b></font><BR>
<FONT SIZE="1" FACE="verdana"><B><A HREF="index.php"><FONT COLOR="#334B57">Home</FONT></A> :: <A HREF="guestBook.php"><FONT COLOR="#334B57">View entry</FONT></A></B></FONT><br><br>
<form name="frm" method="post">
<input type="hidden" name="do" value="add">
<table width="460" border="0" cellspacing="0" cellpadding="1" bgcolor="#334B57">
	<tr>
		<td>
			<div align="center">
				<table width="100%" border="0" cellspacing="1" cellpadding="4">
					<tr bgcolor="#FFFFFF"> 
						<td width="28%"><div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">*Name : </font></div></td>
						<td width="72%"><input type="text" name="nameTxt" size="30" maxlength="50"></td>
					</tr>
					<tr bgcolor="#FFFFFF"> 
						<td width="28%"><div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">*Email : </font></div></td>
						<td width="72%"><input type="text" name="emailTxt" size="30" maxlength="50"></td>
					</tr>
					<tr bgcolor="#FFFFFF"> 
						<td width="28%"><div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Website : </font></div></td>
						<td width="72%"><input type="text" name="urlTxt" size="30" maxlength="150" VALUE="http://"></td>
					</tr>
					<tr bgcolor="#FFFFFF"> 
						<td width="28%"><div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">*Country : </font></div></td>
						<td width="72%"> 
							<select name="countryCmb">
							<option value="Afghanistan">Afghanistan</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="American Samoa">American Samoa</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antarctica">Antarctica</option>
							<option value="Antigua And Barbuda">Antigua And Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bermuda">Bermuda</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Bosnia And Herzegowina">Bosnia And Herzegowina</option>
							<option value="Botswana">Botswana</option>
							<option value="Bouvet Island">Bouvet Island</option>
							<option value="Brazil">Brazil</option>
							<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
							<option value="Brunei Darussalam">Brunei Darussalam</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Cape Verde">Cape Verde</option>
							<option value="Cayman Islands">Cayman Islands</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Christmas Island">Christmas Island</option>
							<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo">Congo</option>
							<option value="Cook Islands">Cook Islands</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cote D Ivoire">Cote D Ivoire</option>
							<option value="Croatia">Croatia</option>
							<option value="Cuba">Cuba</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="East Timor">East Timor</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands">Falkland Islands</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="France, Metropolitan ">France, Metropolitan </option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Territories">French Southern Territories</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-Bissau">Guinea-Bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Heard And Mc Donald Islands">Heard And Mc Donald Islands</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="India" SELECTED>India</option>
							<option value="Indonesia" >Indonesia</option>
							<option value="Iran">Iran</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="North Korea">North Korea</option>
							<option value="South Korea">South Korea</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Lao Peoples Republic">Lao Peoples Republic</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macau">Macau</option>
							<option value="Macedonia">Macedonia</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Micronesia">Micronesia</option>
							<option value="Moldova">Moldova</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherlands">Netherlands</option>
							<option value="Netherlands Antilles">Netherlands Antilles</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="Palestinian Territory">Palestinian Territory</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Philippines">Philippines</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russian Federation">Russian Federation</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
							<option value="Saint Lucia">Saint Lucia</option>
							<option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome And Principe">Sao Tome And Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Slovakia">Slovakia</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="South Georgia">South Georgia</option>
							<option value="The South Sandwich Islands">The South Sandwich Islands</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="St Helena">St Helena</option>
							<option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syrian Arab Republic">Syrian Arab Republic</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Thailand">Thailand</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad And Tobago">Trinidad And Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vatican City State">Vatican City State</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Viet Nam">Viet Nam</option>
							<option value="Virgin Islands (British)">Virgin Islands (British)</option>
							<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
							<option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
							<option value="Western Sahara">Western Sahara</option>
							<option value="Yemen">Yemen</option>
							<option value="Yugoslavia">Yugoslavia</option>
							<option value="Zaire">Zaire</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
							<option value="Unknown">--Other--</option>
							</select>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF"> 
						<td valign="top" width="28%"><div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">*Comment : </font></div></td>
						<td width="72%"><textarea name="commentsTxt" cols="40" rows="7" wrap="VIRTUAL"></textarea></td>
					</tr>
					<tr bgcolor="#FFFFFF"> 
						<td width="28%"><div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">*Captcha: </font></div></td>
						<td width="72%">
							<?php
						          require_once('recaptchalib.php');
						          $publickey = "6LfhzPkSAAAAAMTt0A9HczNxljlcJzZ0psmZlllF"; // you got this from the signup page
						          echo recaptcha_get_html($publickey);
						        ?>						
						</td>
					</tr>					
					<tr bgcolor="#FFFFFF"> 
						<td colspan="2"><BR><font size=2 FACE="verdana">* Required field</font><br><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><font size="2"><input type="button" name="submitBtn" value="Submit" onClick="javascript:submitMe()"><input type="reset" value="Reset"><input type="button" value="Back" onclick="window.location='guestBook.php'"></font></div></td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
</form>
</div>
</body>
</html>