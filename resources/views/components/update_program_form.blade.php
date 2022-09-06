@include('layouts.header')
@include('layouts.sidebar')
<div class="content-wrapper">

<h3>update program with program name {{$updateProgram['program_id']}}</h3>





<form action="/edit" method="POST" >
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

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>

</div>
              </form>



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
