 @extends('layout') @section('content')

<h1>Selling your home?</h1>
<hr/>
<form action="/flyers" method="POST" enctype="multipart/form-data">
   @include('flyers.form')
</form>


@stop
