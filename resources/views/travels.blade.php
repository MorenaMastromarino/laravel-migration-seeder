@extends('layouts.main')

@section('content')
<div class="container">
  <h1>Viaggi</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Data Partenza</th>
        <th scope="col">Città Partneza</th>
        <th scope="col">Destinazione (Stato)</th>
        <th scope="col">Destinazione (Città)</th>
        <th scope="col">Alloggio</th>
        <th scope="col">Indirizzo</th>
        <th scope="col">Stanza</th>
        <th scope="col">Data Ritorno</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $travels as $travel)        
      <tr>
        <th scope="col">{{$travel->id}}</th>
        <td scope="col">{{$travel->departure_date}}</td>
        <td scope="col">{{$travel->departure_city}}</td>
        <td scope="col">{{$travel->destination_country}}</td>
        <td scope="col">{{$travel->destination_city}}</td>
        <td scope="col">{{$travel->accomodation}}</td>
        <td scope="col">{{$travel->accomodation_address}}</td>
        <td scope="col">{{$travel->room_type}}</td>
        <td scope="col">{{$travel->return_date}}</td>
      </tr>
      @endforeach
   
    </tbody>
  </table>

</div>
@endsection