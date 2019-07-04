CREATE TABLE Movies
(
    film_id SERIAL NOT NULL PRIMARY KEY,
    title VARCHAR(50),
    genre VARCHAR(50),
    rating INT,
    release_date VARCHAR(50)
);

CREATE TABLE Phones
(
    phone_id  SERIAL NOT NULL PRIMARY KEY,
    make VARCHAR(30),
    model VARCHAR(30),
    year INT
);

CREATE TABLE Laptops
(
    computer_id  SERIAL NOT NULL PRIMARY KEY,
    make VARCHAR(30),
    model VARCHAR(30),
    year INT,
    condition VARCHAR(20)
);



-- Movie Rows
INSERT INTO Movies(film_id, title, genre, rating, release_date)
    VALUES(1, 'Die_Hard', 'Action', 5, 'Jul 15, 1988');

INSERT INTO Movies(film_id, title, genre, rating, release_date)
    VALUES(2, 'Aladdin', 'Disney', 5, 'May 24, 2019');

INSERT INTO Movies(film_id, title, genre, rating, release_date)
    VALUES(3, 'Cinderella', 'Disney', 5, 'Mar 6, 2015');

INSERT INTO Movies(film_id, title, genre, rating, release_date)
    VALUES(4, 'Maleficent', 'Disney', 5, 'May, 28, 2014');


--Phone Rows
INSERT INTO Phones(phone_id, make, model, year)
    VALUES(1, 'Google', 'Pixel 1', 2016);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(2, 'Google', 'Pixel 2', 2017);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(3, 'Google', 'Pixel 3', 2018);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(4, 'Apple', 'iPhone 8', 2017);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(5, 'Apple', 'iPhone 8 Plus', 2017);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(6, 'Apple', 'iPhone X', 2017);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(7, 'Apple', 'iPhone XR', 2018);

INSERT INTO Phones(phone_id, make, model, year)
    VALUES(8, 'Apple', 'iPhone XS', 2018);


--Laptop Rows
INSERT INTO Laptops(computer_id, make, model, year, condition)
    VALUES(1, 'Apple', 'Macbook Pro 15-Inch', 2018, 'New');

INSERT INTO Laptops(computer_id, make, model, year, condition)
    VALUES(2, 'Apple', 'Macbook Pro 13-Inch', 2018, 'New');

INSERT INTO Laptops(computer_id, make, model, year, condition)
    VALUES(3, 'Apple', 'Macbook 13-Inch', 2018, 'New');

INSERT INTO Laptops(computer_id, make, model, year, condition)
    VALUES(4, 'Apple', 'Macbook Air 13-Inch', 2018, 'New');

INSERT INTO Laptops(computer_id, make, model, year, condition)
    VALUES(5, 'Dell', 'Insprion 15 3000', 2018, 'New');

INSERT INTO Laptops(computer_id, make, model, year, condition)
    VALUES(6, 'Samsung', 'Notebook 9', 2019, 'New');