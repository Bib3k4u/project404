@include('layouts.header')
@include('layouts.sidebar')
<div class="content-wrapper">

<h3>update program with program name {{$updateProgram['program_id']}}</h3>


<form action="/edit" method="POST">
 @csrf 
   <input type="hidden" name="id" value={{$updateProgram['id']}}>
    <label for="program_id">Program Id</label>
    <input type="text" name="program_id" id="" value={{$updateProgram['program_id'] }}>
    <label for="program_name">Program Name</label>
    <input type="text" name="program_name" id="" value={{$updateProgram['program_name'] }}>
    <label for="specialization">Specialization</label>
    <input type="text" name="specialization" id="" value={{$updateProgram['specialization'] }}>
    <label for="year">Year</label>
    <input type="text" name="year" id="" value={{$updateProgram['year'] }}>
    <label for="semester">semester</label>
    <input type="text" name="semester" id="" value={{$updateProgram['semester'] }}>
   <Button type="submit">Update</Button>
</form>



</div>