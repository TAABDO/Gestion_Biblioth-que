CREATE DATABASE gestbibo;


-- User Table
CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL ,
    fullname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL

);

CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE
);

insert into Role (id,name)
values (1,'admin');
insert into Role (id,name)
values (2,'utilisateur');


CREATE TABLE Book (

        id INT PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(50) NOT NULL,
        author VARCHAR(50) NOT NULL,
        genre VARCHAR(50) NOT NULL,
        description VARCHAR(50) NOT NULL,
        publication_year date NOT NULL,
        total_copies INT NOT NULL,
        available_copies INT NOT NULL

);
insert into Book (title,author,genre,description,publication_year,total_copies,available_copies)
values ('home','taouil','comique','hhhhh','2023/12/18',1000,100);

CREATE TABLE Reservation(
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(50) NOT NULL,
    reservation_date date NOT NULL,
    return_date date NOT NULL,
    is_retuened INT NOT NULL,
    PRIMARY KEY (book_id, users_id),
    FOREIGN KEY (users_id) REFERENCES Users(id) ON DELETE CASCADE,
    FOREIGN KEY (book_id) REFERENCES Book(id) ON DELETE CASCADE

);


CREATE TABLE Users_Role (
    users_id INT,
    role_id INT,
    PRIMARY KEY (users_id, role_id),
    FOREIGN KEY (users_id) REFERENCES Users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES Role(id) ON DELETE CASCADE
);


insert into Users (id,username,fullname,email,password,phone)
values (1,'abdo','taouil','abdo@gmail.com','123','06234567')
