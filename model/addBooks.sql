INSERT INTO book (titre, auteur, year, page, genre_id, site_id)
VALUES  ('Le fléau', 'Stephen King', 1998, 650, (SELECT id FROM genre WHERE name="Horreur"), (SELECT id FROM site WHERE city="Roubaix")),
        ('L''Histoire du conflit politique', 'Julia Kage', 2023, 900, (SELECT id FROM genre WHERE name="Politique"), (SELECT id FROM site WHERE city="Lille")),
        ('Germinal', 'Emile Zola', 1876, 590, (SELECT id FROM genre WHERE name="Roman"), (SELECT id FROM site WHERE city="Roubaix")),
        ('L''équipe', 'Collectif', 2025, 65, (SELECT id FROM genre WHERE name="Magazine"), (SELECT id FROM site WHERE city="Armentières")),
        ('Le dalhia noir', 'James Ellroy', 1993, 465, (SELECT id FROM genre WHERE name="Policier"), (SELECT id FROM site WHERE city="Roubaix")),
        ('La révolution Française', 'Danton', 1792, 265, (SELECT id FROM genre WHERE name="Histoire"), (SELECT id FROM site WHERE city="St Omer")),
        ('ça', 'Stephen King', 1987, 910, (SELECT id FROM genre WHERE name="Horreur"), (SELECT id FROM site WHERE city="Lille")),
        ('Le Seigneur des anneaux T1', 'JRR Tolkien', 1962, 530, (SELECT id FROM genre WHERE name="Fantasy"), (SELECT id FROM site WHERE city="Roubaix")),
        ('Le traité des 5 roues', 'Miyamoto Musashi', 1902, 120, (SELECT id FROM genre WHERE name="Biographie"), (SELECT id FROM site WHERE city="Armentières")),
        ('Quartier lointain', 'Jiro Taniguchi', 2007, 150, (SELECT id FROM genre WHERE name="Manga"), (SELECT id FROM site WHERE city="Lille")),
        ('The nice house by the lake', 'James TYNION ', 2023, 130, (SELECT id FROM genre WHERE name="BD"), (SELECT id FROM site WHERE city="Roubaix")),
        ('Pays de fantomes', 'Margaret Killjoy', 2017, 250, (SELECT id FROM genre WHERE name="Fantasy"), (SELECT id FROM site WHERE city="Armentières")),
        ('L''héritage', 'Pierre Bourdieu', 1996, 360, (SELECT id FROM genre WHERE name="Scolaire"), (SELECT id FROM site WHERE city="Roubaix")),
        ('Diaspora', 'Greg Egan', 1992, 420, (SELECT id FROM genre WHERE name="Science Fiction"), (SELECT id FROM site WHERE city="Roubaix")),
        ('Un coeur à prendre', 'Meli Mélodia', 1935, 310, (SELECT id FROM genre WHERE name="Romance"), (SELECT id FROM site WHERE city="Roubaix")),
        ('Tendre jeudi', 'Steinbeck', 1941, 220, (SELECT id FROM genre WHERE name="Romance"), (SELECT id FROM site WHERE city="Roubaix")),
        ('Substance Mort', 'Phillip K. Dick', 1976, 380, (SELECT id FROM genre WHERE name="Science Fiction"), (SELECT id FROM site WHERE city="Roubaix"));
        