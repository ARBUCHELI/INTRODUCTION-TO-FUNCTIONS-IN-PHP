<?php
// Write your code below:
function increaseEnthusiasm($word) {
  return "$word!";
}

echo increaseEnthusiasm("Hi");

function repeatThreeTimes($word) {
  return "$word$word$word";
}

echo repeatThreeTimes("hi");

echo increaseEnthusiasm(repeatThreeTimes("hi"));