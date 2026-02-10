<?php

$numericFunctions = [
    "ABS" => [
        "Returns the absolute value of a number",
        "SELECT ABS(-10) AS result"
    ],
    "ACOS" => [
        "Returns the arc cosine of a number",
        "SELECT ACOS(0.5) AS result"
    ],
    "ASIN" => [
        "Returns the arc sine of a number",
        "SELECT ASIN(0.5) AS result"
    ],
    "ATAN" => [
        "Returns the arc tangent of a number",
        "SELECT ATAN(1) AS result"
    ],
    "ATAN2" => [
        "Returns the arc tangent of two numbers",
        "SELECT ATAN2(1, 1) AS result"
    ],
    "AVG" => [
        "Returns the average value of an expression",
        "SELECT AVG(price) AS result FROM data"
    ],
    "CEIL" => [
        "Returns the smallest integer >= a number",
        "SELECT CEIL(4.3) AS result"
    ],
    "CEILING" => [
        "Returns the smallest integer >= a number",
        "SELECT CEILING(4.3) AS result"
    ],
    "COS" => [
        "Returns the cosine of a number",
        "SELECT COS(0) AS result"
    ],
    "COT" => [
        "Returns the cotangent of a number",
        "SELECT COT(1) AS result"
    ],
    "COUNT" => [
        "Returns the number of records",
        "SELECT COUNT(*) AS result FROM data"
    ],
    "DEGREES" => [
        "Converts radians to degrees",
        "SELECT DEGREES(PI()) AS result"
    ],
    "DIV" => [
        "Used for integer division",
        "SELECT 10 DIV 3 AS result"
    ],
    "EXP" => [
        "Returns e raised to a number",
        "SELECT EXP(2) AS result"
    ],
    "FLOOR" => [
        "Returns the largest integer <= a number",
        "SELECT FLOOR(4.7) AS result"
    ],
    "GREATEST" => [
        "Returns the greatest value",
        "SELECT GREATEST(3, 7, 2, 9) AS result"
    ],
    "LEAST" => [
        "Returns the smallest value",
        "SELECT LEAST(3, 7, 2, 9) AS result"
    ],
    "LN" => [
        "Returns the natural logarithm",
        "SELECT LN(2) AS result"
    ],
    "LOG" => [
        "Returns logarithm (base e or specified)",
        "SELECT LOG(10) AS result"
    ],
    "LOG10" => [
        "Returns logarithm base 10",
        "SELECT LOG10(100) AS result"
    ],
    "LOG2" => [
        "Returns logarithm base 2",
        "SELECT LOG2(8) AS result"
    ],
    "MAX" => [
        "Returns the maximum value",
        "SELECT MAX(price) AS result FROM data"
    ],
    "MIN" => [
        "Returns the minimum value",
        "SELECT MIN(price) AS result FROM data"
    ],
    "MOD" => [
        "Returns remainder of division",
        "SELECT MOD(10, 3) AS result"
    ],
    "PI" => [
        "Returns the value of PI",
        "SELECT PI() AS result"
    ],
    "POW" => [
        "Raises a number to a power",
        "SELECT POW(2, 3) AS result"
    ],
    "POWER" => [
        "Raises a number to a power",
        "SELECT POWER(2, 4) AS result"
    ],
    "RADIANS" => [
        "Converts degrees to radians",
        "SELECT RADIANS(180) AS result"
    ],
    "RAND" => [
        "Returns a random number",
        "SELECT RAND() AS result"
    ],
    "ROUND" => [
        "Rounds a number",
        "SELECT ROUND(123.4567, 2) AS result"
    ],
    "SIGN" => [
        "Returns the sign of a number",
        "SELECT SIGN(-15) AS result"
    ],
    "SIN" => [
        "Returns the sine of a number",
        "SELECT SIN(1) AS result"
    ],
    "SQRT" => [
        "Returns the square root",
        "SELECT SQRT(16) AS result"
    ],
    "SUM" => [
        "Calculates the sum of values",
        "SELECT SUM(price) AS result FROM data"
    ],
    "TAN" => [
        "Returns the tangent",
        "SELECT TAN(1) AS result"
    ],
    "TRUNCATE" => [
        "Truncates a number",
        "SELECT TRUNCATE(123.4567, 2) AS result"
    ]
];
