## risposte esercitazione 02/07/21

SELECT * FROM `students` WHERE `date_of_birth` BETWEEN '1990-01-01' AND '1990-12-31'

SELECT * FROM `courses` WHERE `cfu`> 10

SELECT * FROM `students` WHERE `date_of_birth` < "1990-07-02" ORDER BY `students`.`date_of_birth` DESC

SELECT * FROM `courses` WHERE `period` = "I semestre"

SELECT * FROM `exams` WHERE `hour`> "14:00:00" AND `date` = "2020-06-20"

SELECT * FROM `degrees` WHERE `level` = "magistrale"

SELECT * FROM `departments`

SELECT * FROM `teachers` WHERE `phone` IS NOT NULL

## risposte esercitazione 05/07/21

Quanti iscritti ci sono stati ogni anno?
SELECT COUNT(id), YEAR(enrolment_date) 
FROM students 
GROUP BY enrolment_date

Quanti insegnanti hanno l'ufficio nello stesso edificio?
SELECT COUNT(id), office_address 
FROM teachers 
GROUP BY office_address

Media voto per ogni esame
SELECT AVG(vote) AS "media_voti", exam_id
FROM exam_student
GROUP BY exam_id

Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT COUNT(id) AS numero_corsi,  department_id 
FROM degrees 
GROUP BY department_id

--

Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia
SELECT *
FROM students
JOIN degrees
ON degrees.department_id = students.degree_id
WHERE degrees.department_id = 9
OR degrees.department_id = 10
OR degrees.department_id = 11


Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze

????


Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)
SELECT * 
FROM `course_teacher` 
WHERE course_teacher.teacher_id = 44

Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome

SELECT students.surname, students.name, degrees.name as degree_name, degrees.level, departments.name as departments_name
FROM students
JOIN degrees
ON students.degree_id = degrees.id
JOIN departments
ON degrees.department_id = departments.id

Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti
SELECT degrees.name as degree_name, courses.name as course_name, course_teacher.teacher_id
FROM degrees
JOIN courses
ON courses.degree_id = degrees.id  
JOIN course_teacher
ON courses.id = course_teacher.course_id
ORDER BY `degrees`.`department_id` ASC, `courses`.`degree_id` ASC

Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica (54)
SELECT departments.name as department_name, departments.address as department_address, teachers.name as teacher_name, teachers.surname as teacher_surname
FROM departments
JOIN degrees ON degrees.department.id = department.id
JOIN courses ON degrees.id = courses.degree_id
JOIN course_teacher ON course.id = course_teacger.course_id
JOIN teachers ON course_teacher.teacher_id = teachers.id
WHERE departments.name = `Dipartimento di Matematica`

BONUS: Selezionare per ogni studente quanti tentativi d’esame ha sostenuto per superare ciascuno dei suoi esami
