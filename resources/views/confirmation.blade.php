@extends('layouts.master')

@section('page-css')
<link href="{{ asset('css/confirmation.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')

@include('layouts.navbar-subpage')

<div class="page">
  <div class="success">
    <h1>Success! You're now signed up for Shine.</h1>
    <h3>Spread the motiv-affirmation and share with friends!</h3>
  </div>

  <div class="refer-a-friend">
    <form action="https://secure.mcommons.com/profiles/join" method="post">
      <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
      <input type="hidden" name="redirect_to" value={{ URL::route('refer-confirmation') }} />

      <div class="col-md-4" id="referral">
        <input required="required" placeholder="Your Name" type="text" name="person[first_name]" id="person_first_name" /></br></br>
        <input required="required" placeholder="Your Phone Number" type="text" name="person[phone]" id="person_phone" /></br>
      </div>

      <div class="col-md-4" id="referral">
        <input required="required" placeholder="Your Friend's Number" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
        <input placeholder="Your Friend's Number (optional)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
      </div>

      <div class="col-md-4" id="referral">
        <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
        <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
      </div>

      <div style="clear: both;">
        <input type="submit" value="SUBMIT" class="signup_button" id="center"/>
      </div>
    </form>
  </div>
</div>
@endsection