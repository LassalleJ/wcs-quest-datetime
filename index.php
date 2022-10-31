<?php
$presentTime = new DateTime();
$destinationTime = new DateTime;
$destinationTime->setDate(2023, 02, 10);
$destinationTime->setTime(17, 30);
$presentTimeFormatted = $presentTime->format('M-d-Y , a  h i s');
$destinationTimeFormatted = $destinationTime->format('M-d-Y , a  h i s');
$diff = $presentTime->diff($destinationTime);
$dayDiff = $diff->format('%a');
$minutesDiff = $diff->i;
$hourDiff = $diff->h;
$minDiff = $dayDiff * 24 * 60 + $minutesDiff + $hourDiff * 60;
$fuelNeeded = round($minDiff / 10000,1);
echo 'The journey starts the ' . $presentTimeFormatted . '<br>';
echo 'It should end the ' . $destinationTimeFormatted . '<br>';
echo 'It means our journey will last ' . $minDiff . ' minutes !' . '<br>';
echo "We will need $fuelNeeded litters of fuel.";



