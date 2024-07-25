Hotel Management System

Overview

This project is a Hotel Management System implemented using HTML, CSS, JavaScript for the front-end, PHP (XAMPP) for the back-end, and SQL for the database management. It provides a web interface for both hotel guests and administrators to manage reservations, rooms, and other hotel operations efficiently.
Features

    User Roles:
        Guests: Can view available rooms, make reservations, and view their booking details.
        Administrators: Can manage rooms (add, delete, update), view reservations, and handle guest requests.

    Functionalities:
        Room Management: Add, delete, and update room information (type, price, availability).
        Reservation Management: Allow guests to book rooms based on availability.
        Guest Services: Provide additional services like room service requests and special accommodations.
        Billing and Payments: Calculate bills based on room rates and additional services requested.

Technologies Used

    Front-end: HTML5, CSS3, JavaScript
    Back-end: PHP
    Database: MySQL (via XAMPP)
    Server: Apache Server (XAMPP)

Installation and Setup
1)Clone the repository:
2)Set up XAMPP:
Install XAMPP and start Apache and MySQL services.
Import the provided SQL schema (bluebirdhotel.sql) into your MySQL database.
3)Configure Database Connection:
Navigate to backend/config/db_connect.php.
Update the database connection settings (hostname, username, password, database name) as per your XAMPP configuration.
4)Run the Application:
Open the project in your web browser using the local server address (e.g., http://localhost/hotel-management-system).

Usage

    Guests:
        Navigate through the site to view available rooms and make reservations.
        Provide necessary details and confirm the booking.
    Administrators:
        Log in using admin credentials to access the admin panel.
        Manage rooms, view reservations, and handle guest requests.

Contributing

Contributions are welcome! If you'd like to contribute:

    Fork the repository.
    Create your feature branch (git checkout -b feature/YourFeature).
    Commit your changes (git commit -am 'Add some feature').
    Push to the branch (git push origin feature/YourFeature).
    Open a pull request.
