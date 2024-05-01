<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="homepage.css">
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
                List of Courses
          </div>
                <!--<form class="out_btn" style="padding: 1px; justify-items: center;" action="session_destroy.php" method="POST">
                    <input type="submit" class="out_btn" style="margin:auto; color: white; width: 100%;" name="logout" value="Log Out">
                </form> -->
           <a class="btn btn-primary" href="/dashboard" role="button" >Back</a>


        </div>
        </div>
    <div class="container1">
        <div class="container4">
            <button class="hmpge_btn" id="teacherbtn"><img src="img/chart_png.png"><br>Teacher</button>
            <button class="hmpge_btn" id="stdntbtn"><img src="img/Paper_light.png"><br>Room</button>
            <button class="hmpge_btn" id="roombtn"><img src="img/Desk_alt_light.png"><br>Course</button>
        </div>
        <div class="container5">
            <div class="containers">
                <div class="containers1">
                    <img style="margin:auto; width: 30%; margin-left: 3rem" src="img/black_paper_light.png">
                    <div class="contents">

                    </div>
                </div>
                <button class="reserve_btn" onClick="javascript:window.open('/addCourse', '_self');" >
                    <img style="width: 30%; height: 100%" src="img/Calendar_add_light.png">
                    <div class="containers1">
                    <h1 style="font-size: 2.5rem">Add Course</h1>
                    </div>
                </button>
            </div>
                    <div class="emptycontainer">
                        <div class="container my-5">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">

                                  <h5 class="card-title">{{$courses->id}}, {{$courses->course_name}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">ID NO: #{{$courses->teacher->fname}}</h6>
                                </div>

                              </div>

                                     @if($courses)
                                        <h1>{{ $courses->name }}</h1>

                                        <h2>Teacher:</h2>
                                        <p>{{ $courses->teacher->name }}</p>

                                        <h2>Students:</h2>
                                        <ul>
                                            @forelse ($courses->students as $student)
                                                <li>{{ $student->name }}</li>
                                            @empty
                                                <li>No students enrolled</li>
                                            @endforelse
                                        </ul>
                                    @else
                                        <p>Course not found.</p>
                                    @endif

                              @include('error_message')
                              @include('succes_messsage')

                        </div>
                    </div>
        </div>


    </div>



    <script type="text/javascript">
    document.getElementById("roombtn").onclick = function () {
        location.href = "createroom.html";
    };
    document.getElementById("teacherbtn").onclick = function () {
        location.href = "/teachers";
    };
    document.getElementById("stdntbtn").onclick = function () {
        location.href = "/student";
    };
    document.getElementById("outbtn").onclick = function () {

    };



    </script>
</body>
</html>
