CREATE database SQLTest;
USE SQLTest;

CREATE TABLE DEPARTMENT
(
   DEPTCODE   INT(10),
   DeptName   CHAR(30),
   LOCATION   VARCHAR(33)
);

CREATE TABLE EMPLOYEE
(
   EmpCode      INT(4),
   EmpFName     VARCHAR(15),
   EmpLName     VARCHAR(15),
   Job          VARCHAR(45),
   Manager      CHAR(4),
   HireDate     DATE,
   Salary       INT(6),
   Commission   INT(6),
   DEPTCODE     INT(2)
);



Step-2 (Alter Table)
We have now created the desired SQL tables. Next, you should run the below commands to change the table structure. It is sometimes quite useful that you know how to alter existing table properties.

ALTER TABLE DEPARTMENT
ADD PRIMARY KEY (DEPTCODE);

ALTER TABLE DEPARTMENT
CHANGE COLUMN DEPTCODE DEPTCODE INT(10) NOT NULL;

ALTER TABLE DEPARTMENT
CHANGE COLUMN DeptName DeptName CHAR(30) UNIQUE;

ALTER TABLE DEPARTMENT
CHANGE COLUMN LOCATION LOCATION VARCHAR(33) NOT NULL;

ALTER TABLE DEPARTMENT
CHANGE COLUMN DeptName DeptName VARCHAR(15) UNIQUE;

ALTER TABLE EMPLOYEE
ADD PRIMARY KEY (EmpCode);

ALTER TABLE EMPLOYEE
CHANGE COLUMN EmpCode EmpCode INT(4) NOT NULL;

ALTER TABLE EMPLOYEE
ADD FOREIGN KEY (DEPTCODE)
REFERENCES DEPARTMENT(DEPTCODE);

ALTER TABLE EMPLOYEE
CHANGE COLUMN Salary Salary DECIMAL(6,2);

ALTER TABLE EMPLOYEE
ADD COLUMN DOB DATE
AFTER EmpLName;

ALTER TABLE EMPLOYEE
DROP COLUMN DOB;

Step-3 (Populate Table)
Below INSERT statement below will fill the above tables with demo data you can use to run queries.

INSERT INTO DEPARTMENT VALUES (10, 'FINANCE', 'EDINBURGH'),
                              (20,'SOFTWARE','PADDINGTON'),
                              (30, 'SALES', 'MAIDSTONE'),
                              (40,'MARKETING', 'DARLINGTON'),
                              (50,'ADMIN', 'BIRMINGHAM');
                       
INSERT INTO EMPLOYEE  
VALUES (9369, 'TONY', 'STARK', 'SOFTWARE ENGINEER', 7902, '1980-12-17', 2800,0,20),
       (9499, 'TIM', 'ADOLF', 'SALESMAN', 7698, '1981-02-20', 1600, 300,30),    
       (9566, 'KIM', 'JARVIS', 'MANAGER', 7839, '1981-04-02', 3570,0,20),
       (9654, 'SAM', 'MILES', 'SALESMAN', 7698, '1981-09-28', 1250, 1400, 30),
       (9782, 'KEVIN', 'HILL', 'MANAGER', 7839, '1981-06-09', 2940,0,10),
       (9788, 'CONNIE', 'SMITH', 'ANALYST', 7566, '1982-12-09', 3000,0,20),
       (9839, 'ALFRED', 'KINSLEY', 'PRESIDENT', 7566, '1981-11-17', 5000,0, 10),
       (9844, 'PAUL', 'TIMOTHY', 'SALESMAN', 7698, '1981-09-08', 1500,0,30),
       (9876, 'JOHN', 'ASGHAR', 'SOFTWARE ENGINEER', 7788, '1983-01-12',3100,0,20),
       (9900, 'ROSE', 'SUMMERS', 'TECHNICAL LEAD', 7698, '1981-12-03', 2950,0, 20),
       (9902, 'ANDREW', 'FAULKNER', 'ANAYLYST', 7566, '1981-12-03', 3000,0, 10),
       (9934, 'KAREN', 'MATTHEWS', 'SOFTWARE ENGINEER', 7782, '1982-01-23', 3300,0,20),
       (9591, 'WENDY', 'SHAWN', 'SALESMAN', 7698, '1981-02-22', 500,0,30),
       (9698, 'BELLA', 'SWAN', 'MANAGER', 7839, '1981-05-01', 3420, 0,30),
       (9777, 'MADII', 'HIMBURY', 'ANALYST', 7839, '1981-05-01', 2000, 200, NULL),
       (9860, 'ATHENA', 'WILSON', 'ANALYST', 7839, '1992-06-21', 7000, 100, 50),
       (9861, 'JENNIFER', 'HUETTE', 'ANALYST', 7839, '1996-07-01', 5000, 100, 50);


       SQL Exercises for Basic to Advanced Queries
#1 Create a query that displays EMPFNAME, EMPLNAME, DEPTCODE, DEPTNAME, LOCATION from EMPLOYEE, and DEPARTMENT tables. Make sure the results are in ascending order based on the EMPFNAME and LOCATION of the department.

 select e.EmpFName as fname, e.EmpLName as lname, d.DEPTCODE,d.deptname 
 from EMPLOYEE e 
 left join DEPARTMENT d on d.DEPTCODE = e.DEPTCODE 
 order by e.EmpFName ,d.LOCATION
       
#2 Display EMPFNAME and “TOTAL SALARY” for each employee
select empfname, sum(Salary+commission) as totalsalary from employee group by EmpCode

#3 Display MAX and 2nd MAX SALARY from the EMPLOYEE table.

SELECT
(SELECT MAX(SALARY) FROM EMPLOYEE) MAXSALARY,
(SELECT MAX(SALARY) FROM EMPLOYEE
WHERE SALARY NOT IN (SELECT MAX(SALARY) FROM EMPLOYEE )) as 2ND_MAX_SALARY;

#4 Display the TOTAL SALARY drawn by an analyst working in dept no 20

SELECT SUM(SALARY+COMMISSION) AS TOTALSALARY FROM EMPLOYEE
WHERE JOB = 'ANALYST' AND DEPTCODE = 20;

#5 Compute the average, minimum, and maximum salaries of the group of employees having the job of ANALYST.

SELECT AVG(Salary) AS AVG_SALARY, MIN(Salary) AS MINSALARY, MAX(Salary) AS MAXSALARY
FROM EMPLOYEE WHERE Job = 'ANALYST';


a) Query to find all departments that are located in Edinburgh:

SELECT * FROM DEPARTMENT WHERE LOCATION = 'EDINBURGH';


b) Query to find all employees who work in the FINANCE department:

SELECT * FROM EMPLOYEE JOIN DEPARTMENT ON EMPLOYEE.DEPTCODE = DEPARTMENT.DEPTCODE
WHERE DEPARTMENT.DeptName = 'FINANCE';


c) Query to find the average salary of employees in each department:


SELECT DEPARTMENT.DeptName, AVG(EMPLOYEE.Salary) AS AVERAGE_SALARY
FROM EMPLOYEE JOIN DEPARTMENT ON EMPLOYEE.DEPTCODE = DEPARTMENT.DEPTCODE
GROUP BY DEPARTMENT.DeptName
ORDER BY AVERAGE_SALARY DESC;


d) Query to find the top 10 highest-paid employees:

SELECT * FROM EMPLOYEE ORDER BY Salary DESC LIMIT 10;



e) Query to find all employees who did not get a promotion in the last year:

SELECT * FROM EMPLOYEE
WHERE HireDate < CURRENT_DATE - INTERVAL 1 YEAR AND Commission IS NULL;





-- a) Query to find all database tables which was not part of the backup during last week:

-- SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
-- WHERE TABLE_SCHEMA = 'dbo' AND LAST_BACKUP_DATE IS NULL OR LAST_BACKUP_DATE < CURRENT_DATE - INTERVAL 1 WEEK;
-- This query uses the INFORMATION_SCHEMA.TABLES view to get a list of all database tables. The WHERE clause is filtering the results to only include tables that were not in the backup plan for the last week.

-- b) Query to find all database indexes that have some level of fragmentation:


-- SELECT INDEX_NAME, FRAGMENTATION_PERCENT FROM sys.dm_db_index_physical_stats
-- WHERE FRAGMENTATION_PERCENT > 5;
-- This query uses the sys.dm_db_index_physical_stats dynamic management view to get a list of all database indexes and their fragmentation percentage. The WHERE clause filters the results to only include indexes that are more than 5% fragmented.

-- c) Query to find all database queries that are running for longer than 10 seconds:

-- SELECT QUERY_TEXT, ELAPSED_TIME FROM sys.dm_exec_query_stats
-- WHERE ELAPSED_TIME > 10000;
-- This query uses the sys.dm_exec_query_stats dynamic management view to get a list of all database queries that are currently running and their elapsed time. The WHERE clause filters the results to only include queries that are running for longer than 10 seconds.


-- d) Query to find all database locks with retention time for longer than 1 minute:

-- SELECT RESOURCE_TYPE, RESOURCE_DESCRIPTION, WAIT_TIME FROM sys.dm_exec_locks
-- WHERE WAIT_TIME > 60000;
-- This query uses the sys.dm_exec_locks dynamic management view to get a list of all database locks that are currently holding for longer than 1 minute.

-- 5 SQL exercises to make or break the selection of a candidate
-- Here are 5 SQL exercises that can make or break the selection of a candidate in an interview:


See also  SQL Interview Questions and Answers (5+ Exp)
a) Return a list of all employees who are paid above the average salary.

SELECT EmpFName, EmpLName, Salary
FROM EMPLOYEE
WHERE Salary > (SELECT AVG(Salary) FROM EMPLOYEE);

b) Return a list of all employees who have been with the company for more than 5 years.
SELECT EmpFName, EmpLName, DateDiff(Now(), HireDate) AS YearsOfService
FROM EMPLOYEE
WHERE YearsOfService > 5;

c) Return a list of all departments, ordered by the number of employees in each department.
SELECT DeptName, COUNT(*) AS NumEmployees
FROM EMPLOYEE
GROUP BY DeptName
ORDER BY NumEmployees DESC;

d) Return a list of all job titles, ordered by the number of employees in each job title.

SELECT Job, COUNT(*) AS NumEmployees
FROM EMPLOYEE
GROUP BY Job
ORDER BY NumEmployees DESC;
e) Return a list of all managers, ordered by the number of employees managed by each manager.

SELECT Manager, COUNT(*) AS NumEmployees
FROM EMPLOYEE
GROUP BY Manager
ORDER BY NumEmployees DESC;