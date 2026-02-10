<?php

$stringFunctions = [
    "ASCII" => [
        "Returns the ASCII value for the specific character",
        "SELECT ASCII(name) AS result FROM dataa"
    ],
    "CHAR_LENGTH" => [
        "Returns the length of a string (in characters)",
        "SELECT CHAR_LENGTH(name) AS result FROM data"
    ],
    "CHARACTER_LENGTH" => [
        "Returns the length of a string (in characters)",
        "SELECT CHARACTER_LENGTH(name) AS result FROM data"
    ],
    "CONCAT" => [
        "Adds two or more expressions together",
        "SELECT CONCAT(name, ' - ', city) AS result FROM data"
    ],
    "CONCAT_WS" => [
        "Adds strings together with a separator",
        "SELECT CONCAT_WS(', ', name, city, email) AS result FROM data"
    ],
    "FIELD" => [
        "Returns index position of a value in a list",
        "SELECT FIELD(city, 'Chicago','New York','Los Angeles') AS result FROM data"
    ],
    "FIND_IN_SET" => [
        "Returns position of a string within a list",
        "SELECT FIND_IN_SET(city, 'New York,Los Angeles,Chicago') AS result FROM data"
    ],
    "FORMAT" => [
        "Formats a number",
        "SELECT FORMAT(price, 2) AS result FROM data"
    ],
    "INSERT" => [
        "Inserts a string into another string",
        "SELECT INSERT(name, 2, 3, 'XXX') AS result FROM data"
    ],
    "INSTR" => [
        "Returns position of first occurrence",
        "SELECT INSTR(email, '@') AS result FROM data"
    ],
    "LCASE" => [
        "Converts string to lowercase",
        "SELECT LCASE(name) AS result FROM data"
    ],
    "LEFT" => [
        "Extracts characters from left",
        "SELECT LEFT(name, 3) AS result FROM data"
    ],
    "LENGTH" => [
        "Returns string length in bytes",
        "SELECT LENGTH(name) AS result FROM data"
    ],
    "LOCATE" => [
        "Finds position of substring",
        "SELECT LOCATE('a', name) AS result FROM data"
    ],
    "LOWER" => [
        "Converts to lowercase",
        "SELECT LOWER(name) AS result FROM data"
    ],
    "LPAD" => [
        "Pads string from left",
        "SELECT LPAD(name, 10, '*') AS result FROM demdatao_data"
    ],
    "LTRIM" => [
        "Removes leading spaces",
        "SELECT LTRIM('   Hello') AS result"
    ],
    "MID" => [
        "Extracts substring",
        "SELECT MID(name, 2, 3) AS result FROM data"
    ],
    "POSITION" => [
        "Returns position of substring",
        "SELECT POSITION('o' IN name) AS result FROM data"
    ],
    "REPEAT" => [
        "Repeats a string",
        "SELECT REPEAT(name, 2) AS result FROM data"
    ],
    "REPLACE" => [
        "Replaces substring",
        "SELECT REPLACE(name, 'a', '@') AS result FROM data"
    ],
    "REVERSE" => [
        "Reverses a string",
        "SELECT REVERSE(name) AS result FROM data"
    ],
    "RIGHT" => [
        "Extracts characters from right",
        "SELECT RIGHT(name, 2) AS result FROM data"
    ],
    "RPAD" => [
        "Pads string from right",
        "SELECT RPAD(name, 10, '*') AS result FROM data"
    ],
    "RTRIM" => [
        "Removes trailing spaces",
        "SELECT RTRIM('Hello   ') AS result"
    ],
    "SPACE" => [
        "Returns space characters",
        "SELECT CONCAT(name, SPACE(5), city) AS result FROM data"
    ],
    "STRCMP" => [
        "Compares two strings",
        "SELECT STRCMP(name, 'Alice') AS result FROM data"
    ],
    "SUBSTR" => [
        "Extracts substring",
        "SELECT SUBSTR(name, 2, 3) AS result FROM data"
    ],
    "SUBSTRING" => [
        "Extracts substring",
        "SELECT SUBSTRING(name, 1, 4) AS result FROM data"
    ],
    "SUBSTRING_INDEX" => [
        "Returns substring before delimiter",
        "SELECT SUBSTRING_INDEX(email, '@', 1) AS result FROM data"
    ],
    "TRIM" => [
        "Removes leading and trailing spaces",
        "SELECT TRIM('   Hello   ') AS result"
    ],
    "UCASE" => [
        "Converts to uppercase",
        "SELECT UCASE(name) AS result FROM data"
    ],
    "UPPER" => [
        "Converts to uppercase",
        "SELECT UPPER(name) AS result FROM data"
    ]
];
