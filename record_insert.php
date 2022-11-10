<?php

require 'C:\Users\ASMESPL\Downloads\Faker-master\Faker-master\src\autoload.php';
include "addition/database_connection.php";
$faker = Faker\Factory::create();

// echo $first_name.$middle_name.$last_name.$email.$role.$gender.$username.$password.$phone_number.$age;

for($a = 0; $a < 1000; $a++){
    
    $first_name = $faker->firstname;
    $middle_name = $faker->firstname();
    $last_name = $faker->lastname;
    $email = $faker->email;
    $role = $faker->randomElement(['student', 'teacher']);
    $gender = $faker->randomElement(['male', 'female', 'other']);
    $username = $faker->unique()->text(11);
    $phone_number = 9876543210;
    $age = $faker->numberbetween(11, 65);
    $password = 123456;
    
    $sql = "INSERT into user (role, first_name, middle_name, last_name, username, email, phone_number, age, gender, password) values ('$role','$first_name', ' $middle_name', '$last_name', '$username', '$email', '$phone_number', '$age', '$gender', '$password')";
    $new_record = mysqli_query($conn, $sql);
}

?>