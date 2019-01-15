@extends('layout')

@section('title')
    Info - KM
@endsection

@section('content')
<div id=grey>
    <h1>Info</h1>
    <p>
        Waarom kies je dit project?
        Het is interessant en we willen dit graag uitwerken over hoe het technisch in elkaar zit. Het is
        handig voor buren of toekomstige buren om te zien wat voor klachten er zijn en hoe het verholpen
        kan worden of wat als je zelf onderdeel bent van de klacht. 
        
        De bedoeling is om via een simpele interface je een klacht kan melden onder een “categorie” die
        het dichtst bij de klacht in de buurt komt. Dan kun je nog een korte omschrijving geven van de
        klacht in een tekstvak. Deze klachten kun je terug zien in een overzicht dat per gefilterd wordt op
        postcode, stad, provincie of landelijk. Klachten die een enkele keer voor komen worden na een
        tijdje automatisch verwijderd om vervuiling van de database te voorkomen.
    </p>
</div>    
@endsection