<?php 
// create un file index.php in cui:

// - è definita una classe ‘Movie’
//   => all'interno della classe sono dichiarate delle variabili d'istanza
//   => all'interno della classe è definito un costruttore
//   => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


// Definizione della classe Movie
class Movie {

    // Dichiarazione delle variabili di istanza
    public $title;
    public $director;
    public $year;

    // Costruttore
    public function __construct($_title, $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    // Metodo per stampare le informazioni del film
    public function printMoveInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "<br>";
    }

}

// Creazione di tre oggetti Movie
$movie1 = new Movie("The Lord of the Rings: The Fellowship of the Ring", "Peter Robert Jackson", 2001);
$movie2 = new Movie("The Lord of the Rings: The Two Towers", "Peter Robert Jackson", 2002);
$movie3 = new Movie("The Lord of the Rings: The Return of the King", "Peter Robert Jackson", 2003);


var_dump($movie1,$movie2, $movie3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>

    <?php 

    echo "Informazioni del Film 1:<br>";
    $movie1->printMoveInfo();

    echo "Informazioni del Film 2:<br>";
    $movie2->printMoveInfo();

    echo "Informazioni del Film 3:<br>";
    $movie3->printMoveInfo();

    ?>
    
</body>
</html>
