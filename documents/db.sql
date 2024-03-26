CREATE TABLE category
(
  id_category INTEGER     NOT NULL AUTO_INCREMENT,
  name        VARCHAR(32) NOT NULL,
  PRIMARY KEY (id_category)
);

ALTER TABLE category
  ADD CONSTRAINT UQ_id_category UNIQUE (id_category);

CREATE TABLE coach
(
  id_coach  INTEGER     NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(32) NOT NULL,
  lastname  VARCHAR(32) NOT NULL,
  PRIMARY KEY (id_coach)
);

ALTER TABLE coach
  ADD CONSTRAINT UQ_id_coach UNIQUE (id_coach);

CREATE TABLE course
(
  id_course      INTEGER      NOT NULL AUTO_INCREMENT,
  title          VARCHAR(100) NOT NULL,
  date           DATETIME     NOT NULL,
  price          INTEGER      NOT NULL,
  id_reservation INTEGER      NOT NULL,
  PRIMARY KEY (id_course)
);

ALTER TABLE course
  ADD CONSTRAINT UQ_id_course UNIQUE (id_course);

CREATE TABLE courseCategory
(
  id_courseCategory INTEGER NOT NULL AUTO_INCREMENT,
  id_course         INTEGER NOT NULL,
  id_category       INTEGER NOT NULL,
  PRIMARY KEY (id_courseCategory)
);

ALTER TABLE courseCategory
  ADD CONSTRAINT UQ_id_courseCategory UNIQUE (id_courseCategory);

CREATE TABLE reservation
(
  id_reservation INTEGER  NOT NULL AUTO_INCREMENT,
  date           DATETIME NOT NULL,
  id_user        INTEGER  NOT NULL,
  id_coach       INTEGER  NOT NULL,
  PRIMARY KEY (id_reservation)
);

ALTER TABLE reservation
  ADD CONSTRAINT UQ_id_reservation UNIQUE (id_reservation);

CREATE TABLE users
(
  id_user   INTEGER      NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(32)  NOT NULL,
  lastname  VARCHAR(32)  NOT NULL,
  email     VARCHAR(128) NOT NULL,
  password  VARCHAR(32)  NOT NULL,
  PRIMARY KEY (id_user)
);

ALTER TABLE users
  ADD CONSTRAINT UQ_id_user UNIQUE (id_user);

ALTER TABLE users
  ADD CONSTRAINT UQ_email UNIQUE (email);

ALTER TABLE reservation
  ADD CONSTRAINT FK_users_TO_reservation
    FOREIGN KEY (id_user)
    REFERENCES users (id_user);

ALTER TABLE reservation
  ADD CONSTRAINT FK_coach_TO_reservation
    FOREIGN KEY (id_coach)
    REFERENCES coach (id_coach);

ALTER TABLE courseCategory
  ADD CONSTRAINT FK_course_TO_courseCategory
    FOREIGN KEY (id_course)
    REFERENCES course (id_course);

ALTER TABLE courseCategory
  ADD CONSTRAINT FK_category_TO_courseCategory
    FOREIGN KEY (id_category)
    REFERENCES category (id_category);

ALTER TABLE course
  ADD CONSTRAINT FK_reservation_TO_course
    FOREIGN KEY (id_reservation)
    REFERENCES reservation (id_reservation);