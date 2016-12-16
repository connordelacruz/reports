<?php
/**
 * Do not make changes to this file. Create a copy config.php and fill in values there
 */

// (Optional) Fill in the following if you'd rather not enter them each time the report generator is used
// Server where the MySQL database is located
$SQL_SERVER = "localhost";
// Name of the database to generate reports of
$SQL_DATABASE = "test";
// MySQL port number (will use default if left blank)
$SQL_PORT = "3307";
// User with read access to the above database
$SQL_USER = "test_user";
// Password of the above user
$SQL_PASSWORD = "password";

// (REQUIRED) ENTER THE MYSQL INFO BELOW FOR THE DATABASE THAT WILL CONTAIN YOUR SAVED REPORTS IN ORDER TO SAVE REPORTS
// MYSQL SERVER NAME FOR SAVED REPORTS
$SAVED_REPORTS_SQL_SERVER = "localhost";
// MYSQL USER NAME FOR SAVED REPORTS
$SAVED_REPORTS_SQL_USER = "saved_reports";
// MYSQL PASSWORD FOR SAVED REPORTS
$SAVED_REPORTS_SQL_PASSWORD = "password";
// NAME OF DATABASE YOU WOULD LIKE TO USE FOR SAVED REPORTS
$SAVED_REPORTS_SQL_DATABASE = "saved_reports";
// PORT NUMBER OF THE DATABASE FOR SAVED REPORTS (LEAVE BLANK IF UNNECESSARY)
$SAVED_REPORTS_SQL_PORT = "3307";