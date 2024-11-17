# requires a mysql connect
# this code uses mysql-connector-python
# install: pip install mysql-connector-python

import mysql.connector

employeeDb = mysql.connector.connect(host="192.168.110.153", user="phpuser1", password="abc123", database="employees")

employeeCursor = employeeDb.cursor()

employeeCursor.execute("SELECT * FROM employees where last_name='Weedman'")

results = employeeCursor.fetchall()

for name in results:
    print(name)