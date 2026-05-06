CREATE TABLE exams (
                       id INTEGER PRIMARY KEY AUTOINCREMENT,
                       course_id INTEGER,
                       exam_type TEXT,
                       grade REAL,
                       FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

INSERT INTO exams (course_id, exam_type, grade)
VALUES (1, 'presentation', 9.1),
       (2, 'written_test', 7.7),
       (3, 'written_test', 9.6),
       (4, 'presentation', 6.1),
       (4, 'written_test', 9.8),
       (5, 'written_test', NULL),
       (5, 'presentation', NULL),
       (5, 'portfolio',    NULL),
       (6, 'assignment',   NULL),
       (6, 'assignment',   NULL),
       (7, 'presentation', NULL),
       (7, 'portfolio',    NULL),
       (7, 'portfolio',    NULL),
       (8, 'interview',    NULL);