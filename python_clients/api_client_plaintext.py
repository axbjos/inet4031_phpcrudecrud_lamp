###################################################
#
# PHP Crude CRUD Python Request Client v1.0
#
# Demonstration of the Python "requests" module
#
# The requests module is used to do a GET request
# to the findemployee.php page.
#
# Prompts the user for a last name to search for.
#
# The last name is passed as a parameter in the 
# GET request.
#
# Raw data is printed to console.

import requests

crudeCrudApi = "http://172.16.234.128/search_emp_no.php?emp_no="

# Ask user for input:

employee = input("Enter Employee Number to search for: ")

apiResponse = requests.get(crudeCrudApi + employee)\

data = apiResponse.text

print(data)

dataSplit = data.split(";")

print(dataSplit)