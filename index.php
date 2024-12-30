<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>mysql</title>
  
  <!--css link-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
      
      <?php

      //  Example-1 

      SELECT * FROM Customers;

      //  Example-2 

      SELECT CustomerName, City, Country FROM Customers;

      //  Example-3 

      SELECT DISTINCT Country FROM Customers;

      //  Example-4 

      SELECT * FROM Customers
      WHERE Country = 'Mexico';

      //  Example-5 

      SELECT * FROM Customers
      WHERE Country = 'Germany' AND City = 'Berlin';

      //  Example-6 

      SELECT * FROM Customers
      WHERE City = 'Berlin' OR City = 'Stuttgart';

      //  Example-7 

      SELECT * FROM Customers
      WHERE NOT Country = 'Germany';

      //  Example-8 

      SELECT * FROM Customers
      ORDER BY Country DESC;

      //  Example-9 

      SELECT * FROM Customers
      ORDER BY Country ASC, CustomerName DESC;

      //  Example-10 

      INSERT INTO Customers (CustomerName, City, Country)
      VALUES ('Cardinal', 'Stavanger', 'Norway');

      //  Example-11 

      SELECT CustomerName, ContactName, Address
      FROM Customers
      WHERE Address IS NULL;

      //  Example-12 

      SELECT CustomerName, ContactName, Address
      FROM Customers
      WHERE Address IS NOT NULL;

      //  Example-13 

      UPDATE Customers
      SET PostalCode = 00000
      WHERE Country = 'Mexico';

      //  Example-14 

      DELETE FROM Customers 
      WHERE CustomerName='Alfreds Futterkiste';

      //  Example-15 

      SELECT * FROM Customers
      WHERE Country='Germany'
      LIMIT 3;

      //  Example-16 

      SELECT MIN(Price) AS SmallestPrice
      FROM Products;

      //  Example-17 

      SELECT MAX(Price) AS LargestPrice
      FROM Products;

      //  Example-18 

      SELECT COUNT(ProductID)
      FROM Products;

      //  Example-19 

      SELECT AVG(Price)
      FROM Products;

      //  Example-20 

      SELECT SUM(Quantity)
      FROM OrderDetails;

      //  Example-21 

      SELECT * FROM Customers
      WHERE CustomerName LIKE 'a%';

      //  Example-22 

      SELECT * FROM Customers
      WHERE CustomerName LIKE '%a';

      //  Example-23 

      SELECT * FROM Customers
      WHERE CustomerName LIKE '%a%';

      //  Example-24 

      SELECT * FROM Customers
      WHERE ContactName LIKE 'a%o';

      //  Example-25 

      SELECT * FROM Customers
      WHERE CustomerName NOT LIKE 'a%';

      ?>

    </div>
 <!--script link-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>