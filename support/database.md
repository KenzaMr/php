<!-- CREER une base de données library_db -->
 <!-- CREER une table book -->
  <!-- id,nom,description, annee_parution,id_auteur (clé étranger) -->
   CREATE TABLE book (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255),
      description TEXT,
      annee_parution YEAR,
      id_auteur INT ,
      FOREIGN KEY (id_auteur) REFERENCES author(id)
   );
  <!-- CREER UNE TABLE author -->
   <!-- id,nom,prenom, pays_origine,date_naissance -->
   CREATE TABLE author (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255),
      prenom VARCHAR(255),
      pays_orgine VARCHAR(255),
      date_naissance DATE
      );
<!-- INSERER DES DONNEES -->
 <!-- 10 livres et 4 auteurs -->

INSERT INTO book (nom, description, annee_parution,id_auteur) VALUES
('1984', 'Société dystopique sous surveillance totale.', 1949,2),
('Le Petit Prince', 'Conte poétique sur l_amitié et l_amour.', 1943,1),
('L_Étranger', 'Meursault tue un homme sans raison apparente.', 1942,1),
('Pride and Prejudice', 'Elizabeth Bennet et les pressions sociales.', 1813,3),
('Moby Dick', 'Capitaine Achab chasse une baleine blanche.', 1851,4),
('Crime et Châtiment', 'Étudiant pauvre commet un meurtre moral.', 1866,2),
('Les Misérables', 'Jean Valjean cherche la rédemption en France.', 1862,2),
('To Kill a Mockingbird', 'Avocat défend un homme noir accusé à tort.', 1960,1),
('L_Alchimiste', 'Jeune berger en quête de sa légende personnelle.', 1988,1),
('Brave New World', 'Société futuriste contrôlée et conformiste.', 1932,3);

INSERT INTO author (nom, prenom, pays_orgine, date_naissance) VALUES
('Orwell', 'George', 'Royaume-Uni', '1903-06-25'),
('Saint-Exupéry', 'Antoine', 'France', '1900-06-29'),
('Camus', 'Albert', 'Algérie', '1913-11-07'),
('Austen', 'Jane', 'Royaume-Uni', '1775-12-16');

<!-- AFFICHER LES LIVRES AVEC LEURS AUTEURS -->
 SELECT * from book;
 select * from book join author on book.id_auteur=author.id;
 select book.nom,author.nom from book join author on book.id_auteur=author.id;


<!-- AFFICHER LE NOMBRE DE LIVRES ECRIT PAR CHAQUE AUTEUR -->
 select count(*) from book group by id_auteur;
select count(*),author.nom from book join author on book.id_auteur=author.id group by author.nom;  

