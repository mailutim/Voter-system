<?php 
$voter_age = 18;
$has_pvc = true;
$voter_ward = '020';

if ($voter_age < 18) {
    echo "Voter is under 18 years old.";
} elseif (!$has_pvc){
     echo "Voter does not have a PVC.";
} elseif( $voter_ward !== "020") {
    echo "Voter's ward is not 020.";
} else {
        echo "Voter eligible to vote.";
}

?>