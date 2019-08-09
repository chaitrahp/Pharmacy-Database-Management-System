\c postgres
CREATE database pms;
\c pms

CREATE TABLE drug(
	drug_id varchar(15) primary key,
	drug_name char(20) unique,
	dosage int,
	mfg_date date not null,
	exp_date date not null check(exp_date>current_date),
	price money,
	type char(20),
	doct_id varchar(15),
	comp_id varchar(15),
	pharma_id varchar(15)
	
	);
ALTER TABLE drug add constraint mfgdate check(mfg_date<current_date);


CREATE TABLE patient
	(
	patient_Id varchar(15) primary key,
	patient_name char(20),
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999),
	disease char(20),
	doct_Id varchar(15),
	gender char(15)
	);

CREATE TABLE pharma(
	pharma_id varchar(15) primary key,
 	name char(20),
	location char(30),
	startdate date
	);
CREATE TABLE doctor(
	doctor_id varchar(15) primary key,
	doct_name char(20),
	speciality char(20),
	email varchar(30),
	salary int,
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999),
	fax varchar(10)
	);
CREATE TABLE employee(
	emp_id varchar(15) primary key,
	name char(20),
	salary int,
	gender char(20),
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999),
	pharma_id varchar(15)
	);

CREATE TABLE wholesaler(
	wholesaler_id varchar(15) primary key,
	ws_name char(20),
	quoted_price money,
	location varchar(20),
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999)
	);
CREATE TABLE hospital(
	hospital_id varchar(15) primary key,
	hosp_name char(20),
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999),
	email varchar(30),
	fax varchar(15),
	);


CREATE TABLE mr(
	mr_id varchar(15) primary key,
	mr_name char(20),
	salary int,
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999)
	);
CREATE  TABLE drug_insp(
	insp_id varchar(15) primary key,
	insp_name char(20),
	salary int check(salary>50000),
	phone_no varchar(10)
	);
CREATE TABLE manufacturer(
	comapny_id varchar(5) primary key,
	comapny_name char(20),
	location char(20),
	email varchar(30),
	phone_no bigint check(phone_no>1000000000 AND phone_no<9999999999)
	);
CREATE TABLE branch(
	branch_id varchar(15) primary key,
	location varchar(15),
	email varchar(30),
	phone_no bigintcheck(phone_no>1000000000 AND phone_no<9999999999),
	fax varchar(20),
	pharma_id varchar(15)
	);

CREATE TABLE scientist(
	scientist_id varchar(15)  primary key,
	name char(20),
	type char(20),
	lab  char(20)
	);
CREATE TABLE bill(
	bill_id varchar(15) primary key,
	amount money,
	date date,
	pharma_id varchar(15)
	);

CREATE TABLE links_with(
	pharma_id varchar(15),
	hosp_id varchar(15),
	primary key(pharma_id,hosp_id)
	);

CREATE tabl gives_order_to(
	pharma_id varchar(15),
	wholesaler_id varchar(15),
	primary key(pharma_id,wholesaler_id)
	);

CREATE TABLE buys(
	drug_id varchar(15),
	patient_id varchar(15),
	date date,
	primary key(drug_id,patient_id)
	);

CREATE TABLE sells(
	drug_id varchar(15),
	pharma_id varchar(15),
	date date,
	primary key(drug_id,pharma_id)
	);

CREATE TABLE in_contact_with(
	drug_insp_id varchar(15),
	scientist_id varchar(15),
	primary key(drug_insp_id,scientist_id)
	);

CREATE TABLE purchase(
	company_id varchar(15),
	wholesaler_id varchar(15),
	primary key(company_id,wholesaler_id)
	);

CREATE TABLE invents(
	drug_id varchar(15),
	scientist_id varchar(15),
	primary key(drug_id,scientist_id)
	);

CREATE TABLE advertises_to(
	mr_id varchar(15),
	hospital_id varchar(15),
	pharma_id(15),
	primary key(mr_id,hospital_id,pharma_id)
	);

ALTER TABLE drug add foreign key(doct_id) references doctor(doctor_id);

ALTER TABLE drug add foreign key(comp_id) references manufacturer(company_id);

ALTER TABLE drug add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE patient add foreign key(doct_id) references doctor(doctor_id);

ALTER TABLE employee add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE  branch add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE  bill add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE  links_with add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE  links_with add foreign key(hosp_id) references hospital(hospital_id);

ALTER TABLE  gives_order_to add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE  gives_order_to add foreign key(wholesaler_id) references wholesaler(wholesaler_id);

ALTER TABLE  buys add foreign key(drug_id) references drug(drug_id);

ALTER TABLE  buys add foreign key(patient_id) references patient(patient_id);

ALTER TABLE  sells add foreign key(pharma_id) references pharma(pharma_id);

ALTER TABLE  sells add foreign key(drug_id) references drug(drug_id);

ALTER TABLE  in_contact_with add foreign key(drug_insp_id) references drug_insp(insp_id);

ALTER TABLE  in_contact_with add foreign key(scientist_id) references scientist(scientist_id);

ALTER TABLE  purchase add foreign key(company_id) references manufacturer(company_id);

ALTER TABLE  purchase add foreign key(wholesaler_id) references wholesaler(wholesaler_id);

ALTER TABLE  invents add foreign key(scientist_id) references scientist(scientist_id);

ALTER TABLE  invents add foreign key(drug_id) references drug(drug_id);

ALTER TABLE  advertises_to add foreign key(mr_id) references mr(mr_id);

ALTER TABLE  advertises_to add foreign key(hospital_id) references hospital(hospital_id);

ALTER TABLE  advertises_to add foreign key(pharma_id) references pharma(pharma_id);

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('AN 627','kelvin P','2019-01-11','2022-12-12',60,400.06,'SYR');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('2632V','match','2018-11-15','2019-05-15',75,45.71,'INJ');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type)
VALUES('S903','calcindense-iso','2018-10-04','2020-10-25',10,154.06,'CAP');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('GG249','duovir-n','2019-01-30','2021-02-10',30,600.08,'FC-TAB');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('V3601','Triomune junior','2018-11-09','2022-11-09',60,749.00,'DIS-TAB');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('L484','cedia-ac','2018-05-06','2020-10-03',10,133.06,'TAB');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('M365','ciplactin','2017-11-08','2022-12-12',4,50.56,'TAB');

INSERT INTO drug(drug_id,drug_name,mfg_date,exp_date,dosage,price,type) 
VALUES('M367','alergin','2019-01-23','2024-02-24',150,250.00,'TAB');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308153F','Abhishek Bhagwat','9482345700','emphysema','MALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308154F','Rakshita Prasad','7861093445','bronchitis','FEMALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308155F','Jack Sparrow','8042675553','rheumatoid arthritis','FEMALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308156F','Ethen Hunt','9841236676','glaucoma','MALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308157F','Loki','9482453890','malignant tumor','MALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308158F','WANDa','7856223031','typhoid','FEMALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308159F','Natasha','9880231578','pneumonia','FEMALE');

INSERT INTO patient(patient_id,patient_name,phone_no,disease,gender)
VALUES('308160F','Steve','7845668900','malaria','MALE');

UPDATE patient SET gender='MALE' WHERE patient_id='308155F';


INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2895X','Dumble Dore','allergist','dumbledorehog@gmail.com','2222 8888',40000,'9856471260');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2896X','Thor','cardiologist','asgard6@gmail.com','+44-1 3333 7788',87000,'9481234459');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2897X','Arundhati','anesthesiologist','arundhati656@yahoo.com','+01 25454 1111',50000,'7045668921');
                                           
INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2897X','Arundhati','anesthesiologist','arundhati656@yahoo.com','+01 25454 1111',50000,'7045668921');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2898X','Tony Stark','hematologist','avengers@gmail.com','7777 8080',65000,'8023456722');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2899X','Matthew Forshaw','neurologist','matthewforshaw@gmail.com','+44-0 3343 1111',100000,'9481235595');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2810X','Johnny depp','oncologist','jonnydepp@gmail.com','5555 6666','108000','8011225647');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2811X','Chaitra','ophthalmologist','chaitra@yahoo.com','2344 8787','80000','9842314688');

INSERT INTO doctor(doctor_id,doct_name,speciality,email,fax,salary,phone_no)
VALUES('AF2812X','Alan Turing','orthopaedician','turing453.com','8888 9090','67000','9481364577');


INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789500','Jim Phelps','30000','MALE','9485664750');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789501','Thomas','32500','MALE','7864593311');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789502','Teresa','30000','FEMALE','8290237315');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789503','Newt','30000','MALE','8013449547');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789504','Minho','31000','MALE','9481264579');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789505','Gally','32000','MALE','9841465890');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789506','Ava Paige','29000','FEMALE','9481362497');

INSERT INTO employee(emp_id,name,salary,gender,phone_no)
VALUES('100789507','Chuck','30000','MALE','7892468829');


INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705160','El camino','California',null,'2222 8888','080364578');
                                          
INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705161','Fortis','Gurgaon','fmri@fortishealthcare.com','2234 5673','246578146');

INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705162','Johns Hopkins','Mary LAND','jh@hopkinshealthcare.com','+04-1 8888 4555','041238745');

INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705163','Anadolu','Turkey','anadolu@medicalcenter.com','8888 4555','111230947');

INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705164','Palomar','California',null,'1258 9642','1423657123');

INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705165','Bumrungrad','Bangkok','bumrungrad@healthcare.com','3425 8847','11234982');

INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705166','Mayo','Arizona','mayo@cliniccare.com','1111 9999','9483000125');

INSERT INTO hospital(hospital_id,hosp_name,location,email,fax,phone_no)
VALUES('2234705167','Stanford','California',null,'+44-7 9898 7777','080108652');


INSERT INTO pharma(pharma_id,name,location)VALUES('PH-001','CVS corporation','Woon socket');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-002','Walmart','Greely');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-003','Med Plus','Hyderabad');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-004','Fortis','Bangalore');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-005','Watsons','Singapore');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-006','Tesco','London');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-007','Omnicare','Cincinnati');

INSERT INTO pharma(pharma_id,name,location)VALUES('PH-008','Costco','Washington');
 

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00120','Mumbai','mumiprc@medplus.com','9854601230','5555 7676');

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00121','Dehli','dehliiprc@medplus.com','7896012345','4444 8888');
                                   
INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00560','Canada',null,'0802356478','0100 5775');

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00788','Mountain View','walmart@pharma.com','0885647321','5400 8888');

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00789','New Arizona','walmartipsr@pharma.com','9865745230','1424 7865');

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00433','oxford','tescor@pharma.com','8034612478','7895 4456');

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00434','Bath',null,'0104569872','7856 5524');

INSERT INTO branch(branch_id,location,email,phone_no,fax)
VALUES('PH-00122','Bangalore','arclric@medpls.com','080236489','2458 1258');


INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L560MH','Cipla','Mumbai','cosecreator@cipla.com','9481364795');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L561MH','Invision','Hyderabad','ctyecreator@invision.com','0803256471');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L562MH','Pfizer','Connecticut','ctyecrr@pfizer.com','080123405');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L563MH','Roche','Swiss','ctyecrujr@roche.com','0658412374');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L563MH','Merck','North America','rudfgr@merck.com','9856123790');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L564MH','Merck','North America','rudfgr@merck.com','9856123790');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L565MH','Anglo-French','Bangalore','frenchr@anglof.com','914523690');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L566MH','Novartis','SwitzerlAND','swiss@novartisf.com','123589645');

INSERT INTO manufacturer(company_id,company_name,location,email,phone_no)
VALUES('L567MH','Gilead','California','jfhfhr@gilead.com','0804562712');


INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5720','Frypan',25000,'080256398');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5721','Winston',25000,'080456973');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5722','Alby',24900,'080789345');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5723','Jeff',24000,'080453218');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5724','Zart',25000,'080763249');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5725','Four',24000,'080112589');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5726','Tris',24900,'080556984');

INSERT INTO mr(mr_id,mr_name,salary,phone_no)VALUES('MR5727','Beatrice Prior',24000,'080123894');


INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1270','Alex','Formulation','central');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1271','Spencer','Formulation','USDTL');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1272','Franklin Finbar','Research','ARCpoint');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1273','Bethany','Formulation','Omega');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1274','Martha','Research','Mercy');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1275','Will Turner','Research','Quest');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1276','Carina Smyth','Research','Bio-Chem');

INSERT INTO scientist(scientist_id,name,type,lab)VALUES('S1277','Angelica','Formulation','Kearney Collection');


INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5670','Henry Turner',65000,'9824123564');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5671','Davy Jones',66000,'8012469275');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5672','Tia Dalma',60000,'9841362547');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5673','Syrena',60000,'0804562541');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5674','Hector',65000,'7892268940');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5675','Anamaria',65000,'7892288964');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5676','Scrum',55000,'9482569474');

INSERT INTO drug_insp(insp_id,insp_name,salary,phone_no)VALUES('DI5677','Ron Weasley',65000,'9481789523');


INSERT INTO bill(bill_id,date,amount)VALUES('INP1203400D','2019-01-24','225.07');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203401D','2019-01-07','600.87');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203402D','2019-02-01','400.00');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203403D','2019-01-30','323.10');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203404D','2019-01-30','110.10');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203405D','2019-02-01','500.10');

DELETE FROM bill WHERE bill_id='INP1203402D';

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203402D','2019-01-28','400.00');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203406D','2019-02-07','749.70');

INSERT INTO bill(bill_id,date,amount)VALUES('INP1203407D','2019-02-07','250.39');

SELECT bill_id FROM bill order by bill_id ASC;


UPDATE pharma SET date='2000-01-26' WHERE pharma_id='PH-001';

UPDATE pharma SET date='2002-10-01' WHERE pharma_id='PH-002';

UPDATE pharma SET date='2011-09-30' WHERE pharma_id='PH-003';

UPDATE pharma SET date='1999-02-17' WHERE pharma_id='PH-004';

UPDATE pharma SET date='2015-07-19' WHERE pharma_id='PH-005';

UPDATE pharma SET date='2003-12-23' WHERE pharma_id='PH-006';

UPDATE pharma SET date='1995-04-16' WHERE pharma_id='PH-007';

UPDATE pharma SET date='2018-09-28' WHERE pharma_id='PH-008';


INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-001','2234705163');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-002','2234705166');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-002','2234705160');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-005','2234705162');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-002','2234705160');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-002','2234705164');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-008','2234705167');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-004','2234705166');

INSERT INTO links_with(pharma_id,hosp_id)VALUES('PH-007','2234705161');


INSERT INTO buys(drug_id,patient_id) VALUES('AN 627','308154F');

INSERT INTO buys(drug_id,patient_id) VALUES('S903','308153F');

INSERT INTO buys(drug_id,patient_id) VALUES('L484','308154F');

INSERT INTO buys(drug_id,patient_id) VALUES('AN 627','308158F');

INSERT INTO buys(drug_id,patient_id) VALUES('M365','308160F');

INSERT INTO buys(drug_id,patient_id) VALUES('M367','308160F');

INSERT INTO buys(drug_id,patient_id) VALUES('GG249','308154F');

INSERT INTO buys(drug_id,patient_id) VALUES('L484','308159F');

UPDATE buys SET date='2019-01-11' WHERE drug_id='AN 627';

UPDATE buys SET date='2019-02-08' WHERE drug_id='S903';

UPDATE buys SET date='2019-02-09' WHERE drug_id='M365';

UPDATE buys SET date='2019-01-30' WHERE drug_id='M367';

UPDATE buys SET date='2019-02-02' WHERE drug_id='GG249';

UPDATE buys SET date='2019-01-16' WHERE drug_id='L484';


INSERT INTO sells(drug_id,pharma_id,date)VALUES('V3601','PH-003','2018-12-12');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('2632V','PH-007','2018-12-16');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('M365','PH-008','2018-12-23');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('L484','PH-003','2018-12-30');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('V3601','PH-005','2019-01-01');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('S903','PH-007','2019-01-09');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('M367','PH-001','2019-01-19');

INSERT INTO sells(drug_id,pharma_id,date)VALUES('M365','PH-004','2019-02-04');


INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0400','Remy',150.09,'Boston','080124698');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0401','Rachel',530.09,'Arizona','081258964');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0402','Chris Evans',764.14,'Goa','9785462100');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0403','Hulk',267.06,'Arizona','042369875');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0404','Maria Hill',57.76,'California','080123489');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0405','Clint Barton',507.00,'Gurgaon','9486457210');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0406','Pepper Plotts',800.00,'Swiss','080123975');

INSERT INTO wholesaler(wholesaler_id,ws_name,quoted_price,location,phone_no)
VALUES('W0407','Edvin Jarvis',380.30,'Oxford','080111589');


INSERT INTO purchase(company_id,wholesaler_id)VALUES('L561MH','W0400');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L565MH','W0402');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L563MH','W0402');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L560MH','W0405');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L560MH','W0401');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L567MH','W0404');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L565MH','W0406');

INSERT INTO purchase(company_id,wholesaler_id)VALUES('L560MH','W0403');


INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-001','W0400');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-001','W0403');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-003','W0402');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-006','W0407');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-002','W0403');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-001','W0405');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-005','W0404');

INSERT INTO gives_order_to(pharma_id,wholesaler_id)VALUES('PH-007','W0402');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5720','2234705160','PH-001');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5723','2234705165','PH-007');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5721','2234705165','PH-002');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5727','2234705165','PH-002');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5723','2234705163','PH-004');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5720','2234705160','PH-006');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5725','2234705164','PH-001');

INSERT INTO advertises_to(mr_id,hospital_id,pharma_id)VALUES('MR5726','2234705162','PH-003');

INSERT INTO invents(drug_id,scientist_id)VALUES('AN 627','S1270');

INSERT INTO invents(drug_id,scientist_id)VALUES('S903','S1274');

INSERT INTO invents(drug_id,scientist_id)VALUES('S903','S1276');

INSERT INTO invents(drug_id,scientist_id)VALUES('GG249','S1277');

INSERT INTO invents(drug_id,scientist_id)VALUES('V3601','S1274');

INSERT INTO invents(drug_id,scientist_id)VALUES('AN 27','S1272');

INSERT INTO invents(drug_id,scientist_id)VALUES('AN 627','S1272');

INSERT INTO invents(drug_id,scientist_id)VALUES('M365','S1273');

INSERT INTO invents(drug_id,scientist_id)VALUES('L484','S1275');


UPDATE branch SET pharma_id='PH-001' WHERE branch_id='PH-00120';

UPDATE branch SET pharma_id='PH-001' WHERE branch_id='PH-00121';

UPDATE branch SET pharma_id='PH-004' WHERE branch_id='PH-00122';

UPDATE branch SET pharma_id='PH-003' WHERE branch_id='PH-00434';

UPDATE branch SET pharma_id='PH-003' WHERE branch_id='PH-00433';

UPDATE branch SET pharma_id='PH-007' WHERE branch_id='PH-00789';

UPDATE branch SET pharma_id='PH-007' WHERE branch_id='PH-00788';

UPDATE branch SET pharma_id='PH-002' WHERE branch_id='PH-00560';

UPDATE doctor SET hosp_id='2234705160' WHERE doctor_id='AF2895X';

UPDATE doctor SET hosp_id='2234705167' WHERE doctor_id='AF2896X';

UPDATE doctor SET hosp_id='2234705163' WHERE doctor_id='AF2897X';

UPDATE doctor SET hosp_id='2234705165' WHERE doctor_id='AF2898X';

UPDATE doctor SET hosp_id='2234705162' WHERE doctor_id='AF2899X';

UPDATE doctor SET hosp_id='2234705166' WHERE doctor_id='AF2810X';

UPDATE doctor SET hosp_id='2234705160' WHERE doctor_id='AF2811X';

UPDATE doctor SET hosp_id='2234705165' WHERE doctor_id='AF2812X';

UPDATE doctor SET hosp_id='2234705164' WHERE doctor_id='AF2812X';

UPDATE doctor SET hosp_id='2234705161' WHERE doctor_id='AF2811X';


UPDATE drug SET doct_id='AF2895X',pharma_id='PH-002',comp_id='L560MH' WHERE drug_id='AN 627';

UPDATE drug SET doct_id='AF2811X',pharma_id='PH-007',comp_id='L564MH' WHERE drug_id='2632V';

UPDATE drug SET doct_id='AF2811X',pharma_id='PH-003',comp_id='L565MH' WHERE drug_id='S903';

UPDATE drug SET doct_id='AF2811X',pharma_id='PH-006',comp_id='L560MH' WHERE drug_id='GG249';

UPDATE drug SET doct_id='AF2811X',pharma_id='PH-001',comp_id='L564MH' WHERE drug_id='V3601';

UPDATE drug SET doct_id='AF2897X',pharma_id='PH-004',comp_id='L566MH' WHERE drug_id='L484';

UPDATE drug SET doct_id='AF2899X',pharma_id='PH-005',comp_id='L561MH' WHERE drug_id='M365';

UPDATE drug SET doct_id='AF2810X',pharma_id='PH-004',comp_id='L566MH' WHERE drug_id='M367';

UPDATE employee SET pharma_id='PH-001' WHERE emp_id='100789500';

UPDATE employee SET pharma_id='PH-004' WHERE emp_id='100789501';

UPDATE employee SET pharma_id='PH-003' WHERE emp_id='100789502';

UPDATE employee SET pharma_id='PH-003' WHERE emp_id='100789503';

UPDATE employee SET pharma_id='PH-003' WHERE emp_id='100789504';

UPDATE employee SET pharma_id='PH-007' WHERE emp_id='100789505';

UPDATE employee SET pharma_id='PH-001' WHERE emp_id='100789506';

UPDATE employee SET pharma_id='PH-004' WHERE emp_id='100789507';


INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5670','S1271');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5676','S1273');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5676','S1270');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5674','S1275');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5672','S1277');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5673','S1277');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5670','S1272');

INSERT INTO in_contact_with(drug_insp_id,scientist_id)VALUES('DI5675','S1276');

UPDATE patient SET doct_id='AF2895X' WHERE patient_id='308153F';

UPDATE patient SET doct_id='AF2896X' WHERE patient_id='308154F';

UPDATE patient SET doct_id='AF2811X' WHERE patient_id='308155F';

UPDATE patient SET doct_id='AF2811X' WHERE patient_id='308156F';

UPDATE patient SET doct_id='AF2899X' WHERE patient_id='308157F';

UPDATE patient SET doct_id='AF2898X' WHERE patient_id='308158F';

UPDATE patient SET doct_id='AF2896X' WHERE patient_id='308159F';

UPDATE patient SET doct_id='AF2810X' WHERE patient_id='308160F';

