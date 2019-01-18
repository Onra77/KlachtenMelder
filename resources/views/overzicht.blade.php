@extends('layout')

@section('title')
    Overzicht - KM
@endsection

@extends('nav')


@section('content')
    <form id="klacht">
                       
            <h1 id="h"> ZOEK KLACHT</h1>
            <!-- <label  for="exampleFormControlInput1"> Postcode</label> -->

            <small id="emailHelp" ><i class="far fa-edit"></i> Voer alleen Nederlandse Postcodes in!</small>

            <input type="text"  class="form-control" id="zip" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Postcode">
            </div>
        
            <label for="exampleFormControlTextarea1"><i class="fas fa-glasses"></i> Voorkomende klachten</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
        </div>
        <button type="button" class="btn btn-primary my-1" onclick="lonlat()">Zoek op Postcode</button>

    </form>

</div>    
@endsection