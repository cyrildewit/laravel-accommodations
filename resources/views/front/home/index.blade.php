@component('front.layouts.main', [
    // 'meta' => $meta,
])
<h1>Homepage</h1>

@if(Auth::guard('management')->user()->hasRole('super-admin'))
<h2>I am a super admin</h2>
@else
<h2>I am NOT a super admin</h2>
@endif

@can('add_listings')
<h2>I can add listings</h2>
@else
<h2>I CAN'T add listings</h2>
@endcan

@endcomponent
