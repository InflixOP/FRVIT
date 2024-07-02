# FRVIT

## Overview
This platform digitizes the process of filing complaints related to electricity, mess, water, etc., making it easier for students and staff to register and manage complaints. The website streamlines the complaint process, improving efficiency and response times.

## Features
- **Complaint Registration:** Users can easily file complaints related to various issues.
- **Complaint Management:** Admins can view, track, and manage complaints.
- **User-friendly Interface:** Simple and intuitive interface for easy navigation and use.

## Technologies Used
- **Backend:** PHP
- **Frontend:** HTML, CSS

## Installation

### Prerequisites
- Web server (e.g., Apache, Nginx)
- PHP 7.4 or higher
- MySQL or any other relational database

### Steps
1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/college-complaint-system.git
    ```
2. Navigate to the project directory:
    ```sh
    cd college-complaint-system
    ```
3. Set up the database:
    - Create a new database.
    - Import the provided SQL file to set up the required tables.
    ```sh
    mysql -u your_username -p your_database < database.sql
    ```
4. Configure the database connection:
    - Open `config.php` and update the database connection details.
    ```php
    <?php
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";
    ?>
    ```
5. Deploy the project to your web server's root directory:
    - If using Apache, place the project files in the `htdocs` directory.
    - If using Nginx, update the server block configuration to point to the project directory.
6. Open your browser and navigate to the project URL:
    ```sh
    http://localhost/college-complaint-system
    ```

## Usage

### For Students and Staff
- Sign up and log in to the system.
- File complaints by selecting the relevant category (electricity, mess, water, etc.).
- Track the status of your complaints.

### For Admins
- Log in to the admin panel.
- View and manage all registered complaints.
- Update the status of complaints and communicate with the complainant.

## Contribution
Feel free to contribute to this project by opening issues and submitting pull requests. Contributions are welcome and greatly appreciated.



