@extends('layouts.app', ['activePage' => 'assignStudent', 'titlePage' => __('Student Assign')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('assignStudent.update', $assignStudent->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Student Assign') }}</h4>
                <p class="card-category">{{ __('Student Assign Information') }}</p>
              </div>
              <div class="card-body ">

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Student') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">

                      <select name="student_id" required class="form-control">
                        <option value="">--Select Student--</option>

                        @if ($students)
                        @foreach ($students as $student)
                          <option value="{{$student->id}}" @if ($assignStudent->student_id == $student->id) selected @endif >{{$student->first_name}}</option>
                        @endforeach
                        @endif

                      </select>


                    </div>
                  </div>
                </div>

               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Group') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">

                      <select name="student_group_id" required class="form-control">
                        <option value="">--Select Group--</option>

                        @if ($groups)
                        @foreach ($groups as $group)
                          <option value="{{$group->id}}" @if ($assignStudent->student_group_id == $group->id) selected @endif>{{$group->name}}</option>
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

                      <select name="student_year_id" required class="form-control">
                        <option value="">--Select Year--</option>

                        @if ($years)
                        @foreach ($years as $year)
                          <option value="{{$year->id}}"  @if ($assignStudent->student_year_id == $year->id) selected @endif >{{$year->name}}</option>
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

                      <select name="student_class_id" required class="form-control">
                        <option value="">--Select Class--</option>

                        @if ($classes)
                        @foreach ($classes as $class)
                          <option value="{{$class->id}}"  @if ($assignStudent->student_class_id == $class->id) selected @endif >{{$class->name}}</option>
                        @endforeach
                        @endif

                      </select>

                      
                    </div>
                  </div>
                </div>


                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Shift') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">

                      <select name="student_shift_id" required class="form-control">
                        <option value="">--Select Shift--</option>

                        @if ($shifts)
                        @foreach ($shifts as $shift)
                          <option value="{{$shift->id}}"  @if ($assignStudent->student_shift_id == $shift->id) selected @endif>{{$shift->name}}</option>
                        @endforeach
                        @endif

                      </select>

                      
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