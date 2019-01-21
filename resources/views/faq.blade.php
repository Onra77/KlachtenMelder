@extends('layout')

@section('title')
    FAQ - KM
@endsection

@section('content')
    <div class="grey">
        @component('components.harmonica')
            @slot('title')
                Wie?
            @endslot 
            Deze website is gemaakt door Arno Bertens en Ornelio Reiph.
        @endcomponent

        @component('components.harmonica')
            @slot('title')
                Wat?
            @endslot 
            De bedoeling is dat men een klacht kan plaatsen gekoppeld aan een postcode waar de klacht zich voordoet.
        @endcomponent

        @component('components.harmonica')
            @slot('title')
                Waar?
            @endslot 
            WWW.KlachtenMelder.nl
        @endcomponent

        @component('components.harmonica')
            @slot('title')
                Wanneer?
            @endslot 
            Nu, maar de klachten worden ook gefilterd op datum zodat heel oude klachten niet automatisch wordt meegenomen in de overzicht.
        @endcomponent
    
        @component('components.harmonica')
            @slot('title')
                Waarom?
            @endslot 
            Het is het eindproject van een bootkamp gegeven door <a href="https://www.codegorilla.nl/">CodeGorila</a> waarin we zelf een onderwerp mochten kiezen. We kozen ervoor om in kaart te brengen wat voor klachten er worden gemeld en of het kenmerkend is voor bepaalde gebieden.</br>
            We willen inzicht geven voor jou of je toekomstige buren.</br>
            Deze informatie kan gebruikt worden om actie te ondernemen om er iets aan te doen om de klacht te verhelpen. Het zou ook inzicht kunnen geven aan degene die een zelf een klacht veroorzaken maar daar niet van bewust zijn of realiseren dat dit voor andere heel irritant is.</br> De belangrijkste doel is inzicht geven en dus proberen mensen bewust te maken van hun omgeving en hun eigen rol erin.
        @endcomponent
    
        @component('components.harmonica')
            @slot('title')
                Hoe?
            @endslot 
            De klachten informatie kan een beeld vormen hoe het staat met klachten in de buurt.</br>
            Dit is per postcode zichtbaar. Je kan een top 10 zien van meest gemelde klachten.
        @endcomponent

        @component('components.harmonica')
            @slot('title')
                Toekomst?
            @endslot 
            We willen ook de mogelijkheid bieden om dit niet alleen per postcode maar ook per stad, provincie of landelijk te laten zien. Of dat je een specifieke klacht kan kiezen en dan een steden top 10 krijgt per postcode, stad, provincie of landelijk.
        @endcomponent

        @component('components.harmonica')
            @slot('title')
                Andere vragen?
            @endslot 
            Mocht er iets niet bijstaan of onduidelijk zijn laat het ons weten.
        @endcomponent
        </div>
  @endsection