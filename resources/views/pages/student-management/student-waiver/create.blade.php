@extends('layouts.app', ['activePage' => 'waiver', 'titlePage' => __('Student Waiver')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('waiver.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Student Waiver') }}</h4>
                <p class="card-category">{{ __('Student Waiver Information') }}</p>
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
                          <option value="{{$student->id}}">{{$student->first_name}}</option>
                        @endforeach
                        @endif

                      </select>


                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Waiver Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __(' Name') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Waiver Percentage') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="percentage" id="input-name" type="text" placeholder="{{ __('Amount') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection