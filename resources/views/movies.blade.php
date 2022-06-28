<h1>Movies:</h1>
<ul>
   @foreach ($movies as $movie)
       <li>
       <h4>Titolo : {{$movie->title}} </h4> 
        <p>Titolo originale : {{$movie->original_title}} </p> 
        <p>Nazionalità: {{$movie->nationality}}</p>
        <p>Anno uscita: {{$movie->date}}</p>
        <p>Voto: {{$movie->vote}}</p>
       </li>
   @endforeach
</ul>