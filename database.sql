CREATE DATABASE pizza_store;

CREATE LOGIN storeOwner WITH PASSWORD = 'storeOwner123';

GRANT SELECT, INSERT, UPDATE, DELETE ON pizza_store TO storeOwner;

CREATE TABLE tblCustomers(
custID INT(6) PRIMARY KEY,
email VARCHAR(50),
delDetails VARCHAR(1000)
);

CREATE TABLE tblPizza(
pizzaID INT(6) PRIMARY KEY,
dough VARCHAR (30),
cheese VARCHAR (30),
sauce VARCHAR (30)
/*toppings*/
);

CREATE TABLE tblOrders(
orderID int NOT NULL,
custID int,
PRIMARY KEY (orderID),
FOREIGN KEY (custID) REFERENCES tblCustomers(custID)
);

CREATE TABLE tblPizzaOrders(
poID INT(6) PRIMARY KEY,
orderID int,
pizzaID int,
FOREIGN KEY (orderID) REFERENCES tblOrders(orderID),
FOREIGN KEY (pizzaID) REFERENCES tblPizza(pizzaID)
);