<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>

</head>
<body>
    <div style="display: flex;  margin: auto;width: 100vw; height: 12vh;">
        <div class="container2">
            <img style="margin: auto; margin-right: 0; width: 15%; height: 100%;" src="img/Mic_alt_fill.png">
            <h1 class="header">Enrollment System</h1>
        </div>
        <div class="container3">
            <div class="dashboard">
                List of Students
          </div>
                <!--<form class="out_btn" style="padding: 1px; justify-items: center;" action="session_destroy.php" method="POST">
                    <input type="submit" class="out_btn" style="margin:auto; color: white; width: 100%;" name="logout" value="Log Out">
                </form> -->
           <a class="btn btn-primary" href="/dashboard" role="button" >Back</a>


        </div>
        </div>
    <div class="container1">
        <div class="container4">
            <button class="hmpge_btn" id="homebutton"><img src="img/chart_png.png"><br>Enrollment</button>
            <button class="hmpge_btn" id="stdntbtn"><img src="img/Paper_light.png"><br>Student</button>
            <button class="hmpge_btn"><br></button>
        </div>
        <div class="container5">
            <div class="containers">
                <div class="containers1">
                    <img style="margin:auto; width: 30%; margin-left: 3rem" src="img/black_paper_light.png">
                    <div class="contents">

                    </div>
                </div>
                <button class="reserve_btn" onClick="javascript:window.open('/addstudent', '_self');" >
                    <img style="width: 30%; height: 100%" src="img/Calendar_add_light.png">
                    <div class="containers1">
                    <h1 style="font-size: 2.5rem">Add Student</h1>
                    </div>
                </button>
            </div>
                    <div class="emptycontainer">
                        <div class="container my-5">
                            <table class="table">
                                <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <a href="" class="btn btn-outline-primary" data-mdb-ripple-init>search</a>
                                </div
                                <thead>

                                    <tr>

                                  <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                  <th>Birthdate</th>

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
                                        <td><a class='btn btn-primary btn-sm'>Edit</a></td>
                                        <td><a class='btn btn-danger btn-sm'>Delete</a></td>
                                    </tr>
                                    @endforeach
                                    @foreach($students as $student)
                                      <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->fname}}</td>
                                        <td>{{$student->lname}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->birthdate}}</td>
                                        <td><a  href="/editstudent/{{$student->id}}"class='btn btn-primary btn-sm'>Edit</a></td>
                                        <td><a href="delete/{{$student->id}}"class='btn btn-danger btn-sm'>Delete</a></td>
                                      </tr>

                                      @endforeach
                                      {{ $students->links()}}

                            </tbody>
                              </table>
                              @include('succes_messsage')
                        </div>
                    </div>
        </div>


    </div>



    <script type="text/javascript">

    document.getElementById("homebutton").onclick = function () {
        location.href = "/enrollment";
    };
    document.getElementById("stdntbtn").onclick = function () {
        location.href = "/student";
    };
    document.getElementById("outbtn").onclick = function () {

    };



    </script>
</body>
</html>
