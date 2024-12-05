CREATE TABLE  IF NOT EXISTS students(
    ID integer PRIMARY KEY,
    Name varchar(50)
);
ALTER TABLE students
ADD DOB date;
ALTER TABLE students
DROP Name;
ALTER TABLE students
CHANGE DOB  Date_Of_Birth date;
RENAME TABLE students TO My_Children;