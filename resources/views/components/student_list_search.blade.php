@include('layouts.header')
@include('layouts.sidebar')

<div class="content-wrapper">
<form action="/students_data" method="post">
 @csrf
 <input type="text" name="program_id">
  <input type="submit" value="search">

</form>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">program_id</th>
      <th scope="col">name</th>
      <th scope="col">admission_no</th>
      <th scope="col">specialization</th>
      <th scope="col">Year</th>
      <th scope="col">semester</th>
      <th scope="col">email_id</th>
      <th scope="col">contact_no</th>
      <th scope="col">nri_status</th>
      <th scope="col">noc_status</th>
      <th scope="col">session</th>
      
    </tr>
  </thead>
  <tbody>
   
  @if(count($data1))

      @foreach($data1 as $student_list)
    <tr>
      <th scope="row">{{$student_list['id']  }}</th>
      <td>{{ $student_list['program_id'] }}</td>
      <td>{{$student_list['name']  }}</td>
      <td>{{$student_list['admission_no'] }}</td>
      <td>{{ $student_list['specialization'] }}</td>
      <td>{{ $student_list['year']  }}</td>
      <td>{{ $student_list['semester']  }}</td>
      <td>{{ $student_list['email_id']  }}</td>
      <td>{{ $student_list['contact_no']  }}</td>
      <td>{{ $student_list['nri_status']  }}</td>
      <td>{{ $student_list['noc_status']  }}</td>
      <td>{{ $student_list['session']  }}</td>
    </tr>
    @endforeach 
      
      
    </tr>
    @else
  <tr>
    <td colspan="3"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data not found </strong> please try again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></td>
  </tr>
  @endif
  </tbody>
</table>
















</div>
@include('layouts.footer')