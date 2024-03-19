 @if (Auth::guard('seller')->user()->is_active == 0)
     not approved yet
 @else
     <a href="{{ route('seller.dashboard') }}">dashboard</a>
 @endif
