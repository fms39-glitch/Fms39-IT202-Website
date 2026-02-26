-- Active: 1769447622519@@127.0.0.1@3306@watches

-- Items table
CREATE TABLE watches (
    watches_id INT NOT NULL,
    watches_code VARCHAR(10) NOT NULL UNIQUE,
    watches_name VARCHAR(255) NOT NULL,
    watches_description TEXT NOT NULL,
    watchesMaterial VARCHAR(50) NOT NULL,
    watchesWaterResistance VARCHAR(60) NOT NULL,
    watches_type_id INT DEFAULT 0,
    watches_buy_price DECIMAL(10, 2) NOT NULL,
    watches_sell_price DECIMAL(10, 2) NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (watches_id),
    FOREIGN KEY (watches_type_id) REFERENCES watches_types (watches_type_id) ON DELETE SET NULL ON UPDATE CASCADE
);

SELECT * FROM watches;