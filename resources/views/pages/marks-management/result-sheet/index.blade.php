@extends('layouts.app', ['activePage' => 'resultSheet', 'titlePage' => __('Result Sheet')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Result Sheet </h4>
                            <p class="card-resultSheet">Result Sheets Generate</p>
                        </div>
                        <div class="card-body">

                            <form  method="post" id="resultSheetGenerateForm">
                                @csrf

                                <div class="row">

                                    <div class="col-md-3">

                                    
                                        <div class="form-group">
                                            <select class="form-control" name="student_year_id" required>
                    
                                            <option value="">--Select Year--</option>
                                            @if ($years)
                    
                                                @foreach ($years as $year)
                    
                                                <option value="{{$year->id}}">{{$year->name}}</option>
                                                    
                                                @endforeach
                                                
                                            @endif
                    
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                    

                                        <div class="form-group">
                                            <select class="form-control" name="student_class_id" required>
                    
                                            <option value="">--Select Class--</option>
                                            @if ($classes)
                    
                                                @foreach ($classes as $classe)
                    
                                                <option value="{{$classe->id}}">{{$classe->name}}</option>
                                                    
                                                @endforeach
                                                
                                            @endif
                    
                                            </select>
                                        </div>


                                    </div>

                                    <div class="col-md-3">
                                
                                        <div class="form-group">
                                            <select class="form-control" name="exam_type_id" required>
                    
                                            <option value="">--Select Exam--</option>
                                            @if ($examTypes)
                    
                                                @foreach ($examTypes as $examType)
                    
                                                <option value="{{$examType->id}}">{{$examType->name}}</option>
                                                    
                                                @endforeach
                                                
                                            @endif
                    
                                            </select>
                                        </div>


                                    </div>

                                

                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success"> Generate </button>
                                    </div>
                                    
                                </div>

                            </form>



                            <div class="table-responsive">

                                


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection


@push('js')

<script>

    $(document).ready(function(){
        
        $('#resultSheetGenerateForm').on('submit', function(e){
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: "{{route('resultSheet.index')}}",
                type: "POST",
                data: formData,
                success:function(response){

                    $('.table-responsive').html(response);

                }
                
            })




        })




    })

</script>
    
@endpush
