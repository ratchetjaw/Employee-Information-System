 
/*Data for the table locations */
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (1400,'2014 Jabberwocky Rd','26192','Southlake','Texas');
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (1500,'2011 Interiors Blvd','99236','South San Francisco','California');
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (1700,'2004 Charade Rd','98199','Seattle','Washington');
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (1800,'147 Spadina Ave','M5V 2L7','Toronto','Ontario');
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (2400,'8204 Arthur St',NULL,'London',NULL);
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (2500,'Magdalen Centre, The Oxford Science Park','OX9 9ZB','Oxford','Oxford');
INSERT INTO locations(loc_id,loc_address1,loc_zip,loc_city,loc_state) VALUES (2700,'Schwanthalerstr. 7031','80925','Munich','Bavaria');
 
 
/*Data for the table jobs */
 
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (1,'Public Accountant',4200.00,9000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (2,'Accounting Manager',8200.00,16000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (3,'Administration Assistant',3000.00,6000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (4,'President',20000.00,40000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (5,'Administration Vice President',15000.00,30000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (6,'Accountant',4200.00,9000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (7,'Finance Manager',8200.00,16000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (8,'Human Resources Representative',4000.00,9000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (9,'Programmer',4000.00,10000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (10,'Marketing Manager',9000.00,15000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (11,'Marketing Representative',4000.00,9000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (12,'Public Relations Representative',4500.00,10500.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (13,'Purchasing Clerk',2500.00,5500.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (14,'Purchasing Manager',8000.00,15000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (15,'Sales Manager',10000.00,20000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (16,'Sales Representative',6000.00,12000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (17,'Shipping Clerk',2500.00,5500.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (18,'Stock Clerk',2000.00,5000.00);
INSERT INTO jobs(job_id,job_title,min_salary,max_salary) VALUES (19,'Stock Manager',5500.00,8500.00);
 
 
/*Data for the table departments */
 
INSERT INTO departments(department_id,department_name,location_id) VALUES (1,'Administration',1700);
INSERT INTO departments(department_id,department_name,location_id) VALUES (2,'Marketing',1800);
INSERT INTO departments(department_id,department_name,location_id) VALUES (3,'Purchasing',1700);
INSERT INTO departments(department_id,department_name,location_id) VALUES (4,'Human Resources',2400);
INSERT INTO departments(department_id,department_name,location_id) VALUES (5,'Shipping',1500);
INSERT INTO departments(department_id,department_name,location_id) VALUES (6,'IT',1400);
INSERT INTO departments(department_id,department_name,location_id) VALUES (7,'Public Relations',2700);
INSERT INTO departments(department_id,department_name,location_id) VALUES (8,'Sales',2500);
INSERT INTO departments(department_id,department_name,location_id) VALUES (9,'Executive',1700);
INSERT INTO departments(department_id,department_name,location_id) VALUES (10,'Finance',1700);
INSERT INTO departments(department_id,department_name,location_id) VALUES (11,'Accounting',1700);
 
 
 
/*Data for the table job_data */
 
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (100,'1987-06-17',4,24000.00,NULL,9);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (101,'1989-09-21',5,17000.00,100,9);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (102,'1993-01-13',5,17000.00,100,9);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (103,'1990-01-03',9,9000.00,102,6);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (104,'1991-05-21',9,6000.00,103,6);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (105,'1997-06-25',9,4800.00,103,6);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (106,'1998-02-05',9,4800.00,103,6);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (107,'1999-02-07',9,4200.00,103,6);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (108,'1994-08-17',7,12000.00,101,10);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (109,'1994-08-16',6,9000.00,108,10);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (110,'1997-09-28',6,8200.00,108,10);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (111,'1997-09-30',6,7700.00,108,10);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (112,'1998-03-07',6,7800.00,108,10);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (113,'1999-12-07',6,6900.00,108,10);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (114,'1994-12-07',14,11000.00,100,3);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (115,'1995-05-18',13,3100.00,114,3);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (116,'1997-12-24',13,2900.00,114,3);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (117,'1997-07-24',13,2800.00,114,3);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (118,'1998-11-15',13,2600.00,114,3);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (119,'1999-08-10',13,2500.00,114,3);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (120,'1996-07-18',19,8000.00,100,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (121,'1997-04-10',19,8200.00,100,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (122,'1995-05-01',19,7900.00,100,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (123,'1997-10-10',19,6500.00,100,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (126,'1998-09-28',18,2700.00,120,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (145,'1996-10-01',15,14000.00,100,8);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (146,'1997-01-05',15,13500.00,100,8);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (176,'1998-03-24',16,8600.00,100,8);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (177,'1998-04-23',16,8400.00,100,8);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (178,'1999-05-24',16,7000.00,100,8);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (179,'2000-01-04',16,6200.00,100,8);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (192,'1996-02-04',17,4000.00,123,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (193,'1997-03-03',17,3900.00,123,5);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (200,'1987-09-17',3,4400.00,101,1);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (201,'1996-02-17',10,13000.00,100,2);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (202,'1997-08-17',11,6000.00,201,2);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (203,'1994-06-07',8,6500.00,101,4);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (204,'1994-06-07',12,10000.00,101,7);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (205,'1994-06-07',2,12000.00,101,11);
INSERT INTO job_data(employee_id,hire_date,job_id,salary,manager_id,department_id) VALUES (206,'1994-06-07',1,8300.00,205,11);
 
 
/*Data for the table emp_data */
 
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (100,'Steven','King','steven.king@rje.dynu.net','515.123.4567','1987-06-17');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (101,'Neena','Kochhar','neena.kochhar@rje.dynu.net','515.123.4568','1989-09-21');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (102,'Lex','De Haan','lex.de haan@rje.dynu.net','515.123.4569','1993-01-13');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (103,'Alexander','Hunold','alexander.hunold@rje.dynu.net','590.423.4567','1990-01-03');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (104,'Bruce','Ernst','bruce.ernst@rje.dynu.net','590.423.4568','1991-05-21');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (105,'David','Austin','david.austin@rje.dynu.net','590.423.4569','1997-06-25');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (106,'Valli','Pataballa','valli.pataballa@rje.dynu.net','590.423.4560','1998-02-05');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (107,'Diana','Lorentz','diana.lorentz@rje.dynu.net','590.423.5567','1999-02-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (108,'Nancy','Greenberg','nancy.greenberg@rje.dynu.net','515.124.4569','1994-08-17');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (109,'Daniel','Faviet','daniel.faviet@rje.dynu.net','515.124.4169','1994-08-16');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (110,'John','Chen','john.chen@rje.dynu.net','515.124.4269','1997-09-28');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (111,'Ismael','Sciarra','ismael.sciarra@rje.dynu.net','515.124.4369','1997-09-30');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (112,'Jose Manuel','Urman','jose manuel.urman@rje.dynu.net','515.124.4469','1998-03-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (113,'Luis','Popp','luis.popp@rje.dynu.net','515.124.4567','1999-12-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (114,'Den','Raphaely','den.raphaely@rje.dynu.net','515.127.4561','1994-12-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (115,'Alexander','Khoo','alexander.khoo@rje.dynu.net','515.127.4562','1995-05-18');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (116,'Shelli','Baida','shelli.baida@rje.dynu.net','515.127.4563','1997-12-24');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (117,'Sigal','Tobias','sigal.tobias@rje.dynu.net','515.127.4564','1997-07-24');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (118,'Guy','Himuro','guy.himuro@rje.dynu.net','515.127.4565','1998-11-15',);
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (119,'Karen','Colmenares','karen.colmenares@rje.dynu.net','515.127.4566','1999-08-10');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (120,'Matthew','Weiss','matthew.weiss@rje.dynu.net','650.123.1234','1996-07-18');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (121,'Adam','Fripp','adam.fripp@rje.dynu.net','650.123.2234','1997-04-10');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (122,'Payam','Kaufling','payam.kaufling@rje.dynu.net','650.123.3234','1995-05-01');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (123,'Shanta','Vollman','shanta.vollman@rje.dynu.net','650.123.4234','1997-10-10');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (126,'Irene','Mikkilineni','irene.mikkilineni@rje.dynu.net','650.124.1224','1998-09-28');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (145,'John','Russell','john.russell@rje.dynu.net',NULL,'1996-10-01');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (146,'Karen','Partners','karen.partners@rje.dynu.net',NULL,'1997-01-05');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (176,'Jonathon','Taylor','jonathon.taylor@rje.dynu.net',NULL,'1998-03-24');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (177,'Jack','Livingston','jack.livingston@rje.dynu.net',NULL,'1998-04-23');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (178,'Kimberely','Grant','kimberely.grant@rje.dynu.net',NULL,'1999-05-24');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (179,'Charles','Johnson','charles.johnson@rje.dynu.net',NULL,'2000-01-04');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (192,'Sarah','Bell','sarah.bell@rje.dynu.net','650.501.1876','1996-02-04');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (193,'Britney','Everett','britney.everett@rje.dynu.net','650.501.2876','1997-03-03');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (200,'Jennifer','Whalen','jennifer.whalen@rje.dynu.net','515.123.4444','1987-09-17');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (201,'Michael','Hartstein','michael.hartstein@rje.dynu.net','515.123.5555','1996-02-17')
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (202,'Pat','Fay','pat.fay@rje.dynu.net','603.123.6666','1997-08-17');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (203,'Susan','Mavris','susan.mavris@rje.dynu.net','515.123.7777','1994-06-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (204,'Hermann','Baer','hermann.baer@rje.dynu.net','515.123.8888','1994-06-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (205,'Shelley','Higgins','shelley.higgins@rje.dynu.net','515.123.8080','1994-06-07');
INSERT INTO emp_data(employee_id,first_name,last_name,email,phone_number,emp_dob) VALUES (206,'William','Gietz','william.gietz@rje.dynu.net','515.123.8181','1994-06-07');
 
/*Data for the table dependents */
 
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (1,'Penelope','Gietz','Child',206);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (2,'Nick','Higgins','Child',205);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (3,'Ed','Whalen','Child',200);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (4,'Jennifer','King','Child',100);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (5,'Johnny','Kochhar','Child',101);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (6,'Bette','De Haan','Child',102);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (7,'Grace','Faviet','Child',109);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (8,'Matthew','Chen','Child',110);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (9,'Joe','Sciarra','Child',111);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (10,'Christian','Urman','Child',112);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (11,'Zero','Popp','Child',113);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (12,'Karl','Greenberg','Child',108);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (13,'Uma','Mavris','Child',203);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (14,'Vivien','Hunold','Child',103);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (15,'Cuba','Ernst','Child',104);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (16,'Fred','Austin','Child',105);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (17,'Helen','Pataballa','Child',106);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (18,'Dan','Lorentz','Child',107);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (19,'Bob','Hartstein','Child',201);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (20,'Lucille','Fay','Child',202);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (21,'Kirsten','Baer','Child',204);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (22,'Elvis','Khoo','Child',115);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (23,'Sandra','Baida','Child',116);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (24,'Cameron','Tobias','Child',117);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (25,'Kevin','Himuro','Child',118);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (26,'Rip','Colmenares','Child',119);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (27,'Julia','Raphaely','Child',114);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (28,'Woody','Russell','Child',145);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (29,'Alec','Partners','Child',146);
INSERT INTO dependents(dependent_id,first_name,last_name,relationship,employee_id) VALUES (30,'Sandra','Taylor','Child',176);