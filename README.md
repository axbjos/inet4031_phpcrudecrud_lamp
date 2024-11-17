# INET4031 PHP Crude CRUD App (MariaDB/MySQL DB Version)

## Demonstrates a basic Dynamic HTML Application using PHP

It doesn't get much more crude than this, but is a great starting point for understanding how **dynamic data-driven web applications** work.

Understand how this one works, and more modern/advanced/complex web development frameworks, won't seem so mysterious.

This application assumes the MySQL database has certain users added and an "employees" database based on a sample dataset. Additional details will be provided in class.

The "credentials.php" file above has the details of the MySQL database connection.  You will need to modify this file to work for your configuration

Obviously everything is in the open and unsecure here.

## Dynamic Web Page: Server vs. Client Side

Please take a look at the following page: dynamic.php to see a very simple example of what is meant by "server-side code" and "client-side code."

## PHP Crude CRUD API

Also included are the following files that demonstrate very crude API's.

These PHP pages do not return a web page, but instead return data designed to be used by a piece of client software.

The "json" versions return the requested data in JSON format.

## PHP Crude CRUD API Client

Look in the "apiclients" directory for examples of very simple Python program use the "requests" module to interact with the simple Crude CRUD API's.

## AJAX

The "ajax" pages demonstrate how to do real-time updates to a web page using Asynchronous JavaScript and XML. This is an older technology, but is a great place to start to learn how to create dynamic web pages that update content area real-time as a JavaScript client sends queries to backend server code.
