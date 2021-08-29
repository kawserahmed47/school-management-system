@extends('layouts.app', ['activePage' => 'scholarship', 'titlePage' => __('Student Scholarship')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('scholarship.update', $scholarship->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Student Scholarship') }}</h4>
                <p class="card-category">{{ __('Student Scholarship information') }}</p>
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
                          <option value="{{$student->id}}" @if ($student->id == $scholarship->student_id)
                              selected
                          @endif>{{$student->first_name}}</option>
                        @endforeach
                        @endif

                      </select>


                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Scholarship Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __(' Name') }}" value="{{$scholarship->name}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Scholarship Amount') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="amount" id="input-name" type="text" placeholder="{{ __('Amount') }}" value="{{$scholarship->amount}}" required="true" aria-required="true"/>
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