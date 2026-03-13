
# Airline Booking System
Project Overview

The Airline Booking System is a web-based application that allows users to search flights, book tickets, and make online payments. The system provides a simple and user-friendly interface where users can register, log in, view available flights, reserve seats, and receive a digital ticket after payment.

This system helps automate the flight reservation process, reducing manual work and making ticket booking faster and more efficient. The application stores user data, flight details, booking information, and payment records in a MySQL database and processes requests using PHP on a local XAMPP server.

Features

User Authentication
Users can create accounts and securely log in using their email and password.

Flight Search
Users can view available flights with details such as source, destination, date, and time.

Flight Booking
Users can select a flight and book seats for their journey.

Payment System
After booking, users can make payments for the reserved seats.

Ticket Generation
Once payment is completed, the system generates a flight ticket with booking details.

Database Integration
All user details, bookings, flights, and payment information are stored in a MySQL database.

Responsive Interface
The system uses HTML, CSS, and Bootstrap to provide a clean and modern user interface.

Local Server Support
The system runs on XAMPP (Apache + MySQL) for local development and testing.

Technologies Used

Frontend
HTML
CSS
Bootstrap

Backend
PHP

Database
MySQL

Server Environment
XAMPP (Apache & MySQL)

Database Concepts
Relational Database Management System (RDBMS)

Installation & Setup
1. Environment Setup

Before running the project, install the required environment.

Install XAMPP

XAMPP provides a local server environment including:

Apache (Web Server)

MySQL (Database Server)

After installation:

Open XAMPP Control Panel

Start Apache

Start MySQL

Project Folder

Place your project folder inside the htdocs directory.

Example location:

C:\xampp\htdocs\airline_system

All project files such as PHP, HTML, CSS, and images should be inside this folder.

Database Setup

Open phpMyAdmin

http://localhost/phpmyadmin/

Create a new database called:

airline_system

Then create the required tables.

Users Table
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE,
password VARCHAR(100)
);
Flights Table
CREATE TABLE flights (
id INT AUTO_INCREMENT PRIMARY KEY,
source VARCHAR(50),
destination VARCHAR(50),
departure_date DATE,
departure_time TIME,
price INT
);
Booking Table
CREATE TABLE booking (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
flight_id INT,
seats INT,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (flight_id) REFERENCES flights(id)
);
Payment Table
CREATE TABLE payment (
id INT AUTO_INCREMENT PRIMARY KEY,
booking_id INT,
amount INT,
FOREIGN KEY (booking_id) REFERENCES booking(id)
);
Execution Flow
Step 1: Access the Application

Open a web browser and navigate to:

http://localhost/airline_system/

The login or home page will load.

Step 2: User Authentication

Users can register or log in.

When the login form is submitted:

PHP receives the user input

It checks the email and password in the database

If valid → user is redirected to the flight page

If invalid → an error message is displayed

Example login query:

SELECT * FROM users WHERE email='$email' AND password='$password'
Step 3: Flight Selection

After login, users can view available flights.

Each flight displays:

Source

Destination

Departure date

Departure time

Ticket price

Users can click Book to reserve seats.

Step 4: Booking Process

When a user books a flight:

The booking details are stored in the booking table.

Example query:

INSERT INTO booking(user_id, flight_id, seats)
VALUES(1, 2, 3);

This records which user booked which flight and how many seats.

Step 5: Payment Process

After booking, the user proceeds to the payment page.

The payment amount is stored in the payment table.

Example:

INSERT INTO payment(booking_id, amount)
VALUES(5, 3000);

After payment, the user is redirected to the ticket page.

Step 6: Ticket Generation

The system displays the ticket with details such as:

Flight source

Destination

Departure date

Departure time

Seats booked

Booking ID

This acts as confirmation of the reservation.

Step 7: Logout

When the user clicks logout, the session ends.

Example:

session_start();
session_destroy();
header("Location: login.php");

The user is redirected back to the login page.

Future Enhancements

Add online payment gateway integration (UPI, cards).
Allow users to cancel or modify bookings.
Provide flight search filters (price, time, airline).
Add seat selection and seat availability tracking.
Include email notifications for ticket confirmation.
