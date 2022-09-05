@include('layouts.header')
@include('layouts.sidebar')
@include('script.update_program');
<link rel="stylesheet" href="dist/css/projectcss/update_program.css">

<div class="content-wrapper">
    <div class="containar">
        <form action="updateprogram" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">

                        <label for="program_ID">Program ID</label>


                        <input type="text" name="program_id" id="program_id">
                        <!-- <span>@error('program_id'){{$message}}@enderror</span> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Program_name">Program Name</label>
                        <input type="text" name="program_name" id="program_name">

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group ">
                        <label for="specializatioin">Specialization</label>
                        <input type="text" name="specialization" id="specialization">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">

                        <label for="year">Year</label>
                        <input type="text" name="year" id="year">
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group ">

                        <label for="semester">Semester</label>
                        <input type="text" name="semester" id="semester">
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"
                            style="margin-top:37px; width:70%;">Submit</button>
                    </div>
                </div>




            </div>

    </div>
    @if (session('success'))
<div class="alert alert-success" role="alert" id="alert">
  {{session('success')}}
</div>
 
@endif
    <div class="table1">


        <table>
            <tr>
                <th class=" sno">S.NO.</th>
                <th class="pid">Program_id</th>
                <th class="pname">Program_name</th>
                <th class="year">Year</th>
                <th class="sem">semester</th>
                <th class="spec">specialization</th>
                <th class="action">Action</th>

            </tr>

            

            @foreach($updateProgram as $data) <tr>
                <td>{{$data['id']  }}</td>
                <td>{{ $data['program_id'] }}</td>
                <td>{{$data['program_name'] }}</td>
                <td>{{ $data['year'] }}</td>
                <td>{{ $data['semester']  }}</td>
                <td>{{ $data['specialization']  }}</td>
                <td><a href={{ "updateprogram/" .$data['id'] }}>Delete</a>
                <td><a href={{ "edit/" .$data['id'] }}>update</a>
            </tr>
            @endforeach
        </table>
    </div>




















    <!-- <script>

$(document).ready(function () {
    $("#program_id").change(function () {
        var val = $(this).val();
        if (val == "ite1") {
            $("#program_name").html("<option value=''>Choose Program_name</option><option value='item1'>B.Tech</option>");
        } else if (val == "ite2") {
            $("#program_name").html("<option value=''>Choose Program_name</option><option value='item2'>BCA</option>");
        } else if (val == "ite3") {
            $("#program_name").html("<option value=''>Choose Program_name</option><option value='item3'>MCA</option>");
        } else if (val == "ite4") {
            $("#program_name").html("<option value=''>Choose Program_name</option><option value='item4'>M.Tech</option>");
        }
    });
});





    $(document).ready(function () {
    $("#program_name").change(function () {
        var val = $(this).val();
        if (val == "item1") {
            $("#Year").html("<option value=''>choose year</option><option value='year'>1</option><option value='year2'>2</option><option value='year3'>3</option><option value='year4'>4</option>");
        } else if (val == "item2") {
            $("#Year").html("<option value=''>choose year</option><option value='year'>1</option><option value='year2'>2</option><option value='year3'>3</option>");
        } else if (val == "item3") {
            $("#Year").html("<option value=''>choose year</option><option value='year'>1</option><option value='year2'>2</option>");
        } else if (val == "item4") {
            $("#Year").html("<option value=''>choose year</option><option value='year'>1</option><option value='year2'>2</option>");
        }
    });
});


$(document).ready(function () {
    $("#Year").change(function () {
        var val = $(this).val();
        if (val == "year") {
            $("#semester").html("<option value='test'>1</option><option value='test2'>2</option>");
        } else if (val == "year2") {
            $("#semester").html("<option value='test'>3</option><option value='test2'>4</option>");
        } else if (val == "year3") {
            $("#semester").html("<option value='test'>5</option><option value='test2'>6</option>");
        } else if (val == "year4") {
            $("#semester").html("<option value='test'>7</option><option value='test2'>8</option>");
        }

    });
});
</script> -->







    </form>
</div>
</div>

<script>
//        setTimeout(function () {
  
//   // Closing the alert
//   $('#alert').alert('close');
// }, 3000);
// 
$("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);
});
</script>


@include('layouts.footer')