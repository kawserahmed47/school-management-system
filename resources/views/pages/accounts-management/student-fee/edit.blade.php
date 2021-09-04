@extends('layouts.app', ['activePage' => 'studentFee', 'titlePage' => __('Student Fees Edit')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('studentFee.update', $studentFee->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Student Fees Edit') }}</h4>
                <p class="card-category">{{ __('Student Fees Edit information') }}</p>
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

                            <option value="{{$year->id}}"    @if ($year->id == $studentFee->student_year_id) selected @endif  >{{$year->name}}</option>
                              
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

                            <option value="{{$class->id}}" @if ($class->id == $studentFee->student_class_id) selected @endif >{{$class->name}}</option>
                              
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
                          <option value="{{$feeCategoryAmount->id}}"  @if ($feeCategoryAmount->id == $studentFee->fee_category_amount_id) selected @endif >{{$feeCategoryAmount->feeCategory->name}} - {{$feeCategoryAmount->studentClass->name}} - {{$feeCategoryAmount->amount}} </option>
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

                            <option value="{{$student->id}}"  @if ($student->id == $studentFee->student_id) selected @endif  >{{$student->first_name}} {{$student->last_name}} - {{$student->id_no}} </option>
                              
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
                      <input class="form-control" name="amount" id="input-name" type="text" placeholder="{{ __('Amount') }}" value="{{$studentFee->amount}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Payment Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="payment_date" id="input-name" type="date" placeholder="{{ __('Payment Date') }}" value="{{$studentFee->payment_date}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Comment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="description" id="input-name" type="text" placeholder="{{ __('Short Comment') }}" value="{{$studentFee->description}}" required="true" aria-required="true"/>
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