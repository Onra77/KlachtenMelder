@extends('layouts/layout')

@section('title')
    Klacht melden - KM
@endsection


<div id="wrapper">
@section('content')
    <form id="grey">
            <i id="pic1"></i>
            <div class="form-group">
                <h1 id="h">Meld klacht</h1>
                <label for="exampleFormControlInput1"><i class="far fa-edit"></i> Postcode</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1234 AB">
            </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><i class="far fa-hand-pointer"></i> Selecteer een catogorie</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Criminaliteit</option>
                <option>Lawaaioverlast</option>
                <option>Parkeeroverlast</option>
                <option>Parkeerproblemen</option>
                <option>Stankoverlast</option>
                <option>Stoeptegels</option>
                <option>Vuilnis</option>
                </select>
        </div>

            <div class="form-group">

            <label for="exampleFormControlTextarea1"><i class="far fa-edit"></i> Type uw klacht hier</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="button" class="btn btn-primary my-1">Post klacht</button>
    </form>

</div>
@endsection
</div>