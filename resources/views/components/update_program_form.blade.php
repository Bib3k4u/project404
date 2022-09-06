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





<!-- <form action="/edit" method="POST" >
    @csrf
    <input type="hidden" name="id" value={{$updateProgram['id']}}>
                <div class="card-body">
                  <div class="form-group">
                    <label for="program_id">Program Id</label>
                    <input type="text" onblur="capitalize()" name="program_id" id="program_id" value={{$updateProgram['program_id'] }}>
                  </div>
                  <div class="form-group">
                  <label for="program_name">Program Name</label>
                        <input type="text" onblur="capitalize()" name="program_name" id="program_name" value={{$updateProgram['program_name'] }}>
                        
                  </div>
                  <div class="form-group">
                  <label for="specialization">Specialization</label><label for="specialization">Specialization</label>
                  <input type="text" onblur="capitalize()" name="specialization" id="specialization" value={{$updateProgram['specialization'] }}>
                </div>
                <div class="form-group">
                <label for="year">Year</label>
    <input type="text"  onblur="capitalize()" name="year" id="year" value={{$updateProgram['year'] }}>
                </div>
                <div class="form-group">
                <label for="semester">semester</label>
    <input type="text"  onblur="capitalize()" name="semester" id="semester" value={{$updateProgram['semester'] }}>
                </div>
                <!-- /.card-body -->
<!-- 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>

</div>
              </form> --> 



</div>

<script>



function capitalize(){
  
    var x = document.getElementById("program_id");
    x.value = x.value.toUpperCase();
    var y = document.getElementById("program_name");
    y.value = y.value.toUpperCase();
    var z = document.getElementById("specialization");
    z.value = z.value.toUpperCase();
}

$('input[name="program_id"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if((x>=65 && x<=90) || (x>=97 && x<=122) || (x>=48 && x<=57)){
        return true;
    }
    else{
        return false;
    }
});

$('input[name="program_name"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if((x>=65 && x<=90) || (x>=97 && x<=122) || x==32){
        return true;
    }
    else{
        return false;
    }
});

$('input[name="specialization"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if((x>=65 && x<=90) || (x>=97 && x<=122) || x==32){
        return true;
    }
    else{
        return false;
    }
});
$('input[name="year"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if((x>=48 && x<=57)){
        return true;
    }
    else{
        return false;
    }
});
$('input[name="semester"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if((x>=48 && x<=57)){
        return true;
    }
    else{
        return false;
    }
});


</script>
