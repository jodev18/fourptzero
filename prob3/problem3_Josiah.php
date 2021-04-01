<?php
//Problem # 3
//Test run here: https://onlinegdb.com/r1jsNWGSu

function getIndexRecurring($strval){

    error_reporting(0);

    echo "Input:" . $strval . "\n\n";

    $arrchar = str_split($strval);

    echo "Input array indices:\n\n";

    for($z=0;$z<count($arrchar);$z++){
        if($z > 10){
            echo " " . $arrchar[$z] . "|";
        }
        else{
            echo $arrchar[$z] . "|";
        }
    }

    echo "\n";

    for($z=0;$z<count($arrchar);$z++){
        echo $z . "|";
    }

    echo "\n\n";

    $uniquec = array_unique($arrchar);
    $uniquec = array_values($uniquec);

    // count freq of each unique char
    $freqlist = array();
    //indices of all occurrences
    $elem_indices = array();

    //We iterate through the unique list as reference for counting f
    foreach ($uniquec as $char) {
        $freq = 0;
        $indices = array();

        //Trad for loop since we need to get indices
        for($i=0;$i<count($arrchar);$i++){
            if(strcmp($char,$arrchar[$i]) === 0){
                $freq++;
                array_push($indices,$i);
            }
        }

        if(count($indices) > 0){
            array_push($elem_indices,$indices);
        }

        array_push($freqlist,$freq);
    }

    //Display all unique chars
    echo "Unique characters:\n\n";
    foreach($uniquec as $uu){
        echo $uu . "|";
    }
    echo "\n";

    //Display frequencies
    foreach($freqlist as $ff){
        echo $ff . "|";
    }


    echo "\n\nDuplicate values: \n";

    $listdups = array();

    //Display all the letters with their indices
    for($j=0;$j<count($uniquec);$j++){

        if(count($elem_indices[$j]) > 1){
            echo $uniquec[$j] . "=> (";
            array_push($listdups,$uniquec[$j]);
            for($x=0;$x<count($elem_indices[$j]);$x++){
                echo $elem_indices[$j][$x] . "|";
            }

            echo ")\n";
        }
    }

    echo "\n";
    echo "First occuring duplicate:" . $listdups[0] . "\n\n";
}

getIndexRecurring("IKEUNFUVUVFV");
getIndexRecurring("PXLJOUDJVZGQHLBHGXIW");
getIndexRecurring("*l1J?)yn%R[}9~1\"=k7]9;0[$");

?>
