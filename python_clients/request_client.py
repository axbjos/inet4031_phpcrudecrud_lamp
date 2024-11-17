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
# Data returned from the server is HTML and is 
# printed to the command line.

import requests

crudeCrudApi = 'http://172.16.234.128/findemployee.php?lastname='

# Ask user for input:

lastName = input("Enter the Last Name to search for: ")

apiResponse = requests.get(crudeCrudApi + lastName)

print(apiResponse.text)