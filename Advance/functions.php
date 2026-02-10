<?php

$advanceFunctions = [
    "BIN" => [
        "Returns a binary representation of a number",
        "SELECT BIN(10) AS result"
    ],
    "BINARY" => [
        "Converts a value to binary",
        "SELECT BINARY 'Hello' AS result"
    ],
    "CASE" => [
        "Goes through conditions and returns a value",
        "SELECT name,
                CASE
                    WHEN price > 1000 THEN 'Expensive'
                    ELSE 'Affordable'
                END AS result
         FROM data"
    ],
    "CAST" => [
        "Converts a value to a specified datatype",
        "SELECT CAST(price AS SIGNED) AS result FROM data"
    ],
    "COALESCE" => [
        "Returns the first non-null value",
        "SELECT COALESCE(NULL, NULL, 'Hello', 'World') AS result"
    ],
    "CONVERT" => [
        "Converts a value to a specified datatype",
        "SELECT CONVERT(price, SIGNED) AS result FROM data"
    ],
    "DATABASE" => [
        "Returns the current database name",
        "SELECT DATABASE() AS result"
    ],
    "IF" => [
        "Returns a value if condition is true or false",
        "SELECT IF(price > 1000, 'High', 'Low') AS result FROM data"
    ],
    "IFNULL" => [
        "Returns a value if NULL",
        "SELECT IFNULL(NULL, 'Default Value') AS result"
    ],
    "ISNULL" => [
        "Checks if a value is NULL",
        "SELECT ISNULL(NULL) AS result"
    ],
    "LAST_INSERT_ID" => [
        "Returns the last auto-increment value",
        "SELECT LAST_INSERT_ID() AS result"
    ],
    "NULLIF" => [
        "Returns NULL if values are equal",
        "SELECT NULLIF(10, 10) AS result"
    ],
    "SESSION_USER" => [
        "Returns the current MySQL user",
        "SELECT SESSION_USER() AS result"
    ],
    "SYSTEM_USER" => [
        "Returns the current MySQL user",
        "SELECT SYSTEM_USER() AS result"
    ],
    "USER" => [
        "Returns the current MySQL user",
        "SELECT USER() AS result"
    ],
    "VERSION" => [
        "Returns the MySQL/MariaDB version",
        "SELECT VERSION() AS result"
    ],
    "UUID" => [
        "Returns a Universal Unique Identifier",
        "SELECT UUID() AS result"
    ],
    "UUID_SHORT" => [
        "Returns a short UUID",
        "SELECT UUID_SHORT() AS result"
    ],
    "ROW_COUNT" => [
        "Returns the number of affected rows",
        "SELECT ROW_COUNT() AS result"
    ]
];
