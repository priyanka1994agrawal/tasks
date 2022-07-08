**1. Script Task**
   Create a PHP script, that is executed from the command line, which accepts a CSV file as input (see command
   line directives below) and processes the CSV file. The parsed file data is to be inserted into a MySQL database.
   
   A CSV file is provided as part of this task that contains test data, the script must be able to process this file
   appropriately.
   
  The PHP script will need to correctly handle the following criteria:
  
    • CSV file will contain user data and have three columns: name, surname, email (see table definition below)
    • CSV file will have an arbitrary list of users
    • Script will iterate through the CSV rows and insert each record into a dedicated MySQL database into the table “users”
    • The users database table will need to be created/rebuilt as part of the PHP script. This will be defined as a Command Line directive below
    • Name and surname field should be set to be capitalised e.g. from “john” to “John” before being inserted into DB
    • Emails need to be set to be lower case before being inserted into DB
    • The script should validate the email address before inserting, to make sure that it is valid (valid means that it is a legal email format, e.g. “xxxx@asdf@asdf” is     not a legal format). In case that an email is invalid, no insert should be made to database and an error message should be reported to STDOUT.


**2. Logic Test**
Create a PHP script that is executed form the command line. The script should:
  • Output the numbers from 1 to 100
  • Where the number is divisible by three (3) output the word “foo”
  • Where the number is divisible by five (5) output the word “bar”
  • Where the number is divisible by three (3) and (5) output the word “foobar”
  • Only be a single PHP file

**2.1 Example**
  An example output of the script would look like:
  1, 2, foo, 4, bar, foo, 7, 8, foo, bar, 11, foo, 13, 14, foobar … 
