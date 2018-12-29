CREATE SCHEMA `RJE` DEFAULT CHARACTER SET utf8;
CREATE USER 'gus' IDENTIFIED BY 'gus123';
CREATE USER 'rpt' IDENTIFIED BY 'rpt123';
GRANT SELECT, INSERT, UPDATE ON RJE.* TO 'gus' IDENTIFIED BY 'gus123';
GRANT SELECT ON RJE.* TO 'rpt' IDENTIFIED BY 'rpt123';
USE RJE;
CREATE TABLE enterprizes (
    enterprize_id INT (4) AUTO_INCREMENT PRIMARY KEY,
    enterprize_name VARCHAR (30) NOT NULL
);
 
CREATE TABLE coverage (
    cvg_id INT (4) AUTO_INCREMENT PRIMARY KEY,
	cvg_name VARCHAR (40) NOT NULL,
    cvg_coverage VARCHAR (40) NOT NULL,
	cvg_level VARCHAR (40) NOT NULL,
    cvg_premium DECIMAL (8, 2) NOT NULL
);

CREATE TABLE options (
    option_id INT (4) AUTO_INCREMENT PRIMARY KEY,
    option_name VARCHAR (30) NOT NULL,
    option_type VARCHAR (10) NOT NULL
);
  
CREATE TABLE locations (
    loc_id INT (4) AUTO_INCREMENT PRIMARY KEY,
	loc_name VARCHAR (40) NOT NULL,
    loc_address1 VARCHAR (40) NOT NULL,
	loc_address2 VARCHAR (40) NOT NULL,
    loc_city VARCHAR (30) NOT NULL,
    loc_state VARCHAR (25) NOT NULL,
	loc_zip VARCHAR (12) NOT NULL
);
 
CREATE TABLE jobs (
    job_id INT (4) AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR (35) NOT NULL,
	job_type VARCHAR (10) NOT NULL,
	rate_flag VARCHAR (6) NOT NULL,
    min_salary DECIMAL (8, 2) NOT NULL,
    max_salary DECIMAL (8, 2) NOT NULL
);
 
CREATE TABLE departments (
    department_id INT (4) AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR (30) NOT NULL,
    loc_id INT (4) NOT NULL,
    FOREIGN KEY (loc_id) REFERENCES locations (loc_id) ON DELETE CASCADE ON UPDATE CASCADE
);
 
CREATE TABLE emp_data(
    employee_id INT (4) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (20) NOT NULL,
    last_name VARCHAR (25) NOT NULL,
	preferred_name VARCHAR (30) NOT NULL,
	hire_date DATE NOT NULL,
	emp_dob DATE NOT NULL,
	emp_soc_sec VARCHAR (12) NOT NULL,
    email VARCHAR (100) NOT NULL,
    phone_number VARCHAR (20) NOT NULL,
	marital_status VARCHAR (10) NOT NULL,
	address1 VARCHAR (30) NOT NULL,
	address2 VARCHAR (30) NOT NULL,
	res_city VARCHAR (30) NOT NULL,
	res_state  VARCHAR (30) NOT NULL,
	zip_code VARCHAR(11) NOT NULL
);

CREATE TABLE emp_benefits (
    benifit_id INT (4) AUTO_INCREMENT PRIMARY KEY,
	employee_id INT (4) NOT NULL,
    plan_id INT (4) NOT NULL
);

CREATE TABLE job_data (
	employee_id INT (4) NOT NULL,
	eff_date DATE  NOT NULL,
	status VARCHAR (12) NOT NULL,
	performance VARCHAR (20) NOT NULL,
    job_id INT (4) NOT NULL,
    salary DECIMAL (8, 2) NOT NULL,
    manager_id INT (4) NOT NULL,
	department_id INT (4) NOT NULL,
	PRIMARY KEY (employee_id, eff_date)
);

CREATE TABLE dependents (
    dependent_id INT (4) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50) NOT NULL,
    last_name VARCHAR (50) NOT NULL,
	dep_dob DATE NOT NULL,
	dep_soc_sec VARCHAR (12) NOT NULL,
    relationship VARCHAR (25) NOT NULL,
    employee_id INT (4) NOT NULL
);