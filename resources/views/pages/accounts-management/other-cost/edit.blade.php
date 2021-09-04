@extends('layouts.app', ['activePage' => 'otherCost', 'titlePage' => __('Other Cost Edit')])

@section('content')
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('otherCost.update', $otherCost->id) }}" autocomplete="off" class="form-horizontal">
            @csrf

            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Other Cost Edit') }}</h4>
                <p class="card-category">{{ __('Other Cost Edit information') }}</p>
              </div>
              <div class="card-body ">




                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cost Title') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="title" type="text" placeholder="{{ __('Title') }}" value="{{$otherCost->title}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Amount') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="amount" type="text" placeholder="{{ __('Amount') }}" value="{{$otherCost->amount}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Payment Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="payment_date" type="date" placeholder="{{ __('Payment Date') }}" value="{{$otherCost->payment_date}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Comment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="description" type="text" placeholder="{{ __('Short Comment') }}" value="{{$otherCost->description}}" required="true" aria-required="true"/>
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