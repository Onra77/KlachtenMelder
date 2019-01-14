@extends('layout')

@section('title')
    FAQ - KM
@endsection
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

@section('content')

    @component('components.harmonica')
        @slot('title')
            Waarom?
        @endslot 
        Het is een eindopdracht van CodeGorilla, we zijn nieuwsgierig wat voor klachten er gemeld zal worden. Het is handig voor buren of toekomstige buren om te zien wat voor klachten er zijn en hoe het verholpen kan worden of wat als je zelf onderdeel bent van de klacht. Het zou ook handig kunnnn zijn voor woningbouw verenigingen om inzicht te krijgen wat er leeft onder de bewoners.
    @endcomponent

    @component('components.harmonica')
        @slot('title')
            Beschrijving
        @endslot 
        De bedoeling is om via een simpele interface je een klacht kan melden onder een bepaald categorie die het dichtst bij de klacht in de buurt komt. Dan kun je nog een korte omschrijving geven van de klacht in een tekstvak. Deze klachten kun je terug zien in een overzicht dat per gefilterd wordt op postcode, stad, provincie of landelijk. Klachten die een enkele keer voor komen worden na een tijdje automatisch verwijderd om vervuiling van de database te voorkomen.
    @endcomponent

    @component('components.harmonica')
        @slot('title')
            Hoe?
        @endslot 
        In Laravel hebben we een website gemaakt met een SQL die database. En met PHP en eventueel javascript de data verwerking. Met Javascript is het doel data asynchroon te laten verwerken zodat data automatische verwerkt wordt. De bedoeling is om via een simpele interface je een klacht kan melden onder een bepaald categorie die het dichtst bij de klacht in de buurt komt. Dan kun je nog een korte omschrijving geven van de klacht in een tekstvak. Deze klachten kun je terug zien in een overzicht dat per gefilterd wordt op postcode, stad, provincie of landelijk. Klachten die een enkele keer voor komen worden na een tijdje automatisch verwijderd om vervuiling van de database te voorkomen.
    @endcomponent

    @component('components.harmonica')
        @slot('title')
            Voorbeeld:
        @endslot 
        Een bewoner in een flat die gebruikt maakt van een ondergrondse container klaagt dat niet iedereen zijn vuilnis in de container stopt maar er naast legt. Gezien hij van een schone buurt houdt gooit hij vaak de vuilniszakken er zelf in. Helaas ziet hij niet wie het doet anders hij die persoon hierop aangesproken. Maar is hij de enige die dit irritant vindt? Hij kijkt op de webapp en zoekt op zijn postcode of deze klacht eerder is gemeld en wat er nog meer is gemeld...
    @endcomponent
  
    @component('components.harmonica')
        @slot('title')
            Resultaat
        @endslot 
        Je klacht kwijt kunnen en je kan zien wat er nog meer gemeld is in je buurt.</br>
        Misschien veroorzaak je zelf een klacht bij iemand anders maar heb je dat nog nooit gerealiseerd.</br>
        Als de klacht heel vaak of regelmatig voorkomt zou je kunnen doorspelen naar een instantie die er mee te maken heeft. Of een reden om te overleggen met je buren.</br>
        Als je gaat verhuizen en je wilt weten wat voor wijk het is dan zou je via deze webapp een indruk kunnen krijgen van die wijk.</br>
    @endcomponent
   
    @component('components.harmonica')
        @slot('title')
            Andere vragen?
        @endslot 
        Mocht er iets niet bijstaan of onduidelijk zijn laat het ons weten.
    @endcomponent

@endsection