@include('layouts.header')
@include('layouts.sidebar')

<div class="content-wrapper">
<h3>Galgotias university</h3>
<table>
 <tr>
      <th>S.NO.</th>
      <th>Program_id</th>
      <th>Admission_no</th>
      <th>specialization</th>
      <th>year</th>
      <th>semester</th>
      <th>Email_id</th>
      <th>contact_no</th>
      <th>NRI_status</th>
      <th>NOC_status</th>
      <th>session</th>
 </tr>
 @foreach($testing as $studnet)
    <tr>
      <td>{{$studnet['id']  }}</td>
      <td>{{ $studnet['program_id'] }}</td>
      <td>{{$studnet['admission_no'] }}</td>
      <td>{{ $studnet['specializatioin'] }}</td>
      <td>{{ $studnet['year']  }}</td>
      <td>{{ $studnet['semester']  }}</td>
      <td>{{ $studnet['email_id']  }}</td>
      <td>{{ $studnet['contact_no']  }}</td>
      <td>{{ $studnet['nri_status']  }}</td>
      <td>{{ $studnet['noc_status']  }}</td>
      <td>{{ $studnet['session']  }}</td>
    </tr>
    @endforeach 
</table>
</div>
@include('layouts.footer')