CREATE DATABASE gerenciamentolaboratorios;

USE gerenciamentolaboratorios;

CREATE TABLE labs ( 
cd_labs INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nm_labs VARCHAR(100) NOT NULL,
id_labs VARCHAR(70) NOT NULL UNIQUE,
id_professor VARCHAR(80) NOT NULL,
nm_professor VARCHAR(100) NOT NULL,
status_lab ENUM('liberado','reservado') NOT NULL DEFAULT 'liberado'
);

CREATE TABLE professores (
cd_professor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nm_professor VARCHAR(100) NOT NULL,
id_professor VARCHAR(70) NOT NULL UNIQUE,
id_email VARCHAR(80) NOT NULL,
ds_senha_professor VARCHAR(200) NOT NULL
);

CREATE TABLE turma (
cd_turma INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nm_turma VARCHAR(100) NOT NULL,
id_turma VARCHAR(50) NOT NULL,
id_professor INT NOT NULL,

FOREIGN KEY (id_professor) REFERENCES professores(cd_professor)
);

CREATE TABLE reserva (
cd_reserva INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
data_reserva DATE NOT NULL,
hora_inicio TIME NOT NULL,
hora_fim TIME NOT NULL,
id_labs INT NOT NULL,
id_turma INT NOT NULL,
id_professor INT NOT NULL,

FOREIGN KEY (id_labs) REFERENCES labs(cd_labs),
FOREIGN KEY (id_turma) REFERENCES turma(cd_turma),
FOREIGN KEY (id_professor) REFERENCES professores(cd_professor)
);


INSERT INTO professores
(nm_professor, id_professor, id_email, ds_senha_professor)
VALUES
('Matheus Calixto', 'profMatheus', 'Matheus.Calixto@prof.cps.sp.gov.br', '123456'); 

INSERT INTO labs
(nm_labs, id_labs, id_aluno, nm_aluno, status_lab)
VALUES
('Laboratório 1', 'LAB1', 'AlunoThiago', 'Thiago Camilo', 'liberado');

INSERT INTO turma
(nm_turma, id_turma, id_professor)
VALUES
('2MDS3', 'DS', 1);

INSERT INTO reserva
(data_reserva, hora_inicio, hora_fim, id_labs, id_turma, id_professor)
VALUES
('2026-09-25', '21:10:00', '22:45:00', 1, 1, 1);
