@extends('layout')

@section('title')
    Calendario 
@endsection

@section('content')
    <h3 class="display-4 pt-5  fw-bold fst-italic text-info text-center">Calendario </h3>
      <div class="d-flex justify-content-around">
        <a class="btn btn-outline-primary " href="{{route('calendar.create')}}">Aggiungi giorno</a>
        <form action="/calendar" method="POST" class="deleteAll">
          @method('DELETE')
          @csrf
              <button class="btn btn-outline-danger" type="submit" >Cancella calendario</button>
        </form>
      </div>
   
   
    <div class="row mt-4">
      @foreach ($notes as $n )
      <div class="col-md-4 mb-4">
        <div class="card text-center text-dark ">
          <div class="card-header">
            <h2>{{$n->day->name}}</h2>
          </div>
          <div class="card-body">
            <h3 class="card-title">{{ $n->category->name}} </h3>
            <p class="card-text">Giorno di raccolta: {{ $n->day->name }} </p>
            <p class="card-text">Ora Inizio: {{ $n->ora_inizio }}</p>
            <p class="card-text">Ora fine:  {{ $n->ora_fine }}</p>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-between">
              <a href="{{route('calendar.edit',$n->id)}}"><span class="material-icons">edit</span></a>
              <form class="delete" action="/calendar/{{$n->id}}" method="POST">
                 @method('DELETE')
                 @csrf
                <button type="submit" class="btn text-primary"><span class="material-icons">delete</span></button>
              </form>
          </div> 
          </div>
        </div>
      </div>
      @endforeach
    </div>
        
 @endsection         
  
 @section('script_ext')
<script>
  $(".deleteAll").on("submit", function(){
    return confirm("Sei sicuro di voler eliminare il calendario ?");
  });
</script>
@endsection
