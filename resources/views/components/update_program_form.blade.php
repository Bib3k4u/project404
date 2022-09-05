@include('layouts.header')
@include('layouts.sidebar')
<link rel="stylesheet" href="dist/css/projectcss/update_program.css">

<div class="content-wrapper">
<style>
  .content-wrapper{
    height:100vh;
  }
  .row{
    margin-bottom:15px;
  }
  input{
    width:70%;
    border-radius:4px;
    border:1px solid gray;
    padding:4px;
    font-size:larger;
  }
</style>



<div class="container">
<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value={{$updateProgram['id']}}>
  <div class="form">
  <div class="row">
    <div class="col-md-12">
    <h3>Update Program with Program Name {{$updateProgram['program_id']}}</h3>

    </div>
  </div>
<div class="row">
  <div class="col-md-2">
  <label style="" for="program_id">Program Id</label>
  </div>
  <div class="col-md-6" offset-2>
  <input type="text" name="program_id" id="" value={{$updateProgram['program_id'] }}>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  <label style="" for="program_id">Program Name</label>
  </div>
  <div class="col-md-6" offset-2>
  <input type="text" name="program_name" id="" value={{$updateProgram['program_name'] }}>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  <label style="" for="program_id">Specialization</label>
  </div>
  <div class="col-md-6" offset-2>
  <input type="text" name="specialization" id="" value={{$updateProgram['specialization'] }}>

  </div>
</div>

<div class="row">
  <div class="col-md-2">
  <label style="" for="program_id">year</label>
  </div>
  <div class="col-md-6" offset-2>
  
  <input type="text" name="year" id="" value={{$updateProgram['year'] }}>
  </div>
</div>

<div class="form-group">
<div class="row">
  <div class="col-md-2">
  
  <label style="" for="program_id">semester</label>
  </div>
  <div class="col-md-6" offset-2>

  <input type="text" name="semester" id="" value={{$updateProgram['semester'] }}>
  </div>
</div>
<div class="form-group">


<div class="row">
  <div class="col-md-12">
  <Button  class="btn btn-primary" type="submit">Update</Button>
  </div>
</div>


</div>



</form>


</div>





</div>