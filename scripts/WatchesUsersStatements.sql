-- Active: 1769447622519@@127.0.0.1@3306@watches

--Faizan Shaikh, 2/13/26, IT202-002, Login-Logout assignment, fms39@njit.edu

SHOW DATABASES;

CREATE DATABASE watches;

SHOW CREATE DATABASE watches;

CREATE USER 'faizan_shaikh_fms390' @'localhost' IDENTIFIED BY 'audemars_piguet';
--DROP DATA BASE guitar;  used for the dropping the database

GRANT
SELECT,
UPDATE,
INSERT
,
    DELETE ON watches.* to 'faizan_shaikh_fms390' @'localhost';

SHOW GRANTS FOR 'faizan_shaikh_fms390' @'localhost';

USE watches;

CREATE TABLE watches_users (
    watches_user_id INT NOT NULL AUTO_INCREMENT,
    email_address VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    pronouns VARCHAR(60) NOT NULL,
    first_name VARCHAR(60) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    phone_number VARCHAR(60) NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (watches_user_id)
);

INSERT INTO
    watches_users (
        email_address,
        password,
        pronouns,
        first_name,
        last_name,
        phone_number
    )
VALUES (
        'taylor@guitars.com',
        SHA2('myL0ngP@ssword', 256),
        'She/Her',
        'Taylor',
        'swift',
        '555-1234-029'
    );

INSERT INTO
    watches_users (
        email_address,
        password,
        pronouns,
        first_name,
        last_name,
        phone_number
    )
VALUES (
        'bradpitt@hollywood.com',
        SHA2('mySh0rtP@ssword', 256),
        'He/Him',
        'Brad',
        'Pitt',
        '444-4321-920'
    );

INSERT INTO
    watches_users (
        email_address,
        password,
        pronouns,
        first_name,
        last_name,
        phone_number
    )
VALUES (
        'shahruk@bollywood.com',
        SHA2('IamSh0rtP@ssword', 256),
        'He/Him',
        'Shahruk',
        'Khan',
        '129-7876-123'
    );

SELECT * FROM watches_users;