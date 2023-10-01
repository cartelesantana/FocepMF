
CREATE TABLE administrateurs (
  matriculeAdm varchar(200) NOT NULL,
  nomAdm varchar(200) DEFAULT NULL,
  prenomAdm varchar(200) DEFAULT NULL,
  mailAdm varchar(200) DEFAULT NULL,
  telAdm int(11) DEFAULT NULL,
  pwd varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO administrateurs (matriculeAdm, nomAdm, prenomAdm, mailAdm, telAdm, pwd) VALUES
('YKAMdKY3WI', 'Focep', 'microfinance', 'Focep@gmail.com', NULL, '$2y$10$8EpIPqhLT0XkQu0TIB1DteooJsf0rzOMyQcksw/WAZnXBM4K1DmN6');



CREATE TABLE agent (
  matriculeAgt varchar(200) NOT NULL,
  matriculeAdm varchar(200) NOT NULL,
  nomAgt varchar(200) DEFAULT NULL,
  prenomAgt varchar(200) DEFAULT NULL,
  adresse varchar(200) DEFAULT NULL,
  mailAgt varchar(200) DEFAULT NULL,
  telAgt int(11) DEFAULT NULL,
  pwd varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table 'agent'
--

INSERT INTO agent VALUES('0D0445', 'YKAMdKY3WI', 'cartele', 'Imelda', 'Rd1', 'mandeimelda13@gmail.com', 123143, '$2y$10$sfGlpEdA92lWRCkpo4ZemetQDtf5eI854xoJegoDcNwOcCCCQ4gH.');



CREATE TABLE collecte (
  idCollecte varchar(200) NOT NULL,
  matriculeAgt varchar(200) NOT NULL,
  idMembre varchar(200) NOT NULL,
  dateCollecte datetime DEFAULT NULL,
  montant int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE compte (
  numCompte varchar(200) NOT NULL,
  idMembre varchar(200) NOT NULL,
  dateOuverture datetime DEFAULT NULL,
  solde int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO compte (numCompte, idMembre, dateOuverture, solde) VALUES
('focep650afded5a892', '540JD6', '2023-09-20 00:00:00', 0),
('focep650b008f7937c', '3IIJ20', '2023-09-20 00:00:00', 0);


CREATE TABLE emprunt (
  idEmprunt varchar(200) NOT NULL,
  matricule varchar(200) DEFAULT NULL,
  idMembre varchar(200) NOT NULL,
  dateEmprunt datetime DEFAULT NULL,
  dateLimite datetime DEFAULT NULL,
  interet int(11) DEFAULT NULL,
  statut char(10) DEFAULT NULL,
  montant int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO emprunt (idEmprunt, matricule, idMembre, dateEmprunt, dateLimite, interet, statut, montant) VALUES
('absc1', 'YKAMdKY3WI', '3IIJ20', '2023-03-02 00:00:00', '2023-04-02 00:00:00', 0, 'payer', -120000);



CREATE TABLE membre (
  idMembre varchar(200) NOT NULL,
  nomMbre varchar(200) DEFAULT NULL,
  prenomMbre varchar(200) DEFAULT NULL,
  adresseMbre varchar(200) DEFAULT NULL,
  localisation varchar(200) DEFAULT NULL,
  telephoneMbre int(11) DEFAULT NULL,
  numCni int(11) DEFAULT NULL,
  numCompte varchar(20) DEFAULT NULL,
  joinDate date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO membre (idMembre, nomMbre, prenomMbre, adresseMbre, localisation, telephoneMbre, numCni, numCompte, joinDate) VALUES
('3IIJ20', 'Darlin', 'Tsida', 'Yde', 'IAI Cameroun', 699497508, 2147483647, 'focep650b008f7937c', '2023-09-20'),
('540JD6', 'lol', 'Tsida', 'Yde', 'Marché', 699497508, 2147483647, 'focep650afded5a892', '2023-09-20');

CREATE TABLE paiement (
  idPaiement varchar(200) NOT NULL,
  matricule varchar(200) NOT NULL,
  idMembre varchar(200) NOT NULL,
  montant int(11) DEFAULT NULL,
  datePaiement datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO paiement (idPaiement, matricule, idMembre, montant, datePaiement) VALUES
('Paiement650c51be85860', 'YKAMdKY3WI', '540JD6', 10000, '2023-09-21 00:00:00');


ALTER TABLE administrateurs
  ADD PRIMARY KEY (matriculeAdm);

ALTER TABLE agent
  ADD PRIMARY KEY (matriculeAgt),
  ADD KEY FK_association7 (matriculeAdm);

ALTER TABLE collecte
  ADD PRIMARY KEY (idCollecte),
  ADD KEY FK_collectez (matriculeAgt),
  ADD KEY FK_membre (idMembre);

ALTER TABLE compte
  ADD PRIMARY KEY (numCompte
  ADD KEY FK_association4(idMembre)

ALTER TABLE emprunt
  ADD PRIMARY KEY (idEmprunt),
  ADD KEY FK_membre2 (idMembre);

ALTER TABLE membre
  ADD PRIMARY KEY (idMembre);

ALTER TABLE paiement
  ADD PRIMARY KEY (idPaiement),
  ADD KEY FK_membre3 (idMembre);

ALTER TABLE agent
  ADD CONSTRAINT FK_association7 FOREIGN KEY (matriculeAdm) REFERENCES administrateurs (matriculeAdm);

ALTER TABLE collecte
  ADD CONSTRAINT FK_collectez FOREIGN KEY (matriculeAgt) REFERENCES agent (matriculeAgt),
  ADD CONSTRAINT FK_membre FOREIGN KEY (idMembre) REFERENCES membre (idMembre);

ALTER TABLE compte
  ADD CONSTRAINT FK_association4 FOREIGN KEY (idMembre) REFERENCES membre (idMembre);

ALTER TABLE emprunt
  ADD CONSTRAINT FK_membre2 FOREIGN KEY (idMembre) REFERENCES membre (idMembre);

ALTER TABLE paiement
  ADD CONSTRAINT FK_membre3 FOREIGN KEY (idMembre) REFERENCES membre (idMembre);
COMMIT;

