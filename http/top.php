<html margin="0" padding="0">
<style>
.form-style-3{
	max-width: 215px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 90px;
	color: #fff;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #000;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 10px 0px 0px;
	border: 1px solid #fff;
	padding: 0px;
	background: #000;
	box-shadow: inset 0px 0px 15px #000;
	-moz-box-shadow: inset 0px 0px 15px #000;
	-webkit-box-shadow: inset 0px 0px 15px #000;
}
.form-style-3 fieldset legend{
	color: #fff;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #000;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #fff;
	-moz-box-shadow:-0px -1px 2px #fff;
	-webkit-box-shadow:-0px -1px 2px #fff;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:100px;
	height:10px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select,
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #fff;
	outline: none;
	color: #fff;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #000;
	-moz-box-shadow: inset 1px 1px 4px #000;
	-webkit-box-shadow: inset 1px 1px 4px #000;
	background: #000;
	width:100;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #000000;
	border: 1px solid #ffffff;
	padding: 5px 15px 5px 15px;
	color: #fff;
	box-shadow: inset -1px -1px 3px #00d;
	-moz-box-shadow: inset -1px -1px 3px #000;
	-webkit-box-shadow: inset -1px -1px 3px #000;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	font-weight: normal;
}
.required{
	color:red;
	font-weight:normal;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}
a:hover {
  background-color: #ffffff;
  color: black;
}
.button {
  background-color: #000000;
  color: white;
}
.label {
  background-color: #000000;
  color: white;
}
#header{
  min-height: 20px;
}
#chartTEM{
  min-height: 300px;
}
#chartPRE{
  min-height: 300px;
}
#header, #chartTEM, #chartPRE{
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 0px;
  margin-bottom: 0px;
}
@viewport{
  zoom: 1.0;
  width: extend-to-zoom;
}
@-ms-viewport{
  zoom: 1.0;
  width: extend-to-zoom;
}
</style>
<body bgcolor="#000000" text="#ffffff" link="#0000ff" vlink="#00ffff" alink="#ff0000">

<table border="0" bordercolor="#ffffff" width="100%" height="100%">
  <tr>
    <td align="left" valign="top"><img src="logo.png"></td>

    <td align="right" valign="top" width="50%">
      <div class="form-style-3">
      <form action="open.php" method="post" target="main">
      <fieldset><legend>OPEN</legend>
      <label for="field1"><span>Note ID: &nbsp;<span class="required"></span></span><input type="text" class="input-field" name="noteid" value="" /> &nbsp;&nbsp;</label>
      <label for="field2"><span>Password: &nbsp;<span class="required"></span></span><input type="text" class="input-field" name="password" value="" /> &nbsp;&nbsp;</label>
      <label><span> </span><input type="submit" name="submit" value="OPEN" /> &nbsp;&nbsp;</label>
      </fieldset>
      </form>
      </div>
    </td>

    <td align="right" valign="top" width="50%">
      <div class="form-style-3">
      <form action="new.php" method="post" target="main">
      <fieldset><legend>NEW</legend>
      <label for="field1"><span>Note ID: &nbsp;<span class="required"></span></span><input type="text" class="input-field" name="noteid" value="- automatic -" disabled /> &nbsp;&nbsp;</label>
      <label for="field2"><span>Password: &nbsp;<span class="required"></span></span><input type="text" class="input-field" name="password" value="<?php echo date('mdHis'); ?>" /> &nbsp;&nbsp;</label>
      <label><span> </span><input type="submit" name="submit" value="NEW" /> &nbsp;&nbsp;</label>
      </fieldset>
      </form>
      </div>
    </td>

  </tr>
</table>

</body></html>
