@extends('layouts.app', ['activePage' => 'studentFee', 'titlePage' => __('Student Fees Entry')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('studentFee.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Student Fees Entry') }}</h4>
                <p class="card-category">{{ __('Student Fees Entry information') }}</p>
              </div>
              <div class="card-body ">



                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Year') }}</label>
                  <div class="col-sm-7">
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
                </div>
               

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Select Class') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="student_class_id" required>

                        <option value="">--Select Class--</option>
                        @if ($classes)

                          @foreach ($classes as $class)

                            <option value="{{$class->id}}">{{$class->name}}</option>
                              
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
                      <select name="fee_category_amount_id" class="form-control" required>
                        <option value="">--Select Subject--</option>

                        @if ($feeCategoryAmounts)
                          @foreach ($feeCategoryAmounts as $feeCategoryAmount)
                          <option value="{{$feeCategoryAmount->id}}">{{$feeCategoryAmount->feeCategory->name}} - {{$feeCategoryAmount->studentClass->name}} - {{$feeCategoryAmount->amount}} </option>
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

                            <option value="{{$student->id}}">{{$student->first_name}} {{$student->last_name}} - {{$student->id_no}} </option>
                              
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
                      <input class="form-control" name="amount" id="input-name" type="text" placeholder="{{ __('Amount') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Payment Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="payment_date" id="input-name" type="date" placeholder="{{ __('Payment Date') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Comment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="description" id="input-name" type="text" placeholder="{{ __('Short Comment') }}" value="" required="true" aria-required="true"/>
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