<?php
$conn = mysqli_connect("localhost:3307", "root", "", "househunt_db");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
