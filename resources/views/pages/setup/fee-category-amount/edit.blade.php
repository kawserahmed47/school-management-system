@extends('layouts.app', ['activePage' => 'categoryAmount', 'titlePage' => __('Fee Category Amount')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('feeCategoryAmount.update', $amount->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Fee Category Amount') }}</h4>
                <p class="card-category">{{ __('Fee Category Amount information') }}</p>
              </div>
              <div class="card-body ">

                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fee Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="fee_category_id" class="form-control" required>
                        <option value="">--Select Fee Category--</option>

                        @if ($categories)
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}" @if($category->id == $amount->fee_category_id) selected @endif>{{$category->name}}</option>

                          @endforeach
                            
                        @endif


                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Student Class') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="student_class_id" required>

                        <option value="">--Select Class--</option>
                        @if ($classes)

                          @foreach ($classes as $class)

                            <option value="{{$class->id}}"  @if($class->id == $amount->student_class_id) selected @endif >{{$class->name}}</option>
                              
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
                      <input class="form-control" name="amount" id="input-name" type="text" placeholder="{{ __('Amount') }}" value="{{$amount->amount}}" required="true" aria-required="true"/>
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