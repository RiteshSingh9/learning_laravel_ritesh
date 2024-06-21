<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .success {
        background: lightgreen;
        color: green;
        padding: 3.5px 10px;
        display: inline;
        border-radius: 2.5px;
        margin: 10px;
    }
    .error {
        background: rgb(255, 182, 177);
        color: red;
        padding: 3.5px 10px;
        display: inline;
        border-radius: 2.5px;
        margin: 10px;
    }

    .warning {
        background: rgb(243, 243, 181);
        color: yellowgreen;
        padding: 3.5px 10px;
        display: inline;
        border-radius: 2.5px;
        margin: 10px;
    }
    .btn {
        box-shadow: 0px 0px 5px gray;
    }

</style>
{{-- @include('common.header') --}}

{{-- <x-message-banner msg="Went something wrong !!" class="btn warning" /> --}}
<h1>About Page</h1>
<h3>Previous URL: {{ URL::previous() }}</h3>
{{-- <h3>Welcome {{ $name }}</h3> --}}

{{-- @include('common.inner', ['page' => "this is about page"]); --}}
{{-- @include('common.doNotExists'); // show the error --}}
{{-- @includeIf('common.doNotExists'); // does not show error --}}

