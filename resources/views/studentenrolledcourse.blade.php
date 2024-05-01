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
            <button class="hmpge_btn" id="homebtn"><img src="img/chart_png.png"><br>Enrollment</button>
            <button class="hmpge_btn" id="stdntbtn"><img src="img/Paper_light.png"><br>Student</button>
            <button class="hmpge_btn" id="roombtn"><img src="img/Desk_alt_light.png"><br>Subject</button>
        </div>
        <div class="container5">
            <div class="containers">
                <div class="containers1">
                    <img style="margin:auto; width: 30%; margin-left: 3rem" src="img/black_paper_light.png">
                    <div class="contents">

                    </div>
                </div>

                <button class="reserve_btn" onClick="javascript:window.open('/enrollcourses/{{$students->id}}', '_self');" >
                    <img style="width: 30%; height: 100%" src="img/Calendar_add_light.png">
                    <div class="containers1">
                    <h1 style="font-size: 2.5rem">Enroll Course</h1>
                    </div>

            </div>
                    <div class="emptycontainer">
                        @if ($students)
                        <div class="container my-5">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">

                                  <h5 class="card-title">{{$students->fname}}, {{$students->lname}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">ID NO: #{{$students->id}}</h6>
                                </div>

                              </div>
                              <br>
                              <p class="h2">Courses Enrolled: </p>
                              <table class="table">

                                <thead>

                                    <tr>

                                        <th>Course ID</th>
                                        <th>Course Name</th>
                                        <th>Course Unit</th>
                                        <th>Course Sched</th>
                                        <th>Course Teacher</th>


                                    </tr>
                                </thead>
                              <tbody>

                                    @foreach ($students->courses as $course)
                                    <tr>
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->course_name}}</td>
                                        <td>{{$course->course_unit}}</td>
                                        <td>{{$course->course_sched}}</td>
                                        <td>{{$course->teacher->lname}}, {{$course->teacher->fname}}</td>
                                    </tr>
                                      @endforeach


                            </tbody>
                              </table>

                              @include('succes_messsage')
                        </div>
                        @else
                            <p>Student not found.</p>
                        @endif
                    </div>
        </div>


    </div>



    <script type="text/javascript">
    document.getElementById("roombtn").onclick = function () {
        location.href = "createroom.html";
    };
    document.getElementById("homebtn").onclick = function () {
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
