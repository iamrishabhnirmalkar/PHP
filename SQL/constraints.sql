-- NOT NULL  (use when the dont want the column will be emty)
-- UNIQUE (use when you want to use the unique exaple in id and phone number)
-- DEFAULT (use for default data)
-- CHECK (use to chek weather this codition is true)


CREATE TABLE table_name (
    id INT NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL CHECK (age>=18),
    gender VARCHAR(10) NOT NULL,
phone VARCHAR(10) NOT NULL UNIQUE,
city VARCHAR(10) not NULL DEFAULT'Raipur',
);