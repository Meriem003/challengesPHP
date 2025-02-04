-- 01.Beginner/01.md
SELECT * FROM Shippers;

-- 01.Beginner/02.md
SELECT CategoryName, Description FROM Categories;

-- 01.Beginner/03.md
SELECT FirstName, LastName, HireDate
FROM Employees
WHERE Title = 'Sales Representative';

-- 01.Beginner/04.md
SELECT FirstName, LastName, HireDate
FROM Employees
WHERE Title = 'Sales Representative'
AND Country = 'USA';

-- 01.Beginner/05.md
SELECT OrderID, OrderDate
FROM Orders
WHERE EmployeeID = 5;

-- 01.Beginner/06.md
SELECT SupplierID, ContactName, ContactTitle
FROM Suppliers
WHERE ContactTitle <> 'Marketing Manager';


-- 01.Beginner/07.md
SELECT ProductID, ProductName
FROM Products
WHERE ProductName LIKE '%queso%';

-- 01.Beginner/08.md
SELECT OrderID, CustomerID, ShipCountry
FROM Orders
WHERE ShipCountry = 'France' OR ShipCountry = 'Belgium';

-- 01.Beginner/09.md
SELECT OrderID, CustomerID, ShipCountry
FROM Orders
WHERE ShipCountry IN ('Brazil', 'Mexico', 'Argentina', 'Venezuela');

-- 01.Beginner/10.md
SELECT FirstName, LastName, Title, BirthDate
FROM Employees
ORDER BY BirthDate;

-- 01.Beginner/11.md

-- 01.Beginner/12.md
SELECT FirstName, LastName, FirstName + ' ' + LastName AS FullName
FROM Employees;

-- 01.Beginner/13.md
SELECT 
    OrderID, 
    ProductID, 
    UnitPrice, 
    Quantity, 
    (UnitPrice * Quantity) AS TotalPrice
FROM 
    OrderDetails
ORDER BY 
    OrderID, ProductID;

-- 01.Beginner/14.md
SELECT COUNT(*) AS TotalClients
FROM Customers;

-- 01.Beginner/15.md
SELECT MIN(OrderDate) AS PremierOrdre
FROM Orders;

-- 01.Beginner/16.md
SELECT DISTINCT ShipCountry AS Pays
FROM Orders;

-- 01.Beginner/17.md
SELECT ContactTitle AS ContactTitre, COUNT(*) AS Compter
FROM Customers
GROUP BY ContactTitle
ORDER BY Compter DESC;

-- 01.Beginner/18.md
-- 01.Beginner/19.md



