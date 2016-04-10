@extends('layouts.master')

@section('page-css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')
@include('layouts.navbar-subpage')

<div class="page">
  <h1>SHINE FAQ</h1>

  <p>Hey, you! Thanks for coming to our FAQ page. We’re here to answer any questions you have. If you don’t see your answer below, email us at help@shinetext.com and we’ll get back to you as soon as possible.</p>
  <p>Thanks for your interest in Shine!</p>
  <p>Naomi + Marah</p>
  <p>(Co-Founders and Co-CEOs)</p>

  <h2>What’s this Shine thing all about?</h2>
  <p>We want to make your day better. Shine is a daily text experience to help you be your best self at work and life. Every morning, we’ll send you actionable tips and content around confidence, daily happiness,  mental health, or productivity.</p>

  <h2>When should I expect the texts to come?</h2>
  <p>Monday-Friday around 8:15 am in your time zone.</p>

  <h2>Can I change the time the texts arrive?</h2>
  <p>Right now, we’re able to adjust delivery time by time zone. If you want to push back the arrival time by a few hours, email us at help@shinetext.com with your phone # and timing preference.</p>

  <h2>Is Shine free?</h2>
  <p>Yep, Shine is free!</p>

  <h2>Is Shine just for women?</h2>
  <p>We’re for all humans! We started out focusing on women (because well, we’re women so that seemed like the most natural place to start) and we quickly realized everyone needs a little help to get through their day.</p>

  <h2>Why did you start Shine?</h2>
  <p>As close friends who met at work, we regularly leaned on each other for support, advice and confidence tips. We often didn't feel qualified for our successes and that it stemmed from false beliefs about ourselves.</p>
  <p>We realized so many people struggle with the same feelings, yet we often feel like we’re the only ones. Through Shine, we want to scale the support we gave each other to as many people as possible to elevate important conversations around living intentionally and being your best self.</p>

  <h2>Are you available globally?</h2>
  <p>Not yet. We’d love to offer Shine globally, but resources wise, we’re currently only able to offer it to people in the US.</p>

  <h2>How do you opt out?</h2>
  <p>To opt out, text "QUIT" to 30644. We’re sad to see you go so if you have any feedback on how Shine could improve, work best for you, etc. let us know by sending feedback to feedback@shinetext.com.</p>

  <h2>Do we disclose any information to outside parties?</h2>
  <p>Nope, we don’t get down like that. Check out our <a href="http://www.shinetext.com/privacy-policy" target="_blank">Privacy Policy</a> for more info.</p>
</div>
@endsection