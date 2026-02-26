-- Active: 1769447622519@@127.0.0.1@3306@watches

--Categories Table
CREATE TABLE watches_types (
    watches_type_id INT NOT NULL,
    watches_type_code VARCHAR(255) NOT NULL UNIQUE,
    watches_type_name VARCHAR(255) NOT NULL,
    watches_ShelfNumber INT NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (watches_type_id)
);

SELECT * FROM watches_types;