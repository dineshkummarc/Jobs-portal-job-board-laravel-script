<div class="instoretxt">
    <div class="credit">{{__('Your Package is')}}: <strong>{{$package->package_title}} - {{ $siteSetting->default_currency_code }}{{$package->package_price}}</strong></div>
    <div class="credit">
    {{__('Package Duration')}} : 
    @php
    $packageStartDate = \Carbon\Carbon::parse(Auth::guard('company')->user()->package_start_date);
    $packageDuration = Auth::guard('company')->user()->package_duration; // Assuming this field holds the duration
    $packageEndDate = $packageStartDate->copy()->addDays($packageDuration);
@endphp

<strong>{{ $packageStartDate->format('jS F Y') }}</strong>
-
<strong>{{ $packageEndDate->format('jS F Y') }}</strong>

</div>

    <div class="credit">{{__('Availed quota')}} : <strong>{{Auth::guard('company')->user()->availed_jobs_quota}}</strong> / <strong>{{Auth::guard('company')->user()->jobs_quota}}</strong></div>

</div>
