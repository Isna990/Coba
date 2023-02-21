<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3.jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<h1>Testing Junior Programmer ATR/BPN</h1>
</head>
<p>Data Pegawai </p>
<body>

<input style="background-color: red" type="button" name="button1" value="hiden" onclick="hidden1();">
<input style="background-color: blue" type="button" name="button2" value="show" onclick="show1();">

<form name="form1" action="" method="post">



<table class="table table-bordered" id="tl" width="100%" cellspacing="1">
	<thead>
	<tr>
		<th> Nomor </th>
		<th> Kode Unit Kerja</th>
		<th> Unit Kerja</th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td type="" id="btn">0012 
			</td>
			<td>Pusdatin</td>
		</tr>
		<tr>
			<td>2</td>
			<td type="" id="btn">0013 </td>
			<td>PPSDM</td>
		</tr>
		<tr>
			<td>3</td>
			<td type="" id="btn">0014 </td>
			<td>Puslitbang</td>
		</tr>
	</tbody>
</table>


</form>

<script type="text/javascript">
function hidden1() {
	document.getElementById("tl").style.visibility='hidden';
}					
function show1() {
	document.getElementById("tl").style.visibility='';
}
</script>

<script src="js/sweetalert2.all.min.js"></script>
<script>
	const btn = document.getElementById('btn');
	btn.addEventListener('click', function(){
		Swal.fire('This page says')
	});
</script>

</body>
</html>