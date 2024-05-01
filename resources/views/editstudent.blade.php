<!--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form 2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {

  background: linear-gradient(to left, #A8E6CE   , #DCEDC2   , #FFD3B5   );
  height: 100vh;
  font-family: "Poppins", sans-serif;
  font-weight: bold;

    }

    .container {
      padding: 40px;
      width: 500px;
      margin: 20px auto;
      background-color: #f1f1f1;
    }

    .container h2 {
      text-align: center;
    }

    fieldset {
      border: 1px solid #d4d4d4;
      padding: 20px 10px;
      margin-bottom: 20px;
      border-radius: 8px;
    }

    .input-field {
      display: flex;
      margin-bottom: 15px;
    }

    label {
      margin-right: 25px;
      margin-top: 5px;
      width: 30%;
      text-align: right;
      font-weight: bold;
    }

    .icon {
      background: #fcfcfa;
      color: rgb(199, 104, 104);
      min-width: 40px;
      border: 2px solid #e2e2e2;
      border-right: none;
      text-align: center;
      padding: 7px;
    }

    .inputs {
      padding: 3px 10px;
      border: 2px solid #f7cb51;
      width: 70%;
    }

    input [type="radio"] {
      margin-right: 8px;
    }

    .textarea {
      padding: 8px;
      border: 2px solid #e2e2e2;
    }

    .textarea-icon {
      padding-top: 14px;
    }

    .button {
      text-align: center;
    }

    .submit {
      color: white;
      background: #ee9a25;
      padding: 9px 25px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
      box-shadow: 0 0 5px #c9c9c9;
    }

    .submit:hover {
      background: #d1871e;
    }

    .reset {
      color: white;
      background: #c93232;
      padding: 9px 25px;
      border: none;
      border-radius: 5px;
      box-shadow: 0 0 5px #c9c9c9;
    }

    .reset:hover {
      background: #a32727;
    }

    .city {
      margin-left: -6px;
    }

    .gender {
      margin-left: -30px;
    }

    .courses {
      margin-left: -26px;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    .message {
      margin-left: -30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
     <form class="row g-3" action="" method="post">
      <fieldset>
        @csrf

        <div class="input-field">

          <label for="fname" class="form-label">First Name</label>
          <i class="fa fa-user icon"></i>
          <input type="name" class="form-control" id="fname" name="fname" value="{{$students->fname}}"  required>

        </div>

        <div class="input-field">
          <label for="lname" class="form-label">Last Name</label>
          <i class="fa-solid fa-people-roof icon"></i>
          <input type="name" class="form-control" id="lname" name="lname" value ="{{$students->lname}}" required>
        </div>
        <div class="input-field">
          <label for="inputAddress" class="form-label">Address</label>
          <i class="fa-solid fa-people-roof icon"></i>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{$students->address}}" required>
        </div>
        <div class="input-field">
          <label for="bdate" class="form-label">Birthdate</label>
          <i class="fa fa-envelope icon"></i>
          <input type="date" class="form-control" id="bdate" name="bdate" value="{{$students->birthdate}}" required>
        </div>
        <!--<div class="input-field">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" required>
        </div>
        <div class="input-field">
            <label for="province" class="form-label">Province</label>
            <input type="text" class="form-control" id="province" name="province" required>
        </div>
        <div class="input-field">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="zip" required>
        </div>

    -->


      <!--<div class="button">
        <button type="submit" class="btn btn-primary">Add Student</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
        <a class="btn btn-secondary" href="/student" role="button">Back</a>

      </div>-->
      <div class="col-12">
        <input href="/student" value="Submit Edit" type="submit" id="submit" style="background-color: #874CCC; color: white; border: none" class="btn btn-dark">
     </div>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<!--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
-->
