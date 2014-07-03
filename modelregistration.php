<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dubai Exhibition Models | Registration</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style5 {font-size: 14px; color: #6A678E; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #6A678E;
}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #009900; }
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #64648b; background-color:#eaebee; border: solid 1px #64648b; }
body {
	background-color: #eaebee;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->


#dialog_base{
    /*position:fixed;*/
    text-align: center;
vertical-align: middle;
line-height: 90px;  
}

#dialog_base::before{
    content:"";
    position:absolute;
    height:9999px;
    width:100%;
    z-index:99;
    top:0;
    left:0;
    /*background:white;*/
    background:rgba(255,255,255,0.8);

    filter:blur(4px);
    -o-filter:blur(4px);
    -ms-filter:blur(4px);
    -moz-filter:blur(4px);
    -webkit-filter:blur(4px);
}

</style>

<?php
error_reporting(0);

echo "<pre>";
  //print_r($_REQUEST);
//print_r($_FILES["file1"]);
echo "</pre>";

//exit;



if(isset($_REQUEST['Submit'])){

// $fileName9 =  $_FILES["file1"]["name"][0];
// echo $fileName9 . "<br>---";
  
for ($i=0; $i < 6; $i++) { 

$sendImage .= "<img src='http://de-models.com/de-models1/pics/".$_FILES["file1"]["name"][$i]."'/>";

$fileName = $_FILES["file1"]["name"][$i];
$fileTmpLoc = $_FILES["file1"]["tmp_name"][$i];
$fileType = $_FILES["file1"]["type"][$i];
$fileSize = $_FILES["file1"]["size"][$i];
$fileErrorMsg = $_FILES["file1"]["error"][$i];


if (!$fileTmpLoc) {
} else if($fileSize > 2000000) {
    echo "ERROR: Your file was larger than 2MB in file size.";
    unlink($fileTmpLoc);
    //exit;
} else if (!preg_match("/.(gif|jpg|jpeg|png)$/i", $fileName) ) {
     echo "ERROR: Your image was not .gif, .jpg, .jpeg, or .png.";
     unlink($fileTmpLoc);
     //exit;
}
move_uploaded_file($fileTmpLoc, "pics/$fileName");
if (!file_exists("pics/$fileName")) {
}

}

// echo $sendImage;

// $sendImage = "<img src='http://de-models.com/pics/".$fileName9."'/>";

  
	  $mail_to = "info@de-models.com,dubaiexhibitionmodels@gmail.com";
      $mail_from= "info@de-models.com";
      $mail_sub="Model Registration";
      
      $body = "

<br>Model Gender: ".$_REQUEST["CONTACTCF12"]."
<br>First Name: ".$_REQUEST["First_Name"]."
<br>Last Name: ".$_REQUEST["Last_Name"]."
<br>Email: ".$_REQUEST["Email"]."
<br>Secondary Email: ".$_REQUEST["Secondary_Email"]."
<br>Home Phone: ".$_REQUEST["Home_Phone"]."
<br>Mobile: ".$_REQUEST["Mobile"]."
<br>Mobile 2: ".$_REQUEST["CONTACTCF25"]."
<br>BlackBerry PIN: ".$_REQUEST["CONTACTCF1"]."
<br>Date of Birth: ".$_REQUEST["Date_of_Birth"]."
<br>Ethnicity: ".$_REQUEST["CONTACTCF8"]."
<br>Visa Status: ".$_REQUEST["CONTACTCF9"]."
<br>City/Emirates: ".$_REQUEST["CONTACTCF10"]."
<br>Country of Origin: ".$_REQUEST["CONTACTCF26"]."
<br>Passport From: ".$_REQUEST["CONTACTCF27"]."
<br>Hair Colour: ".$_REQUEST["CONTACTCF5"]."
<br>Eye Colour: ".$_REQUEST["CONTACTCF6"]."
<br>Height: ".$_REQUEST["CONTACTCF2"]."
<br>Shoe Size: ".$_REQUEST["CONTACTCF4"]."
<br>Waist: ".$_REQUEST["CONTACTCF3"]."
<br>Chest: ".$_REQUEST["CONTACTCF11"]."
<br>Hips: ".$_REQUEST["CONTACTCF31"]."
<br>Suit Size: ".$_REQUEST["CONTACTCF32"]."
<br>Dress Size: ".$_REQUEST["CONTACTCF7"]."
<br>Plus Size: ".$_REQUEST["CONTACTCF13"]."
<br>I am interested in Promotion Jobs: ".$_REQUEST["CONTACTCF14"]."
<br>I am interested in Hostess Jobs: ".$_REQUEST["CONTACTCF15"]."
<br>I am a Dancer: ".$_REQUEST["CONTACTCF16"]."
<br>Type of Dance: ".$_REQUEST["CONTACTCF24"]."
<br>I am interested in Hand Modelling: ".$_REQUEST["CONTACTCF17"]."
<br>I am a presenter MC: ".$_REQUEST["CONTACTCF18"]."
<br>I am doing Catwalks: ".$_REQUEST["CONTACTCF19"]."
<br>I am an Actor/Actress: ".$_REQUEST["CONTACTCF20"]."
<br>I am a Singer: ".$_REQUEST["CONTACTCF21"]."
<br>I am a Musician: ".$_REQUEST["CONTACTCF22"]."
<br>Which Instrument do you Play: ".$_REQUEST["CONTACTCF23"]."
<br>Spoken Languages: ".$_REQUEST["CONTACTCF28"]."
<br>Open Comments: ".$_REQUEST["CONTACTCF29"]."
<br><br>" . $sendImage;

//echo $body;


      $headers  = 'MIME-Version: 1.0' . "\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
      $headers .= 'From: info@de-models.com' . "\n";
      //$headers .= 'Cc: abc.com' . "\r\n";
      // $headers .= 'Bcc: abc.com';
      
       mail($mail_to,$mail_sub,$body,$headers);
      $success = "Thank you, we have recieved your information. It will be updated within 24 hours after moderation.";
      
  }

?>

<script type="text/javascript">
    function showHide() {
            window.scrollTo(0,0);
            document.getElementById("dialog_base").style.display = "block";
    }
</script>

</head>

<body>


<form enctype="multipart/form-data" method="Post" action="#" onsubmit="return showHide();">

<div id="dialog_base" style="display:none">
  <img src="PleaseWait.gif"/>
</div>

</div>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
    <td width="9%" background="headerbg.png">
    <td width="41%" height="124" background="headerbg.png" bgcolor="#000000"><img src="logo.png" alt="" width="330" height="78" class="style1" /></td>
    <td width="50%" background="headerbg.png" bgcolor="#000000"><div align="center"><span class="style7">Model Registration Form</span></div></td>
    
    <td width="0%"></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="70%" border="0" align="center" cellpadding="4" cellspacing="4">

<tbody>

  <tr>
    <td width="29%"  class="style5">Model Gender &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF12" class="style10" required >  
      <option value="">
    -None-</option>  <option value="Female Model +18">Female Model +18</option>  <option value="Male Teenager Model">
    Male Teenager Model</option>  <option value="Female Teenager Model">
    Female Teenager Model</option>  <option value="Male Model + 18">Male 
    Model + 18</option>  <option value="Boy">Boy</option>  <option value="Girl">
    Girl</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">
      First Name &nbsp;&nbsp;:</font>    </td>
    <td width="75%" >
      <input name="First Name" type="text" class="style10" size="40" maxlength="40" required></td>
  </tr>

    <tr>
      <td  class="style5">Last Name &nbsp;&nbsp;:</font></td>
      <td width="75%" >
      <input name="Last Name" type="text" class="style10" size="40" maxlength="80" required> </td></tr><tr>
      <td  class="style5">Email &nbsp;&nbsp;:</font></td>
      <td width="75%" >
      <input name="Email" type="email" class="style10" size="40" maxlength="100" required> </td></tr>
  <tr>
    <td  class="style5">Secondary Email &nbsp;&nbsp;:</font></td>
    <td width="75%" >
    <input name="Secondary Email" type="text" class="style10" size="40" maxlength="100"> </td>
  </tr>
  <tr><td  class="style5">Home Phone &nbsp;&nbsp;:</font></td>
    <td width="75%" >
    <input name="Home Phone" type="text" class="style10" size="27" maxlength="30" required> </td></tr><tr>
      <td  class="style5">Mobile &nbsp;&nbsp;:</font></td>
      <td width="75%" >
      <input name="Mobile" type="text" class="style10" size="27" maxlength="30" required> </td></tr>
  <tr>
    <td  class="style5">Mobile 2 &nbsp;&nbsp;:</font></td>
    <td width="75%" >
    <input name="CONTACTCF25" type="text" class="style10" size="27" maxlength="15"> </td>
  </tr>
  <tr>
    <td  class="style5">BlackBerry PIN &nbsp;&nbsp;:</font></td>
    <td width="75%" >
    <input name="CONTACTCF1" type="text" class="style10" size="27" maxlength="8"> </td>
  </tr>
  <tr><td  class="style5">Date of Birth &nbsp;&nbsp;:</font></td>
    <td width="75%" >
    <input name="Date of Birth" type="date" class="style10" size="24" maxlength="20" required>
    <font color="#FFFFFF" face="Arial"></font> </td>
  </tr>
  <tr>
    <td  class="style5">Ethnicity &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF8" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Arabic">Arabic</option>  <option value="Asian">
    Asian</option>  <option value="Black">Black</option>  <option value="Mediterranean">
    Mediterranean</option>  <option value="Multi-ethnic">Multi-ethnic</option>  <option value="White">
    White</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">Visa Status &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF9" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Employment Visa">Employment Visa</option>  <option value="Visit Visa">
    Visit Visa</option>  <option value="Tourist Visa">Tourist Visa</option>  <option value="Father Visa">
    Father Visa</option>  <option value="Husband Visa">Husband Visa</option>  <option value="Student Visa">
    Student Visa</option>  <option value="Multiple Entry Visa">Multiple 
    Entry Visa</option>  <option value="GCC Passport">GCC Passport</option>  <option value="UAE NAtional">
    UAE NAtional</option>  <option value="No Visa">No Visa</option>  <option value="I don’t live in the UAE">
    I don’t live in the UAE</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">City/Emirates &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF10" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Dubai">Dubai</option>  <option value="Abu Dhabi">
    Abu Dhabi</option>  <option value="Sharjah">Sharjah</option>  <option value="Al Ain">
    Al Ain</option>  <option value="Ajman">Ajman</option>  <option value="Fujairah">
    Fujairah</option>  <option value="Umm Al Quwain">Umm Al Quwain</option>  <option value="Ras Al Khaimah">
    Ras Al Khaimah</option>  <option value="I don’t live in the UAE">I don’t 
    live in the UAE</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">Country of Origin &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF26" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Afghanistan">Afghanistan</option>  <option value="Albania">
    Albania</option>  <option value="Algeria">Algeria</option>  <option value="Argentina">
    Argentina</option>  <option value="Armenia">Armenia</option>  <option value="Australia">
    Australia</option>  <option value="Austria">Austria</option>  <option value="Azerbaijan">
    Azerbaijan</option>  <option value="Bahrain">Bahrain</option>  <option value="Bangladesh">
    Bangladesh</option>  <option value="Belarus">Belarus</option>  <option value="Belgium">
    Belgium</option>  <option value="Bolivia">Bolivia</option>  <option value="Brazil">
    Brazil</option>  <option value="Brunei">Brunei</option>  <option value="Bulgaria">
    Bulgaria</option>  <option value="Canada">Canada</option>  <option value="Chile">
    Chile</option>  <option value="China">China</option>  <option value="Colombia">
    Colombia</option>  <option value="Costa Rica">Costa Rica</option>  <option value="Croatia">
    Croatia</option>  <option value="Cuba">Cuba</option>  <option value="Cyprus">
    Cyprus</option>  <option value="Czech Rep">Czech Rep</option>  <option value="Denmark">
    Denmark</option>  <option value="Ecuador">Ecuador</option>  <option value="Egypt">
    Egypt</option>  <option value="Eritrea">Eritrea</option>  <option value="Estonia">
    Estonia</option>  <option value="Ethiopia">Ethiopia</option>  <option value="Finland">
    Finland</option>  <option value="France">France</option>  <option value="Gabon">
    Gabon</option>  <option value="Georgia">Georgia</option>  <option value="Germany">
    Germany</option>  <option value="Ghana">Ghana</option>  <option value="Greece">
    Greece</option>  <option value="Hong Kong">Hong Kong</option>  <option value="Hungary">
    Hungary</option>  <option value="Iceland">Iceland</option>  <option value="India">
    India</option>  <option value="Indonesia">Indonesia</option>  <option value="Iran">
    Iran</option>  <option value="Iraq">Iraq</option>  <option value="Ireland">
    Ireland</option>  <option value="Italy">Italy</option>  <option value="Jamaica">
    Jamaica</option>  <option value="Japan">Japan</option>  <option value="Jordan">
    Jordan</option>  <option value="Kazakhstan">Kazakhstan</option>  <option value="Kenya">
    Kenya</option>  <option value="Korea">Korea</option>  <option value="Kuwait">
    Kuwait]</option>  <option value="Kyrgyzstan">Kyrgyzstan</option>  <option value="Latvia">
    Latvia</option>  <option value="Lebanon">Lebanon</option>  <option value="Liberia">
    Liberia</option>  <option value="Libya">Libya</option>  <option value="Lithuania">
    Lithuania</option>  <option value="Luxembourg">Luxembourg</option>  <option value="Macedonia">
    Macedonia</option>  <option value="Madagascar">Madagascar</option>  <option value="Malaysia">
    Malaysia</option>  <option value="Mali">Mali</option>  <option value="Malta">
    Malta</option>  <option value="Mauritania">Mauritania</option>  <option value="Mauritius">
    Mauritius</option>  <option value="Mexico">Mexico</option>  <option value="Moldova">
    Moldova</option>  <option value="Mongolia">Mongolia</option>  <option value="Montenegro">
    Montenegro</option>  <option value="Morocco">Morocco</option>  <option value="Mozambique">
    Mozambique</option>  <option value="Namibia">Namibia</option>  <option value="Nepal">
    Nepal</option>  <option value="Netherlands">Netherlands</option>  <option value="New Zealand">
    New Zealand</option>  <option value="Niger">Niger</option>  <option value="Nigeria">
    Nigeria</option>  <option value="Norway">Norway</option>  <option value="Oman">
    Oman</option>  <option value="Pakistan">Pakistan</option>  <option value="Palestine">
    Palestine</option>  <option value="Paraguay">Paraguay</option>  <option value="Peru">
    Peru</option>  <option value="Philippines">Philippines</option>  <option value="Poland">
    Poland</option>  <option value="Portugal">Portugal</option>  <option value="Puerto Rico">
    Puerto Rico</option>  <option value="Qatar">Qatar</option>  <option value="Romania">
    Romania</option>  <option value="Russia">Russia</option>  <option value="Saudi Arabia">
    Saudi Arabia</option>  <option value="Senegal">Senegal</option>  <option value="Sierra Leone">
    Sierra Leone</option>  <option value="Singapore">Singapore</option>  <option value="Slovakia">
    Slovakia</option>  <option value="Slovenia">Slovenia</option>  <option value="South Africa">
    South Africa</option>  <option value="Spain">Spain</option>  <option value="Sri Lanka">
    Sri Lanka</option>  <option value="Sudan">Sudan</option>  <option value="Sweden">
    Sweden</option>  <option value="Switzerland">Switzerland</option>  <option value="Syria">
    Syria</option>  <option value="Taiwan">Taiwan</option>  <option value="Tajikistan">
    Tajikistan</option>  <option value="Tanzania">Tanzania</option>  <option value="Thailand">
    Thailand</option>  <option value="Togo">Togo</option>  <option value="Tonga">
    Tonga</option>  <option value="Tunisia">Tunisia</option>  <option value="Turkey">
    Turkey</option>  <option value="Turkmenistan">Turkmenistan</option>  <option value="Ukraine">
    Ukraine</option>  <option value="United Arab Emirates">United Arab 
    Emirates</option>  <option value="United Kingdom">United Kingdom</option>  <option value="United States">
    United States</option>  <option value="Uruguay">Uruguay</option>  <option value="Uzbekistan">
    Uzbekistan</option>  <option value="Venezuela">Venezuela</option>  <option value="Vietnam">
    Vietnam</option>  <option value="Yemen">Yemen</option>  <option value="Zambia">
    Zambia</option>  <option value="Zimbabwe">Zimbabwe</option>  <option value="Others">
    Others</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">Passport From &nbsp;&nbsp;:</font></td>
    <td width="75%" ><input name="CONTACTCF27" type="text" class="style10" maxlength="20" required> </td>
  </tr>
  <tr>
    <td  class="style5">Hair Colour &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF5" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Auburn">Auburn</option>  <option value="Bald">
    Bald</option>  <option value="Black">Black</option>  <option value="Blond">
    Blond</option>  <option value="Brown">Brown</option>  <option value="Dark Blond">
    Dark Blond</option>  <option value="Dark Brown">Dark Brown</option>  <option value="Gray">
    Gray</option>  <option value="Light Brown">Light Brown</option>  <option value="Red">
    Red</option>  <option value="Salt &amp; Pepper">Salt &amp; Pepper</option>  <option value="White">
    White</option>  <option value="Other">Other</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">Eye Colour &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF6" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Black">Black</option>  <option value="Blue">
    Blue</option>  <option value="Blue/Green">Blue/Green</option>  <option value="Brown">
    Brown</option>  <option value="Dark Blue">Dark Blue</option>  <option value="Dark Brown">
    Dark Brown</option>  <option value="Gray">Gray</option>  <option value="Green">
    Green</option>  <option value="Hazel">Hazel</option>  <option value="Light Blue">
    Light Blue</option>  <option value="Light Brown">Light Brown</option>  </select></td>
  </tr>
  <tr><td  class="style5">Height &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF2" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Less than 152 cm">Less than 152 cm</option>  <option value="153 cm / 5">
    153 cm / 5</option>  <option value="155 cm / 5-1">155 cm / 5-1</option>  <option value="158 cm / 5-2">
    158 cm / 5-2</option>  <option value="160 cm / 5-3">160 cm / 5-3</option>  <option value="163 cm / 5-4">
    163 cm / 5-4</option>  <option value="165 cm / 5-5">165 cm / 5-5</option>  <option value="168 cm / 5-6">
    168 cm / 5-6</option>  <option value="170 cm / 5-7">170 cm / 5-7</option>  <option value="171 cm / 5-7">
    171 cm / 5-7</option>  <option value="172 cm / 5-7">172 cm / 5-7</option>  <option value="173 cm / 5-8">
    173 cm / 5-8</option>  <option value="174 cm / 5-8">174 cm / 5-8</option>  <option value="175 cm / 5-9">
    175 cm / 5-9</option>  <option value="176 cm / 5-9">176 cm / 5-9</option>  <option value="177 cm / 5-9">
    177 cm / 5-9</option>  <option value="178 cm / 5-10">178 cm / 5-10</option>  <option value="179 cm / 5-10">
    179 cm / 5-10</option>  <option value="180 cm / 5-11">180 cm / 5-11</option>  <option value="181 cm / 5-11">
    181 cm / 5-11</option>  <option value="183 cm / 6">183 cm / 6</option>  <option value="184 cm / 6">
    184 cm / 6</option>  <option value="185 cm / 6-1">185 cm / 6-1</option>  <option value="186 cm / 6-1">
    186 cm / 6-1</option>  <option value="187 cm / 6-1">187 cm / 6-1</option>  <option value="188 cm / 6-2">
    188 cm / 6-2</option>  <option value="189 cm / 6-2">189 cm / 6-2</option>  <option value="190 cm / 6-3">
    190 cm / 6-3</option>  <option value="More than 190 cm">More than 190 cm</option>  </select></td></tr>
  <tr>
    <td  class="style5">Shoe Size &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF4" class="style10" required>  
      <option value="">
    -None-</option>  <option value="2 UK / 34.5 EU">2 UK / 34.5 EU</option>  <option value="2.5 UK / 35 EU">
    2.5 UK / 35 EU</option>  <option value="3 UK / 35.5 EU">3 UK / 35.5 EU</option>  <option value="3.5 UK / 36 EU">
    3.5 UK / 36 EU</option>  <option value="4 UK / 37 EU">4 UK / 37 EU</option>  <option value="4.5 UK / 37.5 EU">
    4.5 UK / 37.5 EU</option>  <option value="5 UK / 37.5 EU">5 UK / 37.5 EU</option>  <option value="5.5 UK / 38 EU">
    5.5 UK / 38 EU</option>  <option value="6 UK / 38.5 EU">6 UK / 38.5 EU</option>  <option value="6.5 UK / 39 EU">
    6.5 UK / 39 EU</option>  <option value="7 UK / 40 EU">7 UK / 40 EU</option>  <option value="7.5 UK / 41 EU">
    7.5 UK / 41 EU</option>  <option value="8 UK / 42 EU">8 UK / 42 EU</option>  <option value="8.5 UK / 43 EU">
    8.5 UK / 43 EU</option>  <option value="10 UK / 44 EU">10 UK / 44 EU</option>  <option value="11 UK / 45 EU">
    11 UK / 45 EU</option>  </select></td>
  </tr>
  <tr><td  class="style5">Waist &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF3" class="style10" required>  
      <option value="">
    -None-</option>  <option value="52 cm / 20inch">52 cm / 20inch</option>  <option value="53 cm / 21inch">
    53 cm / 21inch</option>  <option value="54 cm / 21inch">54 cm / 21inch</option>  <option value="55 cm / 22inch">
    55 cm / 22inch</option>  <option value="56 cm / 22inch">56 cm / 22inch</option>  <option value="57 cm / 22inch">
    57 cm / 22inch</option>  <option value="58 cm / 23inch">58 cm / 23inch</option>  <option value="59 cm / 23inch">
    59 cm / 23inch</option>  <option value="60 cm / 24inch">60 cm / 24inch</option>  <option value="61 cm / 24inch">
    61 cm / 24inch</option>  <option value="62 cm / 24inch">62 cm / 24inch</option>  <option value="63 cm / 25inch">
    63 cm / 25inch</option>  <option value="64 cm / 25inch">64 cm / 25inch</option>  <option value="65 cm / 26inch">
    65 cm / 26inch</option>  <option value="66 cm / 26inch">66 cm / 26inch</option>  <option value="67 cm / 26inch">
    67 cm / 26inch</option>  <option value="68 cm / 27inch">68 cm / 27inch</option>  <option value="69 cm / 27inch">
    69 cm / 27inch</option>  <option value="70 cm / 28inch">70 cm / 28inch</option>  <option value="71 cm / 28inch">
    71 cm / 28inch</option>  <option value="72 cm / 28inch">72 cm / 28inch</option>  <option value="73 cm / 29inch">
    73 cm / 29inch</option>  <option value="74 cm / 29inch">74 cm / 29inch</option>  <option value="75 cm / 30inch">
    75 cm / 30inch</option>  <option value="76 cm / 30inch">76 cm / 30inch</option>  <option value="77 cm / 30inch">
    77 cm / 30inch</option>  </select></td></tr>
  <tr>
    <td  class="style5">Chest &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF11" class="style10" required>  
      <option value="">
    -None-</option>  <option value="29-31 XXS">29-31 XXS</option>  <option value="30-32 XS">
    30-32 XS</option>  <option value="34-36 S">34-36 S</option>  <option value="38-40 M">
    38-40 M</option>  <option value="42-44 L">42-44 L</option>  <option value="46-48 XL">
    46-48 XL</option>  <option value="48-50 2XL">48-50 2XL</option>  <option value="50-52 3XL">
    50-52 3XL</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">Hips &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF31" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Less then 33">Less then 33</option>  <option value="33-34 XS">
    33-34 XS</option>  <option value="35-36 S">35-36 S</option>  <option value="37-38 M">
    37-38 M</option>  <option value="39 L">39 L</option>  <option value="40 XL">
    40 XL</option>  <option value="42-45 2XL">42-45 2XL</option>  <option value="more than 45">
    more than 45</option>  </select></td>
  </tr>
  <tr>
    <td  class="style5">Suit Size &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF32" class="style10" required>  
      <option value="">
    -None-</option>  <option value="46">46</option>  <option value="48">48</option>  <option value="50">
    50</option>  <option value="52">52</option>  <option value="54">54</option>  <option value="56">
    56</option>  <option value="58">58</option>  <option value="60">60</option>  <option value="62">
    62</option>  <option value="64">64</option>  </select></td>
  </tr>
  <tr><td  class="style5">Dress Size &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF7" class="style10" required>  
      <option value="">
    -None-</option>  <option value="Less than 4">Less than 4</option>  <option value="4-6">
    4-6</option>  <option value="6 - 8">6 - 8</option>  <option value="8 - 10">
    8 - 10</option>  <option value="10-12">10-12</option>  <option value="12-14">
    12-14</option>  <option value="14-16">14-16</option>  <option value="16-18">
    16-18</option>  <option value="18+">18+</option>  </select></td></tr><tr>
      <td  class="style5">Plus Size &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF13" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Yes">Yes</option>  </select></td></tr><tr>
      <td  class="style5">I am interested in Promotion Jobs &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF14" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Yes">Yes</option>  </select></td></tr><tr>
      <td  class="style5">I am interested in Hostess Jobs &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF15" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Yes">Yes</option>  </select></td></tr><tr>
      <td  class="style5">I am a Dancer &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF16" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Basic">
    Basic</option>  <option value="Professional">Professional</option>  </select></td></tr>
  <tr>
    <td  class="style5">Type of Dance &nbsp;&nbsp;:</font></td>
    <td width="75%" >
    <input name="CONTACTCF24" type="text" class="style10" size="68" maxlength="255" required> </td>
  </tr>
  <tr><td  class="style5">I am interested in Hand Modelling &nbsp;&nbsp;:</font></td>
    <td width="75%" ><select name="CONTACTCF17" class="style10" required>  
      <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Yes">Yes</option>  </select></td></tr><tr>
      <td  class="style5">I am a presenter MC &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF18" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Basic">
    Basic</option>  <option value="Professional">Professional</option>  </select></td></tr><tr>
      <td  class="style5">I am doing Catwalks &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF19" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Basic">
    Basic</option>  <option value="Professionals">Professionals</option>  </select></td></tr><tr>
      <td  class="style5">I am an Actor/Actress &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF20" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Basic">
    Basic</option>  <option value="Professional">Professional</option>  </select></td></tr><tr>
      <td  class="style5">I am a Singer &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF21" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Basic">
    Basic</option>  <option value="Professional">Professional</option>  </select></td></tr><tr>
      <td  class="style5">I am a Musician &nbsp;&nbsp;:</font></td>
      <td width="75%" ><select name="CONTACTCF22" class="style10" required>  
        <option value="">
    -None-</option>  <option value="No">No</option>  <option value="Basic">
    Basic</option>  <option value="Professional">Professional</option>  </select></td></tr><tr>
      <td  class="style5">Which Instrument do you Play &nbsp;&nbsp;:</font></td>
      <td width="75%" >
      <input name="CONTACTCF23" type="text" class="style10" size="68" maxlength="50" required> </td></tr><tr>
      <td  class="style5">Spoken Languages &nbsp;&nbsp;:</font></td>
      <td width="75%" >
    <input name="CONTACTCF28" type="text" class="style10" size="67" maxlength="255" required> </td></tr><tr>
      <td  class="style5">Open
    Comments &nbsp;&nbsp;:</font></td><td width="75%" >
    <input name="CONTACTCF29" type="text" class="style10" size="67" maxlength="255" required> </td></tr>


 <tr>
    <td class="style5">Upload Image</td>
    <td>
      <label>
          <input name="file1[]" type="file" class="style10" accept="image/gif, image/jpeg, image/png, image/jpg" multiple="true" required/>
      </label>    </td>
  </tr>


    <tr>
    <td>
      <label>
          <input type="submit" name="Submit" id="Submit" value="Submit"/>
          
        </label>      </td>
    <td><span class="style9"><?php echo $success;?></span></td>
  </tr>
      </tbody>
</table>


</form>



</body>
</html>