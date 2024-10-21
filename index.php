<?php

$data = [
    [
        "time" => "Oct 12, 2024 03:11 AM",
        "amount" => "৳0.00",
        "status" => "00:05:30 Sec"
    ],
   
];


function generateOutput($data) {
    echo "<table>\n";
    echo "<tr><th>সময়</th><th>পরিমাণ</th><th>স্ট্যাটাস</th></tr>\n";
    foreach ($data as $transaction) {
        echo "<tr><td>" . $transaction["time"] . "</td><td>" . $transaction["amount"] . "</td><td>" . $transaction["status"] . "</td></tr>\n";
    }
    echo "</table>\n";
}


generateOutput($data);