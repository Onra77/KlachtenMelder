@extends('layout')

@section('title')
    Klacht - KM
@endsection

@extends('nav')

@section('content')
    <form id="klacht">
            <i id="pic1"></i>
            <div class="form-group">
                <h1 id="h">MELD KLACHT</h1>
                <label for="exampleFormControlInput1"><i class="far fa-edit"></i> Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><i class="far fa-hand-pointer"></i> Selecteer een catogorie</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Vuilnis</option>
                <option>Lawaaioverlast</option>
                <option>Stankoverlast</option>
                <option>Criminaliteit</option>
                <option>Parkeeroverlast</option>
                <option>Parkeerproblemen</option>
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