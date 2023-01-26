@extends('layouts.master')

@section('content')

<div class="site-section padding" >
    <div class="container">
      <div class="row cart_booking">
        <div class="col-md-1">

          </div>

        <div class="col-md-10 cart_booking_box" >
          <span class="text-serif text-primary">Book Now</span>
          <h3 class="heading-92913 text-black">Book This Cabin</h3>
            @if(Session::has('message'))
                <p class="alert alert-warning">{{ Session::get('message') }}</p>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <form action="{{ url('/package/booking') }}" class="row">
              @csrf
              <input type="hidden" name="id" value="{{ $package->id }}">
              <div class="form-group col-md-6">
                <label for="persons">Persons</label>
                <input type="number" name="persons" value="1" min="1" class="form-control" id="persons" required>
              </div>
            <div class="form-group col-md-6">
              <label for="date">Date</label>
              <input type="date" name="date" class="form-control" id="date" required>
            </div>
            <div class="form-group col-md-12">
              <label for="notes">Notes</label>
              <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"></textarea>
            </div>
              <div class="form-group col-md-12" id="method">
                  <label for="notes">Payment Method</label><br>
                  <input type="radio" id="cash" name="payment_method" value="cash">
                  <label for="cash">Cash</label><br>
                  <input type="radio" id="bkash" name="payment_method" value="bkash">
                  <label for="bkash">Bkash</label><br>
              </div>
              <div id="paymentDetails">
                  <div class="form-group col-md-12">
                      <label for="transaction_id">Transaction ID</label><br>
                      <input type="text" id="transaction_id" name="transaction_id" class="form-control">
                  </div>
                  <div class="form-group col-md-12">
                      <label for="account_no">Account No</label><br>
                      <input type="text" id="account_no" name="account_no" class="form-control">
                  </div>
                  <div class="form-group col-md-12">
                      <label for="amount">Amount</label><br>
                      <input type="number" value="0" min="0" id="amount" name="amount" class="form-control">
                  </div>
              </div>

            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary py-3 px-5" value="Book Now">
            </div>

          </form>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
@endsection
@push('js')
    <script>
        $('#paymentDetails').hide();
        $('#method [name=payment_method]').change(function () {
            let method = $(this).val();
            if (method === 'bkash') {
                $('#paymentDetails').show();
                $('#transaction_id').attr('required', true);
                $('#account_no').attr('required', true);
                $('#amount').attr('required', true);
            } else {
                $('#paymentDetails').hide();
                $('#transaction_id').val('');
                $('#transaction_id').removeAttr('required');
                $('#amount').val(0);
                $('#amount').removeAttr('required');
                $('#account_no').val('');
                $('#account_no').removeAttr('required');
            }
        });
    </script>
@endpush
