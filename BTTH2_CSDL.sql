CREATE DATABASE tlunews

CREATE TABLE users(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255),
	PASSWORD VARCHAR(255),
	ROLE INT NOT null CHECK (ROLE IN (0, 1))
);

CREATE TABLE categories(
	id INT PRIMARY KEY,
	NAME VARCHAR(255)
)

CREATE TABLE news(
	id INT  PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255),
	content TEXT,
	image VARCHAR(255),
	created_at DATE,
	category_id INT,
	FOREIGN KEY (category_id) REFERENCES categories(id)
)

insert into users (username, password, role) values ('admin', 'admin', 1);
insert into users (username, password, role) values ('user', 0, 0);
insert into users (username, password, role) values ('jcunnington0', 99, 1);
insert into users (username, password, role) values ('clargan1', 68, 0);
insert into users (username, password, role) values ('mblazdell2', 43, 1);
insert into users (username, password, role) values ('charesnaip3', 87, 0);
insert into users (username, password, role) values ('bbrummitt4', 49, 1);
insert into users (username, password, role) values ('babramovicz5', 13, 0);
insert into users (username, password, role) values ('pbarrick6', 91, 0);
insert into users (username, password, role) values ('ukidby7', 5, 1);
insert into users (username, password, role) values ('ohousin8', 53, 0);
insert into users (username, password, role) values ('kbrandacci9', 74, 1);
insert into users (username, password, role) values ('wgibbonsona', 57, 1);
insert into users (username, password, role) values ('bbuttelb', 64, 1);
insert into users (username, password, role) values ('mandreassenc', 60, 0);
insert into users (username, password, role) values ('jmyderscoughd', 22, 0);
insert into users (username, password, role) values ('dhodgine', 42, 1);
insert into users (username, password, role) values ('rdemirandaf', 21, 1);
insert into users (username, password, role) values ('mcarillog', 78, 0);
insert into users (username, password, role) values ('ctordiffeh', 50, 0);
insert into users (username, password, role) values ('cturneauxi', 7, 1);
insert into users (username, password, role) values ('dmccrainej', 15, 0);


insert into categories (id, name) values (1, 'huy');
insert into categories (id, name) values (2, 'dat');
insert into categories (id, name) values (3, 'dong');
insert into categories (id, name) values (4, 'cpiddick3');
insert into categories (id, name) values (5, 'sblackney4');
insert into categories (id, name) values (6, 'gfreckleton5');
insert into categories (id, name) values (7, 'lgainfort6');
insert into categories (id, name) values (8, 'abertolaccini7');
insert into categories (id, name) values (9, 'fammer8');
insert into categories (id, name) values (10, 'scrosland9');
insert into categories (id, name) values (11, 'jtaffsa');
insert into categories (id, name) values (12, 'amollittb');
insert into categories (id, name) values (13, 'epalfreemanc');
insert into categories (id, name) values (14, 'mtrokerd');
insert into categories (id, name) values (15, 'pgawithe');
insert into categories (id, name) values (16, 'atraylingf');
insert into categories (id, name) values (17, 'cenriquezg');
insert into categories (id, name) values (18, 'lmckuneh');
insert into categories (id, name) values (19, 'rmosdilli');
insert into categories (id, name) values (20, 'camoorej');


insert into news (title, content, image, created_at, category_id) values ('Software Test Engineer III', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', null, '2024-08-22', 1);
insert into news (title, content, image, created_at, category_id) values ('Analyst Programmer', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', null, '2024-07-14', 2);
insert into news (title, content, image, created_at, category_id) values ('Programmer Analyst III', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.

Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.

Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', null, '2024-06-06', 3);
insert into news (title, content, image, created_at, category_id) values ('Speech Pathologist', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', null, '2024-05-19', 4);
insert into news (title, content, image, created_at, category_id) values ('VP Product Management', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.

Phasellus in felis. Donec semper sapien a libero. Nam dui.

Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', null, '2024-11-30', 5);
insert into news (title, content, image, created_at, category_id) values ('Help Desk Technician', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.

Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', null, '2024-11-24', 6);
insert into news (title, content, image, created_at, category_id) values ('Desktop Support Technician', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.

Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.

Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', null, '2023-12-18', 7);
insert into news (title, content, image, created_at, category_id) values ('Senior Sales Associate', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.

Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', null, '2024-03-12', 8);
insert into news (title, content, image, created_at, category_id) values ('Occupational Therapist', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.

Sed ante. Vivamus tortor. Duis mattis egestas metus.', null, '2024-02-13', 9);
insert into news (title, content, image, created_at, category_id) values ('Internal Auditor', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.

Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.

Fusce consequat. Nulla nisl. Nunc nisl.', null, '2024-06-29', 10);
insert into news (title, content, image, created_at, category_id) values ('VP Product Management', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', null, '2024-10-03', 11);
insert into news (title, content, image, created_at, category_id) values ('Professor', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', null, '2024-10-06', 12);
insert into news (title, content, image, created_at, category_id) values ('Quality Control Specialist', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.

Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.

Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', null, '2024-06-13', 13);
insert into news (title, content, image, created_at, category_id) values ('Dental Hygienist', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.

Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.

Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', null, '2024-04-02', 14);
insert into news (title, content, image, created_at, category_id) values ('Tax Accountant', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.

Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', null, '2024-11-20', 15);
insert into news (title, content, image, created_at, category_id) values ('Senior Financial Analyst', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', null, '2024-11-14', 16);
insert into news (title, content, image, created_at, category_id) values ('Programmer Analyst II', 'In congue. Etiam justo. Etiam pretium iaculis justo.

In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', null, '2024-07-05', 17);
insert into news (title, content, image, created_at, category_id) values ('Data Coordinator', 'In congue. Etiam justo. Etiam pretium iaculis justo.', null, '2024-09-09', 18);
insert into news (title, content, image, created_at, category_id) values ('Director of Sales', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', null, '2024-03-04', 19);
insert into news (title, content, image, created_at, category_id) values ('Librarian', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', null, '2024-09-21', 20);