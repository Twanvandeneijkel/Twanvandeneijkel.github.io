CREATE TABLE courses (
                         id INTEGER PRIMARY KEY AUTOINCREMENT,
                         name TEXT NOT NULL,
                         ec_passed BOOLEAN
);

INSERT INTO courses (name, ec_passed)
VALUES ('PCO', 1),
        ('CSB', 1),
       ('PBA', 1),
       ('OOP', 1);