@extends('layout')

@section('title')
    FAQ
@endsection

@section('content')

    <h1>FAQ</h1>

    <p>
        Waarom?<br>
        Het is een eindopdracht van CodeGorilla
        Het is interessant en we willen dit graag uitwerken over hoe het technisch in elkaar zit. Het is handig voor buren of toekomstige buren om te zien wat voor klachten er zijn en hoe het verholpen kan worden of wat als je zelf onderdeel bent van de klacht. Het zou ook handig kunnnn zijn voor woningbouw verenigingen om inzicht te krijgen wat er leeft onder de bewoners.
    </P>
    <p>
        Beschrijving:<br>
        De bedoeling is om via een simpele interface je een klacht kan melden onder een  “categorie” die het dichtst bij de klacht in de buurt komt. Dan kun je nog een korte omschrijving geven van de klacht in een tekstvak. Deze klachten kun je terug zien in een overzicht dat per gefilterd wordt op postcode, stad, provincie of landelijk. Klachten die een enkele keer voor komen worden na een tijdje automatisch verwijderd om vervuiling van de database te voorkomen.
    </P>
    <p>
        Hoe?
        In Laravel hebben we een website gemaakt met een SQL de database. En met PHP en eventueel javascript de data verwerking. Met Javascript is het doel data asynchroon te laten verwerken zodat data automatische verwerkt wordt.
    </P>
    <p>
        Voorbeeld:<br>
        Een bewoner in een flat die gebruikt maakt van een ondergrondse container klaagt dat niet iedereen zijn vuilnis in de container stopt maar er naast legt. Gezien hij van een schone buurt houdt gooit hij vaak de vuilniszakken er zelf in. Helaas ziet hij niet wie het doet anders hij die persoon hierop aangesproken. Maar is hij de enige die dit irritant vindt? Hij kijkt op de webapp en zoekt op zijn postcode of deze klacht eerder is gemeld en wat er nog meer is gemeld...
    </P>
    <p>
        Het resultaat:<br>
        Je klacht kwijt kunnen en je kan zien wat er nog meer gemeld is in je buurt.
        Misschien veroorzaak je zelf een klacht bij iemand anders maar heb je dat nog nooit gerealiseerd. 
        Als de klacht heel vaak of regelmatig voorkomt zou je kunnen doorspelen naar een instantie die er mee te maken heeft. Of een reden om te overleggen met je buren.
        Als je gaat verhuizen en je wilt weten wat voor wijk het is dan zou je via deze webapp een indruk kunnen krijgen van die wijk.
    </P>
    <p>
        Overige:<br>
        Mocht er iets niet bijstaan of onduidelijk zijn laat het ons weten.
    </P>

@endsection