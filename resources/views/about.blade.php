@include('common.header')
<h2>About Page</h2>
{{-- <h3>Welcome {{ $name }}</h3> --}}

@include('common.inner', ['page' => "this is about page"]);
{{-- @include('common.doNotExists'); // show the error --}}
@includeIf('common.doNotExists'); {{-- // does not show error --}}

