<?php
/* 
Q. What is the purpose of file handling in PHP?
-> The purpose of file handling in PHP is to read and write data to
   files on the server.

-> This can be useful for a variety of tasks, such as storing user
   data, logging information, or managing configuration settings.

-> PHP provides a number of built-in functions for working with files,
   including functions for opening, reading, writing, and closing
   files, as well as functions for manipulating file permissions
   and other metadata. 
   
-> Are file system really faster than database (or MySQL)?
   - If a database has to scan the entire table, it may be slower than reading a file. 
     However, databases are usually designed to avoid such full-table scans. 
     If the database is large (e.g., a gigabyte) but only one row needs updating using 
     a primary key or indexed field, the database will quickly perform a few small 
     read/write operations, whereas a file system would need to read the entire file.

   - Updating a text file often means rewriting the whole file, which can be inefficient,
     especially when multiple programs need to update it at the same time. 
     For small, single-user applications, a simple file (like a CSV) may be faster 
     and easier to use. But as the system grows and multiple users need access, 
     a database becomes a better choice.
   
   -  Source: David Brower (Architect in Oracle)


Important functions for file handling in PHP:

a. fopen():
-> Opens a file or URL.
   
   Syntax - $fp = fopen($filename, $mode); // returns type resource
   
   Note: 
   -> $filename and $mode are type string

b. fwrite():
-> Binary-safe file write.
   
   Syntax - fwrite($handle, $string); // returns type int
   
   Note: 
   -> $handle is type resource or file pointer
   -> $string is type string

c. filesize():
-> Gets file size. (Bytes)
   
   Syntax - filesize($filename); // returns type int
   
   Note: 
   -> $filename is type string or path to the file

d. fread():
-> Binary-safe file read.
   
   Syntax - fread($handle, $length); // returns type string | false
   
   Note: 
   -> $handle is type resource or file pointer
   -> $length is type int 

e. fputcsv(): (Not In Syllabus)
-> Format line as csv and write to file pointer.
   
   Syntax - fputcsv($handle, $fields, $delimeter); // returns type 
                                                      int | false
   
   Note: 
   -> $handle is type resource or file pointer
   -> $fields are type array
   -> $delimeter is type string (one character or separator)
   -> $delimeter is optional

f. fgetcsv():(Not In Syllabus)
-> Gets line from file pointer and parse for csv fields.
   
   Syntax - fgetcsv($handle, $length, $delimeter); // returns type
                                                      array 
                                                
   Note: 
   -> $handle is type resource or file pointer
   -> $length is type int (optional)
   -> $delimeter is type string (one character or separator)
   -> $delimeter is optional

g. fclose():
-> Close an open file pointer.
   
   Syntax - fclose($handle); // returns type boolean
                                                
   Note: 
   -> $handle is type resource or file pointer

h. file_put_contents():
-> Write a string to a file.
   
   Syntax - file_put_contents($filename, $data); // returns type int
                                                
   Note: 
   -> $filename is type string
   -> $data is type mixed

i. file_get_contents():
-> Reads entire file into a string.
   
   Syntax - file_get_contents($filename); // returns type string
                                                
   Note: 
   -> $filename is type string

j. feof():
-> Test for end-of-file on a file pointer.
   
   Syntax - feof($handle); // returns type boolean
                                                
   Note: 
   -> $handle is type resource

k. fgets():
-> Gets line from file pointer. Used to read a single line from an open file.
   
   Syntax - fgets($handle, $length); // returns type string
                                                
   Note: 
   -> $handle is type resource
   -> $length is type int

*/