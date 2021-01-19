<html margin="0" padding="0">

   <head>
      <title>Note2U - Send free anonymous secret notes!</title>
      <meta name="description" content="Clever way to leave messages (notes) in the DarkNet">
      <meta name="keywords" content="message, communication, privacy, security, crypted, hidden, service, xxx, password, hash, news, search">
      <meta name="viewport" content="width=device-width,initial-scale=1">
   </head>

<style>
html *
{
   font-size: 14;
}

.form-style-7{
	max-width:400px;
	margin:20px auto;
	background:#000;
	border-radius:2px;
	padding:20px;
	padding-top:0px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 h1{
	display: block;
	text-align: center;
	padding: 0;
	margin: 0px 0px 20px 0px;
	color: #0000ff;
	font-size:x-large;
}
.form-style-7 ul{
	list-style:none;
	padding:0;
	margin:0;
}
.form-style-7 li{
	display: block;
	padding: 9px;
	border:1px solid #fff;
	margin-bottom: 30px;
	border-radius: 3px;
}
.form-style-7 li:last-child{
	border:none;
	margin-bottom: 0px;
	text-align: center;
}
.form-style-7 li > label{
	display: block;
	float: left;
	margin-top: -19px;
	background: #000;
	height: 14px;
	padding: 2px 5px 2px 5px;
	color: #fff;
	font-size: 14px;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="date"],
.form-style-7 input[type="datetime"],
.form-style-7 input[type="email"],
.form-style-7 input[type="number"],
.form-style-7 input[type="search"],
.form-style-7 input[type="time"],
.form-style-7 input[type="subject"],
.form-style-7 input[type="password"],
.form-style-7 select
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	display: block;
	outline: none;
	border: none;
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
        background: #000;
        color:#fff;
}
.form-style-7 textarea
{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        display: block;
        outline: none;
        border: none;
        height: 100px;
        line-height: 25px;
        font-size: 16px;
        padding: 0;
        font-family: Georgia, "Times New Roman", Times, serif;
        background: #000;
        color:#fff;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="date"]:focus,
.form-style-7 input[type="datetime"]:focus,
.form-style-7 input[type="email"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="search"]:focus,
.form-style-7 input[type="time"]:focus,
.form-style-7 input[type="subject"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus
{
}
.form-style-7 li > span{
	background: #fff;
	display: block;
	padding: 3px;
	margin: 0 -9px -9px -9px;
	text-align: center;
	color: #000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.form-style-7 textarea{
	resize:none;
}
.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
	background: #000;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #fff;
	border-radius: 3px;
	color: #fff;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
	background: #fff;
	color:#000;
}

.form-style-99{
	max-width: 430px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-99 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-99 label > span{
	float: center;
	width: 50px;
	color: #fff;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #000;
}
.form-style-99 fieldset{
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
.form-style-99 fieldset legend{
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
.form-style-99 textarea{
	width:400px;
	height:100px;
}
.form-style-99 input[type=text],
.form-style-99 input[type=date],
.form-style-99 input[type=datetime],
.form-style-99 input[type=number],
.form-style-99 input[type=search],
.form-style-99 input[type=time],
.form-style-99 input[type=url],
.form-style-99 input[type=email],
.form-style-99 select,
.form-style-99 textarea{
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
	width:410;
}
.form-style-99  input[type=submit],
.form-style-99  input[type=button]{
	background: #000000;
	border: 1px solid #ffffff;
	padding: 5px 15px 5px 15px;
	color: #fff;
	box-shadow: inset -1px -1px 3px #fff;
	-moz-box-shadow: inset -1px -1px 3px #000;
	-webkit-box-shadow: inset -1px -1px 3px #000;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	font-weight: normal;
}

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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #222222;
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

<body bgcolor="#000000" text="#ffffff" link="#ffffff" vlink="#ffffff" alink="#ffffff">

<center>
<table border="0" bordercolor="#ffffff" width="600">
  <tr>
    <td align="left" valign="top"><img src="logo.png" width="370" height="110"></td>

    <td align="center" valign="bottom" width="50%">
      <div class="form-style-3">
      <form action="" method="post">
      <input type="text" class="input-field" name="noteid" value="Note ID" />
      <input type="text" class="input-field" name="password" value="Password" />
      <input type="submit" name="submit" value="OPEN" />
      </form>
      </div>
    </td>

    <td align="center" valign="bottom" width="50%">
      <div class="form-style-3">
      <form action="" method="post">
      <b>CREATE</b><br>
      <input type="text" class="input-field" name="password" value="Password" />
      <input type="submit" name="submit" value="NEW" />
      </form>
      </div>
    </td>
  </tr>
</table>
</center>
<br>