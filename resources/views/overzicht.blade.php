@extends('layout')

@section('title')
    Overzicht - KM
@endsection

@section('content')
    <form id="klacht">
                       
            <h1 id="h">Overzicht klachten</h1>
            <!-- <label  for="exampleFormControlInput1"> Postcode</label> -->

            <!-- <small id="emailHelp" ><i class="far fa-edit"></i> Voer alleen Nederlandse Postcodes in!</small>

            <input type="text"  class="form-control" id="zip" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Postcode">
            </div>
        
            <label for="exampleFormControlTextarea1"><i class="fas fa-glasses"></i> Voorkomende klachten</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
        </div>
        <button type="button" class="btn btn-primary my-1" onclick="lonlat()">Zoek op Postcode</button> -->

        <table id="dummy">
        <tr>
        <th>Postcode</th>
        <th>Over</th>
        <th>Klacht</th>
        </tr>
        </tr>
        <td>1234 AB</td>
        <td>Stoeptegels</td>
        <td>Ze liggen los en scheef</td>
        </tr>
        <tr>
        <td>5678 CD</td>
        <td>Vuilnis</td>
        <td>Afval los op straat e.d.</td>
        </tr>
        <tr>
        <td>9012 EF</td>
        <td>Fietsers</td>
        <td>Zonder licht</td>
        </tr>
        <tr>
        <td>3456 GH</td>
        <td>Buren</td>
        <td>Elke avond wordt er geboord.</td>
        </tr>
        <tr>
        <td>7891 IJ</td>
        <td>Pinautomaten</td>
        <td>Te weinig biljetten</td>
        </tr>
        <tr>
        <td>2345 KL</td>
        <td>Buren</td>
        <td>Houtrook</td>
        </tr>

        </table>





        <tr></tr>
        </table>


    </form>

</div>    
@endsection