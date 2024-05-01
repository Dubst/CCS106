<!--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
-->
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {

  background: linear-gradient(to left, #A8E6CE   , #DCEDC2   , #FFD3B5   );
  height: 100vh;
  font-family: "Poppins", sans-serif;
  font-weight: bolder;
}

h1 {
  font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #342424;
}

h2 {
  font-size:1em;
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.white { color: #cdb0b0; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #7c939d;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #b3ada7;
	   -moz-box-shadow: 0 2px 2px -2px #dc5e4a;
	        box-shadow: 0 2px 2px -2px #f5fc78;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #ffffff;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #8e8883;
}

.container th {
	  background-color: #ffffff;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #FFD3B5;
	   -moz-box-shadow: 0 6px 6px -6px #FFD3B5;
	        box-shadow: 0 6px 6px -6px #FFD3B5;
}

.container td:hover {
  background-color: #FFD3B5;
  color: #000;
  font-weight: bold;

  box-shadow: #FF8C94 -1px 1px, #FFAAA6 -2px 2px, #FFAAA6 -3px 3px, #FFAAA6 -4px 4px, #FFAAA6 -5px 5px, #FFAAA6 -6px 6px;
  transform: translate3d(6px, -6px, 0);

  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}



@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
</style>


<body>
  <h1><span class="White">STUDENT LIST</pan></h1>
  <table class="container">
	<thead>
		<tr>

      <th><h1>ID</h1></th>
			<th><h1>First Name</h1></th>
			<th><h1>Last Name</h1></th>
			<th><h1>Address</h1></th>
      <th><h1>Birthdate</h1></th>

		</tr>
	</thead>
  <tbody>
         @foreach($hd_students as $hd_student)
		<tr>
			<td>{{$hd_student['id']}}</td>
			<td>{{$hd_student['fname']}}</td>
			<td>{{$hd_student['lname']}}</td>
			<td>{{$hd_student['address']}}</td>
            <td>{{$hd_student['birthdate']}}</td>
        </tr>
        @endforeach
        @foreach($students as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->fname}}</td>
            <td>{{$student->lname}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->birthdate}}</td>
          </tr>
          @endforeach

</tbody>
  </table>

<a class="btn btn-secondary" style="margin-left: 8.25rem; margin-top: 1rem;" href="/dashboard" role="button">Back</a>
<a class="btn btn-primary" style="margin-top: 1rem;" href="/addstudent">Add Student</a></li>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<!--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
-->
