CREATE SCHEMA TASI1;

CREATE TABLE TASI1.user (
	id_user SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL,
	username VARCHAR NOT NULL,
	password VARCHAR NOT NULL,
	email VARCHAR NOT NULL,
	is_admin BOOLEAN NOT NULL DEFAULT FALSE,
	is_support BOOLEAN NOT NULL,
	is_teacher BOOLEAN NOT NULL,
	is_vm_user BOOLEAN NOT NULL,
	active BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE TASI1.semester ( -- Ciclo
	id_semester SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL,
	enrollment_start DATE NOT NULL, -- Inicio de matrícula
	enrollment_end DATE NOT NULL, -- Fin de matrícula
	semester_start DATE NOT NULL, -- Inicio de clases
	semester_end DATE NOT NULL -- Fin de ciclo
);

CREATE TABLE TASI1.course (
	id_course SERIAL PRIMARY KEY,
	code VARCHAR NOT NULL,
	name VARCHAR NOT NULL
);

CREATE TABLE TASI1.course_semester (
	id_semester INTEGER NOT NULL REFERENCES TASI1.semester,
	id_course INTEGER NOT NULL REFERENCES TASI1.course
);

CREATE TABLE TASI1.teacher_course_semester (
	id_semester INTEGER NOT NULL REFERENCES TASI1.semester,
	id_course INTEGER NOT NULL REFERENCES TASI1.course,
	id_teacher INTEGER NOT NULL REFERENCES TASI1.user
);

CREATE TABLE TASI1.operating_system (
	id_os SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL,
	type INTEGER NOT NULL,	-- 1. Uso en despliegue de laboratorios
							-- 2. Uso en máquinas virtuales de proyectos e investigación
							-- 3. Ambos usos
	observations VARCHAR
);

CREATE TABLE TASI1.software (
	id_software SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL,
	version VARCHAR NOT NULL,
	id_os INTEGER NOT NULL REFERENCES TASI1.operating_system
);

CREATE TABLE TASI1.software_course_semester (
	id_semester INTEGER NOT NULL REFERENCES TASI1.semester,
	id_course INTEGER NOT NULL REFERENCES TASI1.course,
	id_software INTEGER NOT NULL REFERENCES TASI1.software
);

CREATE TABLE TASI1.software_request (
	id_request SERIAL PRIMARY KEY,
	id_semester INTEGER NOT NULL REFERENCES TASI1.semester,
	id_course INTEGER NOT NULL REFERENCES TASI1.course,
	id_teacher INTEGER NOT NULL REFERENCES TASI1.user,
	software VARCHAR NOT NULL,
	version VARCHAR, -- DEFAULT NULL
	id_os INTEGER NOT NULL REFERENCES TASI1.operating_system,
	observations_teacher VARCHAR, -- DEFAULT NULL
	state BOOLEAN, -- true: aprobado, false: rechazado, null: pendiente
	observations_support VARCHAR -- DEFAULT NULL
);

CREATE TABLE TASI1.installation (
	id_installation SERIAL PRIMARY KEY,
	id_request INTEGER NOT NULL REFERENCES TASI1.software_request,
	installation_date DATE NOT NULL,
	verification_date DATE NOT NULL,
	installed BOOLEAN, -- DEFAULT NULL
	working BOOLEAN -- DEFAULT NULL
);
