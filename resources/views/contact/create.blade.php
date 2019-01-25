@extends('layouts/layout')

@section('title')

    Contact pagina - KM

@endsection


<div>
@section('content')
<div id="grey">

<form action="contact/save" method="POST">
    @csrf
    <input type="text" name="naam" id="naam" placeholder="naam">
    <input type="email" name="email" id="email">
    <input type="text" name="content" id="content">
    <input type="submit" value="verstuur">
    
</form>



</div>

@endsection
</div>
