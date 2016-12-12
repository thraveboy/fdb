## Synopsis

Fury Database (FDB) is a super simple database to setup on a machine to be
used for an infinite number of possibilities.

## Installation

(How I setup on a Raspberry Pi)

Copy the index.php file to /var/www/html (this is what apache will 
initially call for non-api html/web requests, and this will call api.php to 
get the data):

sudo cp index.php /var/www/html


Copy the api.php file to /var/www/html (this is the file that apache
will initially call for api requests (and the php code is used in index.php
to get data) and will return JSON data:

sudo cp api.php /var/www/html


In /var/www/html, 'touch' the fdb.db file (this is the SQLITE database
file) and change the permission so apache can use it:

sudo touch /var/www/html/fdb.db

sudo chmod a+wr fdb.db


## Usage

Create a table or if the table exists it will return the last N (currently,
10 entries from your IP), just type (or send) a single word:

<table_name>

Note: "name" is a special table that will link whatever information you place
in the that table to your IP.


To add something to a table, just type the table name and the info:

<table_name> <whatever you want>

This will return how to retrieve the entry by returning the command
for retrieval and the address of the entry of how to retrieve.


To retrieve an entry, just type in the table name followed by the address of
the entry with the character '@' appended to the address:

<table_name> @<entry_number>


A table entry can also be a list of table entires. To do this, when you
enter the information for the entry place a "`" at the beginning of the
entry and then a list of pairs of a table name and an entry location
(without the '@') separated by commas.

`<table_name> <table_entry>, ...


