<?php
// EXO 1
/*
$possible_states = ["dangereuse pour la santé","très sale", "sale", "propre", "impeccable"];


$room_filthiness = $possible_states[0]; 

if( $room_filthiness = $possible_states[0] ){
	echo "DANGER ! !";
} else if( $room_filthiness = $possible_states[1] ){
	echo "BEURK !";
} else if( $room_filthiness = $possible_states[2] ){
	echo "beurk !";
} else if( $room_filthiness = $possible_states[3] ){
	echo "nice !";
} else if( $room_filthiness = $possible_statess[4] ){
	echo "very nice !";

}else {
	echo "<br>Nothing to do, room is neat.";
}
*/



// EXO 2
/*
$now = date("H:i");

if ($now >= "05:00" && $now < "09:00") {
    echo "Bonjour !";
} elseif ($now >= "09:01" && $now < "12:00") {
    echo "Bonne journée !";
} elseif ($now >= "12:01" && $now < "16:00") {
    echo "Bon après-midi !";
} elseif ($now >= "16:01" && $now < "21:00") {
    echo "Bonsoir !";
} else {
    echo "Bonne nuit !";
}
*/



// EXO 3
/*
if (isset($_GET['age'])) {

    $age = $_GET['age'];

    if ($age < 12) {
        echo "Bonjour, gamin !";
    } else if ($age >= 12 && $age < 18) {
        echo "Bonjour Adolescent !";
    } else if ($age >= 18 && $age < 115) {
        echo "Bonjour adulte !";
    } else if ($age >= 115) {
        echo "Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
    } else {
        echo "aucun âge entré";
    }
}

?>
<form method="get" action="">
    <label for="age">saisissez votre âge</label>
    <input type="number" name="age">
    <input type="submit" name="submit" value="Greet me now">
</form>
*/



// EXO 4
/*
if (isset($_GET['age']) && isset($_GET['genre'])) {

    $age = $_GET['age'];
    $genre = $_GET['genre'];

    if ($genre === "femme") {
        
        if ($age < 12) {
            echo "bonjour ! gamine";
        } else if ($age >= 12 && $age < 18) {
            echo "bonjour adolescente !";
        } else if ($age >= 18 && $age < 115) {
            echo "bonjour madame !";
        } else if ($age >= 115) {
            echo "wow vous êtes très vieille";
        }
    } elseif ($genre === "homme") {

        if ($age < 12) {
            echo "bonjour gamin !";
        } else if ($age >= 12 && $age < 18) {
            echo "bonjour adolescent !";
        } else if ($age >= 18 && $age < 115) {
            echo "bonjour monsieur !";
        } else if ($age >= 115) {
            echo "wow vous êtes très vieux";
        }
    } else {
        echo "genre indéterminé";
    }
}

?>
<form method="get" action="">
    <label for="age">Saisissez votre âge : </label>
    <input type="number" name="age">

    <label for="femme">Femme</label>
    <input type="radio" name="genre" value="femme">

    <label for="homme">Homme</label>
    <input type="radio" name="genre" value="homme">

    <input type="submit" name="submit" value="Greet me now">
</form>
*/


// EXO 5
if (isset($_GET['age']) && isset($_GET['genre']) && isset($_GET['langue'])) {

    $age = $_GET['age'];
    $genre = $_GET['genre'];
    $langue = $_GET['langue'];

    // oui
    if ($langue === "oui") {
        // femme
        if ($genre === "femme") {
            if ($age < 12) {
                echo "hello girl";
            } elseif ($age >= 12 && $age < 18) {
                echo "hello girl 1";
            } elseif ($age >= 18 && $age < 115) {
                echo "hello girl 2";
            } elseif ($age >= 115) {
                echo "hello girl 3";
            }
        } 
        // homme
        elseif ($genre === "homme") {
            if ($age < 12) {
                echo "hello boy";
            } elseif ($age >= 12 && $age < 18) {
                echo "hello boy 1";
            } elseif ($age >= 18 && $age < 115) {
                echo "hello boy 2";
            } elseif ($age >= 115) {
                echo "hello boy 3";
            }

        } else {
            echo "Genre indéterminé";
        }

    // non
    } elseif ($langue === "non") {
        // femme
        if ($genre === "femme") {
            if ($age < 12) {
                echo "alloha girl";
            } elseif ($age >= 12 && $age < 18) {
                echo "alloha girl 1";
            } elseif ($age >= 18 && $age < 115) {
                echo "alloha girl 2";
            } elseif ($age >= 115) {
                echo "alloha girl 3";
            }
        } 
        // homme
        elseif ($genre === "homme") {
            if ($age < 12) {
                echo "alloha boy";
            } elseif ($age >= 12 && $age < 18) {
                echo "alloha boy 1";
            } elseif ($age >= 18 && $age < 115) {
                echo "alloha boy 2";
            } elseif ($age >= 115) {
                echo "alloha boy 3";
            }
        } else {
            echo "Genre indéterminé";
        }
    } else {
        echo "Langue indéterminée";
    }
}
?>
<form method="get" action="">
    <div>
        <label for="age">Saisissez votre âge : </label>
        <input type="number" name="age">
    </div>
    <label for="femme">Femme</label>
    <input type="radio" name="genre" value="femme">
    <div>
        <label for="homme">Homme</label>
        <input type="radio" name="genre" value="homme">
    </div>
    <div>
        <label for="langue">Parlez-vous anglais ? </label>
        <label for="oui">oui</label>
        <input type="radio" name="langue" value="oui">
        <label for="non">non</label>
        <input type="radio" name="langue" value="non">
    </div>
    <input type="submit" name="submit" value="valider">
</form>
