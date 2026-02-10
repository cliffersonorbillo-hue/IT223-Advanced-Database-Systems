<?php

$dateFunctions = [
    "ADDDATE" => [
        "Adds an interval to a date",
        "SELECT ADDDATE('2024-01-01', INTERVAL 10 DAY) AS result"
    ],
    "ADDTIME" => [
        "Adds a time interval",
        "SELECT ADDTIME('10:00:00', '02:30:00') AS result"
    ],
    "CURDATE" => [
        "Returns the current date",
        "SELECT CURDATE() AS result"
    ],
    "CURRENT_DATE" => [
        "Returns the current date",
        "SELECT CURRENT_DATE() AS result"
    ],
    "CURRENT_TIME" => [
        "Returns the current time",
        "SELECT CURRENT_TIME() AS result"
    ],
    "CURRENT_TIMESTAMP" => [
        "Returns the current date and time",
        "SELECT CURRENT_TIMESTAMP() AS result"
    ],
    "CURTIME" => [
        "Returns the current time",
        "SELECT CURTIME() AS result"
    ],
    "DATE" => [
        "Extracts date from datetime",
        "SELECT DATE(created_at) AS result FROM data"
    ],
    "DATEDIFF" => [
        "Returns days between two dates",
        "SELECT DATEDIFF('2024-01-10','2024-01-01') AS result"
    ],
    "DATE_ADD" => [
        "Adds an interval to a date",
        "SELECT DATE_ADD('2024-01-01', INTERVAL 1 MONTH) AS result"
    ],
    "DATE_FORMAT" => [
        "Formats a date",
        "SELECT DATE_FORMAT(created_at, '%M %d, %Y') AS result FROM data"
    ],
    "DATE_SUB" => [
        "Subtracts an interval from a date",
        "SELECT DATE_SUB('2024-01-10', INTERVAL 5 DAY) AS result"
    ],
    "DAY" => [
        "Returns day of month",
        "SELECT DAY(created_at) AS result FROM data"
    ],
    "DAYNAME" => [
        "Returns weekday name",
        "SELECT DAYNAME(created_at) AS result FROM data"
    ],
    "DAYOFMONTH" => [
        "Returns day of month",
        "SELECT DAYOFMONTH(created_at) AS result FROM data"
    ],
    "DAYOFWEEK" => [
        "Returns weekday index",
        "SELECT DAYOFWEEK(created_at) AS result FROM data"
    ],
    "DAYOFYEAR" => [
        "Returns day of year",
        "SELECT DAYOFYEAR(created_at) AS result FROM data"
    ],
    "EXTRACT" => [
        "Extracts part of date",
        "SELECT EXTRACT(YEAR FROM created_at) AS result FROM data"
    ],
    "FROM_DAYS" => [
        "Returns date from number",
        "SELECT FROM_DAYS(738885) AS result"
    ],
    "HOUR" => [
        "Returns hour part",
        "SELECT HOUR(created_at) AS result FROM data"
    ],
    "LAST_DAY" => [
        "Returns last day of month",
        "SELECT LAST_DAY(created_at) AS result FROM data"
    ],
    "LOCALTIME" => [
        "Returns current date and time",
        "SELECT LOCALTIME() AS result"
    ],
    "LOCALTIMESTAMP" => [
        "Returns current date and time",
        "SELECT LOCALTIMESTAMP() AS result"
    ],
    "MAKEDATE" => [
        "Creates a date",
        "SELECT MAKEDATE(2024, 100) AS result"
    ],
    "MAKETIME" => [
        "Creates a time",
        "SELECT MAKETIME(10, 30, 45) AS result"
    ],
    "MICROSECOND" => [
        "Returns microsecond part",
        "SELECT MICROSECOND(NOW(6)) AS result"
    ],
    "MINUTE" => [
        "Returns minute part",
        "SELECT MINUTE(created_at) AS result FROM data"
    ],
    "MONTH" => [
        "Returns month number",
        "SELECT MONTH(created_at) AS result FROM data"
    ],
    "MONTHNAME" => [
        "Returns month name",
        "SELECT MONTHNAME(created_at) AS result FROM data"
    ],
    "NOW" => [
        "Returns current date and time",
        "SELECT NOW() AS result"
    ],
    "PERIOD_ADD" => [
        "Adds months to a period",
        "SELECT PERIOD_ADD(202401, 3) AS result"
    ],
    "PERIOD_DIFF" => [
        "Difference between periods",
        "SELECT PERIOD_DIFF(202412, 202401) AS result"
    ],
    "QUARTER" => [
        "Returns quarter of year",
        "SELECT QUARTER(created_at) AS result FROM data"
    ],
    "SECOND" => [
        "Returns seconds part",
        "SELECT SECOND(created_at) AS result FROM data"
    ],
    "SEC_TO_TIME" => [
        "Converts seconds to time",
        "SELECT SEC_TO_TIME(3661) AS result"
    ],
    "STR_TO_DATE" => [
        "Converts string to date",
        "SELECT STR_TO_DATE('01-02-2024', '%d-%m-%Y') AS result"
    ],
    "SUBDATE" => [
        "Subtracts interval from date",
        "SELECT SUBDATE('2024-01-10', INTERVAL 5 DAY) AS result"
    ],
    "SUBTIME" => [
        "Subtracts time from datetime",
        "SELECT SUBTIME('10:00:00', '01:30:00') AS result"
    ],
    "SYSDATE" => [
        "Returns current date and time",
        "SELECT SYSDATE() AS result"
    ],
    "TIME" => [
        "Extracts time part",
        "SELECT TIME(created_at) AS result FROM data"
    ],
    "TIME_FORMAT" => [
        "Formats time",
        "SELECT TIME_FORMAT(created_at, '%H:%i') AS result FROM data"
    ],
    "TIME_TO_SEC" => [
        "Converts time to seconds",
        "SELECT TIME_TO_SEC('01:01:01') AS result"
    ],
    "TIMEDIFF" => [
        "Returns time difference",
        "SELECT TIMEDIFF('10:00:00', '08:30:00') AS result"
    ],
    "TIMESTAMP" => [
        "Creates timestamp",
        "SELECT TIMESTAMP('2024-01-01', '10:00:00') AS result"
    ],
    "TO_DAYS" => [
        "Returns days since year 0",
        "SELECT TO_DAYS('2024-01-01') AS result"
    ],
    "WEEK" => [
        "Returns week number",
        "SELECT WEEK(created_at) AS result FROM data"
    ],
    "WEEKDAY" => [
        "Returns weekday number",
        "SELECT WEEKDAY(created_at) AS result FROM data"
    ],
    "WEEKOFYEAR" => [
        "Returns week of year",
        "SELECT WEEKOFYEAR(created_at) AS result FROM data"
    ],
    "YEAR" => [
        "Returns year",
        "SELECT YEAR(created_at) AS result FROM data"
    ],
    "YEARWEEK" => [
        "Returns year and week",
        "SELECT YEARWEEK(created_at) AS result FROM data"
    ]
];
