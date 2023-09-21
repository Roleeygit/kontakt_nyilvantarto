-- Az idegen kulcs miatt ezt kell hamarabb létrehozni
CREATE TABLE companies 
(
    id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    address VARCHAR(255)
);

CREATE TABLE customers 
(
    id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    phone VARCHAR(15),
    address VARCHAR(255),
    personal_email VARCHAR(255),
    business_email VARCHAR(255),
    company_id BIGINT(20),
    FOREIGN KEY (company_id) REFERENCES companies(id)
);

-- Teszt adatok feltöltése
INSERT INTO companies (name, address)
VALUES
    ('Példa Gyár Kft.', '1119 Budapest Fő utca 12'),
    ('Szolgáltató Zrt.', '1245 Pécs Domb köz 23'),
    ('Globális Szolgáltatások Kft.', '1789 Szeged Tölgy sor 10');

INSERT INTO customers (name, phone, address, personal_email, business_email, company_id)
VALUES
    ('Kovács János ', '06 30 123-4567', '1234 Isaszeg Első út 12', 'kovacs.janos@gmail.com', 'janos@peldamanufaktura.hu', 1),
    ('Nagy Katalin ', '06 20 987-6543', '1245 Pécs Második út', 'nagy.katalin@gmail.com', 'katalin@szolgaltatozrt.hu', 2),
    ('Tóth Gábor ', '06 70 789-0123', '1789 Szeged Harmadik út', 'toth.gabor@gmail.com', 'gabor@globalszolgaltatasok.hu', 3);
