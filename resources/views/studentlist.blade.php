<div class="card mb-3">
  <img src="https://www.educatetogether.ie/app/uploads/2019/02/EthicalEducationUpdated.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">list of students</h5>
    <div class="col">
      <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">cne</th>
              <th scope="col">First name</th>
              <th scope="col">Last name</th>
              <th scope="col">Age</th>
              <th scope="col">speciality</th>
              <th scope="col">operations</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($students as $student)
              <tr>
              <td>{{$student->cne}}</td>
              <td>{{$student->firstname}}</td>
              <td>{{$student->lastname}}</td>
              <td>{{$student->age}}</td>
              <td>{{$student->speciality}}</td>
              <td>
                  {{-- <a href="#" class="btn btn-sm btn-info">show</a> --}}
                  <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">edit</a>
                  {{-- <a href="#" class="btn btn-sm btn-danger">delete</a> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
  </div>
</div>


