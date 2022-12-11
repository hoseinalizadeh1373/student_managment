<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @include('navbar')

    @if($layout=='index')
    <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include('studentlist')
          </section>
          <section class="col-md-5"></section>
      </div>
    </div>
    @elseif($layout=='create')
    <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include('studentlist')
          </section>
        <section class="col-md-5">
          <div class="card mb-3">
            <img src="https://assets.thehansindia.com/h-upload/2022/06/14/1297801-education-system.webp" class="card-img-top" alt="...">
            <div class="card-body">
              
              <form action="{{url('/store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label>CNE</label>
                  <input name="cne" type="text" class="form-control"  placeholder="enter cne">
                </div>
                <div class="form-group">
                  <label>first name</label>
                  <input name="firstName" type="text" class="form-control"  placeholder="enter the first name">
                </div>
                <div class="form-group">
                  <label>secondname</label>
                  <input name="lastname" type="text" class="form-control"  placeholder="enter second name">
                </div>
                <div class="form-group">
                  <label>age</label>
                  <input name="age" type="text" class="form-control"  placeholder="enter the Age">
                </div>
                <div class="form-group">
                  <label>speciality</label>
                  <input name="speciality" type="text" class="form-control"  placeholder="enter the speciality">
                </div>
                <input type="submit" class="btn btn-info" value="save">
                <input type="reset" class="btn btn-warning" value="reset">
              </form>
            </div>
          </div>
         
        </section>
        </div>
    </div>
    @elseif($layout=='show')
    <div class="container-fluid mt-4">
      <div class="row">
      <section class="col">
        @include('studentlist')
      </section>
      <section class="col"></section>
      </div>
    </div>
    @elseif($layout=='edit')
    <div class="container-fluid mt-4">
      <div class="row">
      <section class="col-md-7">
        @include('studentlist')
      </section>
      <section class="col-md-5">

        <div class="card mb-3">
          <img src="https://assets.thehansindia.com/h-upload/2022/06/14/1297801-education-system.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">update</h5>
            <form action="{{url('/update/'.$student->id)}}" method="post">
              @csrf
              <div class="form-group">
                <label>CNE</label>
                <input value="{{$student->cne}}" name="cne" type="text" class="form-control"  placeholder="enter cne">
              </div>
              <div class="form-group">
                <label>first name</label>
                <input value="{{$student->firstname}}" name="firstname" type="text" class="form-control"  placeholder="enter the first name">
              </div>
              <div class="form-group">
                <label>secondname</label>
                <input value="{{$student->lastname}}" name="lastname" type="text" class="form-control"  placeholder="enter second name">
              </div>
              <div class="form-group">
                <label>age</label>
                <input value="{{$student->age}}" name="age" type="text" class="form-control"  placeholder="enter the Age">
              </div>
              <div class="form-group">
                <label>speciality</label>
                <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control"  placeholder="enter the speciality">
              </div>
              <input type="submit" class="btn btn-info" value="update">
              <input type="reset" class="btn btn-warning" value="reset">
            </form>
          </div>
        </div>

       
      </section>
      </div>
    </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>