<!doctype html>
<html lang="en">
<head>
<meta charset="utf8">
<meta name="viewport"content="width=device-width initial-scale=1">
<link rel="stylesheet" href="
http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <title>sanjeevani health care</title>
</head>
<body>
       <h1 class="text-center" style="background-color:yellow;">Check-in form</h1>

<form method="POST" action="patient.php">
<div class="form-group">
<label for="name">name:</label>
<input type="text" class="form-control"  name="NAME" id="name" placeholder="enter-name"></div>
<div class="form-group">
<label for="ID">ID:</label>
<input type="number" class="form-control"  name="ID" id="ID" placeholder="ID"></div>
<div class="form-group">
<label for="age">age:</label>
<input type="text" class="form-control" name="age" id="age" placeholder="enter ur age">
<label for="mob-no.">mobno:</label>
<input type="text" class="form-control" name="mobno" id="mob-no." placeholder="enter ur  contact no."></div>
<div class="form-group">
<label for="emergency-contact2">emergency-contact name::</label>
<input type="text" class="form-control" name="ename" id="emergency-contact2" placeholder="enter ur emergency-contact name"></label></div>

<div class="form-group">
<label for="emergency-contact">relation to person</label>
<select multiple class="form-control" name="rtp" id="emergency-contact"><option value="Father">Father</option>
<option value="mother">Mother</option>
<option value="son">son</option>
<option value="daughter">daughter</option>
<option value="spouse">spouse</option>
<option value="fiancee">fiancee</option>
<option value="legal guardian">legal guardian</option>
<option value="friend">Friend</option>
</select>
<div>
<div class="form-group">
<label for="mob-no2.">emergency contact no:</label>
<input type="text" class="form-control" name="eno"id="mob-no2." placeholder="enter ur emergency contact no."></div>

</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" name="email" id="email" placeholder="enter email">
</div>
<div class="form-group">
<label for="age">select your age group</label>
<select multiple class="form-control" name="agegroup" id="age"><option value="kid">infant(0-4)</option>
<option value="child">child(4-12)</option>
<option value="young">young(5-19)</option>
<option value="adult">adult(20-50)</option>
<option value="old">old(50-60)</option></select></div>
<div class="form-group">
<label for="sex">maleor female</label>
<select multiple class="form-control" name="sex" id="sex"><option value="male">male</option>
<option value="female">female</option></select></div>

allergic to anything:<div class="radio"><label><input type="radio" name="allergy1"id="allergic1" value="yes">yes</label>
<label><input type="radio" name="allergy2"id="allergic2" value="no">NO</label>
</div>
Taking any medications:<div class="radio"><label><input type="radio" name="medications1"id="medications1" value="yes">yes</label>
<label><input type="radio" name="medications2"id="mdeications2" value="no">NO</label>
</div>
<div class="form-group">
<label for="bg">select your blood group</label>
<select multiple class="form-control" name="bg" id="bg"><option value="Apositive">A<sup>+</sup></option>
<option value="Bpositive">B<sup>+</sup></option>
<option value="ABpositive">AB<sup>+</sup></option>
<option value="Opositive">O<sup>+</sup></option>
<option value="Onegative">O<sup>-</sup></option>
<option value="ABnegaitive">AB<sup>-</sup></option>
<option value="Bneagtitive">B<sup>-</sup></option>
</select>
<input type="file" name="fileToUpload" id="fileToUpload">
<!--<input type="submit" value="Upload Image" name="submit">-->
<div class="form-group">
<label for="address">permanent adress</label>
<textarea class="form-group" name="addr" id="address"rows="3"></textarea></div>



<button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
