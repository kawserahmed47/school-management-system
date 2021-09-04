@extends('layouts.app', ['activePage' => 'teacherSalary', 'titlePage' => __('Teacher Salary Edit')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('teacherSalary.update', $teacherSalary->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Teacher Salary Edit') }}</h4>
                <p class="card-category">{{ __('Teacher Salary Edit information') }}</p>
              </div>
              <div class="card-body ">



                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Teacher') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="teacher_id" disabled>

                        <option value="">--Select Teacher--</option>
                        @if ($teachers)

                          @foreach ($teachers as $teacher)

                            <option value="{{$teacher->id}}" @if($teacherSalary->teacher_id == $teacher->id ) selected @endif>{{$teacher->first_name}} {{$teacher->last_name}} - {{$teacher->id_no}} </option>
                              
                          @endforeach
                            
                        @endif

                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Amount') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="amount" type="text" placeholder="{{ __('Amount') }}" value="{{$teacherSalary->amount}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Payment Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="payment_date" type="date" placeholder="{{ __('Payment Date') }}" value="{{$teacherSalary->payment_date}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Comment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="description" type="text" placeholder="{{ __('Short Comment') }}" value="{{$teacherSalary->description}}" required="true" aria-required="true"/>
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