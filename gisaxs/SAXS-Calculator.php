<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <title>SAXS-Calculator</title>
</head>
<body style="background-color: rgb(255, 204, 51); color: rgb(0, 0, 0);"
 alink="#000088" link="#0000ff" vlink="#ff0000">
<h2>SAXS Calculator</h2>
<h3>maximum resolution</h3>
<p>
</p>
<form action="SAXS-Calculator.php" method="post">
  <script language="php">
echo "bs diameter <input type=\"text\" name=\"dia\" value=$_POST['dia']><br>";
echo "bs distance <input type=\"text\" name=\"l_bs\" value=$_POST['l_bs']><br>";
echo "Energy      <input type=\"text\" name=\"E\" value=$_POST['E']>"<br>;
if($_POST['l_bs']!=NULL) {
$tthmin=($_POST['dia']/2+10*0.0482)/$_POST['l_bs']);
}
echo "<input type="\submit"\ value=\"calculate\">";
echo "d_max= <input type=\"text\"".$d_max==NULL?">":"value=$d_max>";
  </script></form>
<br>
<br>
<h3>energy from Ag behenate ring<br>
</h3>
<br>
<br>
</body>
</html>
