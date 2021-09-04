@extends('layouts.app', ['activePage' => 'mark', 'titlePage' => __('Marks Edit')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('mark.update', $mark->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Marks Update') }}</h4>
                <p class="card-category">{{ __('Marks Update information') }}</p>
              </div>
              <div class="card-body ">

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Exam Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="exam_type_id" required>

                        <option value="">--Select Year--</option>
                        @if ($examTypes)

                          @foreach ($examTypes as $examType)

                            <option value="{{$examType->id}}" @if ($mark->exam_type_id == $examType->id) selected  @endif >{{$examType->name}}</option>
                              
                          @endforeach
                            
                        @endif

                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Year') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="student_year_id" required>

                        <option value="">--Select Year--</option>
                        @if ($years)

                          @foreach ($years as $year)

                            <option value="{{$year->id}}" @if ($mark->student_year_id == $year->id) selected  @endif>{{$year->name}}</option>
                              
                          @endforeach
                            
                        @endif

                      </select>
                    </div>
                  </div>
                </div>
               

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Class') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="student_class_id" required>

                        <option value="">--Select Class--</option>
                        @if ($classes)

                          @foreach ($classes as $class)

                            <option value="{{$class->id}}"  @if ($mark->student_class_id == $class->id) selected  @endif >{{$class->name}}</option>
                              
                          @endforeach
                            
                        @endif

                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Subject') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="assign_subject_id" class="form-control" required>
                        <option value="">--Select Subject--</option>

                        @if ($assignSubjects)
                          @foreach ($assignSubjects as $assignSubject)
                          <option value="{{$assignSubject->id}}"  @if ($mark->assign_subject_id == $assignSubject->id) selected  @endif>{{$assignSubject->subject->name}} - {{$assignSubject->studentClass->name}} </option>
                          @endforeach
                            
                        @endif


                      </select>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Student') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="student_id" required>

                        <option value="">--Select Student--</option>
                        @if ($students)

                          @foreach ($students as $student)

                            <option value="{{$student->id}}"  @if ($mark->student_id == $student->id) selected  @endif >{{$student->first_name}} {{$student->last_name}} - {{$student->id_no}} </option>
                              
                          @endforeach
                            
                        @endif

                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Student Obtained Mark') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="mark" id="input-name" type="text" placeholder="{{ __('Obtained Mark') }}" value="{{$mark->mark}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Comment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="description" id="input-name" type="text" placeholder="{{ __('Short Comment') }}" value="{{$mark->description}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

          
                
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection