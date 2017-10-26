<?php
//Funktion schreiben die Inhalt aus .TXT liest
function leseDaten(){
	return unserialize(file_get_contents("daten/inhalt.txt"));
}

function searchForWord($searchword, $array) {
   $searchArray = array();
   foreach ($array as $key => $val) {
       if ( strpos($val['titel'], $searchword) !== false || strpos($val['inhalt'], $searchword) !== false) {
           $searchArray[] = $key;
       }
   }
   if(!empty($searchArray)){
		return $searchArray;
	} else{
		return;
   }
}
//Nimm Suchwort und Gesamtarray und suche darin
function getSearchResult($searchWord, $resultArray){
	$resultArraySearch = array();
	// Gib Ergebnisarray mit Index zur�ck
	$searchResultIndex = searchForWord($searchWord, $resultArray);
	foreach($resultArray as $key => $val){
		foreach($searchResultIndex as $index){
			if($index == $key){
				$resultArraySearch[] = $val;
			}
		}
	}
	return $resultArraySearch;
}

function sortArrayByFields($arr, $fields)
{
    $sortFields = array();
    $args       = array();

    foreach ($arr as $key => $row) {
        foreach ($fields as $field => $order) {
            $sortFields[$field][$key] = $row[$field];
        }
    }

    foreach ($fields as $field => $order) {
        $args[] = $sortFields[$field];

        if (is_array($order)) {
            foreach ($order as $pt) {
                $args[$pt];
            }
        } else {
            $args[] = $order;
        }
    }

    $args[] = &$arr;

    call_user_func_array('array_multisort', $args);

    return $arr;
}

?>
