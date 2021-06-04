/* Entities */

CREATE TABLE Registered
(
    id_registered   BIGINT AU_TOINCREMENT ,
    pseudo          varchar(20),
    name_registered            varchar(20),
    first_name_registered      varchar(20),
    age             INT,
    gender          varchar(10),
    mail            varchar(55),
    description     varchar(255),
    profile_picture varchar(255),
    banner_picture  varchar(255),
    spotify         varchar(255),
    apple_music     varchar(255),
    deezer          varchar(255),
    password        varchar(15),
    PRIMARY KEY(id_registered)
);

CREATE TABLE Publication
(
    id_publication   BIGINT AUT_OINCREMENT ,
    image            varchar(255),
    video            varchar(255),
    description      varchar(255),
    publication_date date,
    PRIMARY KEY(id_publication)

);

CREATE TABLE Role
(
    id_role BIGINT AUTO_INCREMENT,
    name_role varchar(55),
    number_role INT,
    PRIMARY KEY(id_role)

);



CREATE TABLE Localisation
(
    id_localisation BIGINT AUTO_INCREMENT,
    address         varchar(255),
    town            varchar(55),
    region          varchar(255),
    postal_code     INT,
    PRIMARY KEY(id_localisation)

);

CREATE TABLE Music_style
(
    id_music_style   BIGINT AUTO_INCREMENT,
    name_music_style varchar(55),
    PRIMARY KEY(id_music_style)

);

CREATE TABLE Message
(
    id_message   BIGINT AUTO_INCREMENT,
    sender       varchar(255),
    date_message date,
    hour_message time,
    text_message varchar(255),
    PRIMARY KEY(id_message)

);

CREATE TABLE Collaboration
(
    id_collaboration BIGINT AUTO_INCREMENT,
    number_associate INT,
    PRIMARY KEY(id_collaboration)

);

CREATE TABLE Instrument
(
    id_instrument       BIGINT AUTO_INCREMENT,
    Name_instrument     varchar(55),
    PRIMARY KEY(id_instrument)

);

/* Associations */


CREATE TABLE Registered_Publication
(
    id_registered BIGINT,
    id_publication BIGINT,
    FOREIGN KEY (id_publication) REFERENCES Publication(id_publication),
    FOREIGN KEY (id_registered) REFERENCES Registered(id_registered),
    PRIMARY KEY(id_registered,id_publication)

);

CREATE TABLE Registered_Role_Have
(
    id_registered BIGINT,
    id_role BIGINT,
    FOREIGN KEY (id_role) REFERENCES Role(id_role),
    FOREIGN KEY (id_registered) REFERENCES Registered(id_registered),
    PRIMARY KEY(id_registered,id_role)

);

CREATE TABLE Registered_Music_Style_Like(
                                            id_registered BIGINT,
                                            id_music_style BIGINT,
                                            FOREIGN KEY (id_music_style) REFERENCES Music_style(id_music_style),
                                            FOREIGN KEY (id_registered) REFERENCES Registered(id_registered),
                                            PRIMARY KEY(id_registered,id_music_style)

);

CREATE TABLE Registered_Message_Send(
                                        id_registered BIGINT,
                                        id_message BIGINT,
                                        FOREIGN KEY (id_message) REFERENCES Message(id_message),
                                        FOREIGN KEY (id_registered) REFERENCES Registered(id_registered),
                                        PRIMARY KEY(id_registered,id_message)

);

CREATE TABLE Registered_Collaboration_Have_Done(
                                                   id_registered BIGINT,
                                                   id_collaboration BIGINT,
                                                   FOREIGN KEY (id_collaboration) REFERENCES Collaboration(id_collaboration),
                                                   FOREIGN KEY (id_registered) REFERENCES Registered(id_registered),
                                                   PRIMARY KEY(id_registered,id_collaboration)

);

CREATE TABLE Registered_Instrument_Play(
                                           id_registered BIGINT,
                                           id_instrument BIGINT,
                                           FOREIGN KEY (id_instrument) REFERENCES Instrument(id_instrument),
                                           FOREIGN KEY (id_registered) REFERENCES Registered(id_registered),
                                           PRIMARY KEY(id_registered,id_instrument)

);

