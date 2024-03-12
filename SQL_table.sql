CREATE TABLE Duyurular (
    id INT AUTO_INCREMENT,
    duyuru_basligi VARCHAR(255),
    duyuru_icerigi TEXT,
    gorunurluk_durumu BOOLEAN,
    PRIMARY KEY (id)
);

CREATE TABLE Pdflink (
    id INT AUTO_INCREMENT,
    pdf_adi VARCHAR(255),
    pdf_linki TEXT,
    gorunurluk_durumu BOOLEAN,
    PRIMARY KEY (id)
);




