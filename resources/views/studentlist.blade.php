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
         
            <th scope="row">3</th>
            @@foreach ($students as $student)
                
            
            <tr>
            <td>{{$student->cne}}</td>
            <td>{{$student->firstname}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->speciality}}</td>
            <td>
                <a href="#" class="btn btn-sm btn-info">show</a>
                <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warnig">edit</a>
                <a href="#" class="btn btn-sm btn-danger">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>