<?php
class Movie
{
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;

    // Costruttore
    public function __construct($title, $genre, $releaseYear)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

    // Metodo per stampare le informazioni del film
    public function displayInfo()
    {
        echo "Titolo: " . $this->title . "<br>";
        echo "Genere: " . $this->genre . "<br>";
        echo "Anno di uscita: " . $this->releaseYear . "<br><br>";
    }
}


// //////////////////////////////VERSIONE SENZA CICLO

// Istanziazione di due oggetti Movie
// $movie1 = new Movie("Il Signore degli Anelli", "Fantasy", 2001);
// $movie2 = new Movie("Inception", "Science Fiction", 2010);
// $movie3 = new Movie("Prisoners", "Thriller", 2013);


// echo "Informazioni film:<br>";
// $movie1->displayInfo();

// echo "Informazioni film:<br>";
// $movie2->displayInfo();

// echo "Informazioni film:<br>";
// $movie3->displayInfo();


// //////////////////////////////VERSIONE CON CICLO
$movies = array(
    new Movie("Il Signore degli Anelli", "Fantasy", 2001),
    new Movie("Inception", "Science Fiction", 2010),
    new Movie("Prisoners", "Thriller", 2013),
    new Movie("La vita è bella", "drammatico", 1997),
);

foreach ($movies as $movie) {
    echo "Informazioni film:<br>";
    $movie->displayInfo();
}

?>