@extends('layouts.app', ['activePage' => 'assignSubject', 'titlePage' => __('Assign Subject')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('assignSubject.update', $assign->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Assign Subject') }}</h4>
                <p class="card-category">{{ __('Assign Subject information') }}</p>
              </div>
              <div class="card-body ">

                
               

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Student Class') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="student_class_id" required>

                        <option value="">--Select Class--</option>
                        @if ($classes)

                          @foreach ($classes as $class)

                            <option value="{{$class->id}}" @if($class->id == $assign->student_class_id) selected @endif  >{{$class->name}}</option>
                              
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
                      <select name="subject_id" class="form-control" required>
                        <option value="">--Select Subject--</option>

                        @if ($subjects)
                          @foreach ($subjects as $subject)
                          <option value="{{$subject->id}}" @if($subject->id == $assign->subject_id) selected @endif>{{$subject->name}}</option>

                          @endforeach
                            
                        @endif


                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Full Mark') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="full_mark" id="input-name" type="text" placeholder="{{ __('Full Mark') }}" value="{{$assign->full_mark}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pass Mark') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="pass_mark" id="input-name" type="text" placeholder="{{ __('Pass Mark') }}" value="{{$assign->pass_mark}}" required="true" aria-required="true"/>
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