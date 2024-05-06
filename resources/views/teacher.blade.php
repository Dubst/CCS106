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
            <h1 class="header">Faculty</h1>
        </div>
        <div class="container3">
            <div class="dashboard">
                Faculty Members
          </div>
                <!--<form class="out_btn" style="padding: 1px; justify-items: center;" action="session_destroy.php" method="POST">
                    <input type="submit" class="out_btn" style="margin:auto; color: white; width: 100%;" name="logout" value="Log Out">
                </form> -->
           <a class="btn btn-primary" href="/dashboard" role="button" >Back</a>


        </div>
        </div>
    <div class="container1">
        <div class="container4">
            <button class="hmpge_btn" id="homebtn"><img src="img/chart_png.png"><br>Teacher</button>
            <button class="hmpge_btn"><br>NOT AVAILABLE</button>
            <button class="hmpge_btn" id="subjectbtn"><img src="img/Desk_alt_light.png"><br>Subject</button>
        </div>
        <div class="container5">
            <div class="containers">
                <div class="containers1">
                    <img style="margin:auto; width: 30%; margin-left: 3rem" src="img/black_paper_light.png">
                    <div class="contents">

                    </div>
                </div>
                <button class="reserve_btn" onClick="javascript:window.open('/addteacher', '_self');" >
                    <img style="width: 30%; height: 100%" src="img/Calendar_add_light.png">
                    <div class="containers1">
                    <h1 style="font-size: 2.5rem">Add Teachers</h1>
                    </div>
                </button>
            </div>
                    <div class="emptycontainer">
                        <div class="container my-5">

                            <table class="table">
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
                                    @foreach($teachers as $teacher)
                                      <tr>
                                        <td>{{$teacher->id}}</td>
                                        <td>{{$teacher->fname}}</td>
                                        <td>{{$teacher->lname}}</td>
                                        <td>{{$teacher->address}}</td>
                                        <td>{{$teacher->birthdate}}</td>
                                        <td><a href= "editteacher/{{$teacher->id}}" class='btn btn-primary btn-sm'>Edit</a></td>
                                        <td><a href="deleteTeacher/{{$teacher->id}}" class='btn btn-danger btn-sm'>Delete</a></td>

                                      </tr>

                                      @endforeach

                            </tbody>
                              </table>
                              @include('error_message')
                              @include('succes_messsage')

                        </div>
                    </div>
        </div>


    </div>



    <script type="text/javascript">
    document.getElementById("subjectbtn").onclick = function () {
        location.href = "/Course";
    };
    document.getElementById("homebtn").onclick = function () {
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
