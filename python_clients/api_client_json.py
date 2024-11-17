###################################################
#
# PHP Crude CRUD Python Request Client v1.0
#
# Demonstration of the Python "requests" and
# "json" module.  Using Python to interact with
# a JSON Web API.
#
# The requests module is used to do a GET request
# to the search_emp_no_json.php page.
#
# Prompts the user for a last name to search for.
#
# The last name is passed as a parameter in the 
# GET request.
#
# Data returned from the server is in JSON format.
# 
# The Python JSON module is used to create a Python Dictionary
# from the JSON Data.
#  
# Example http://192.168.110.153/search_emp_no_json.php?emp_no=100000

import requests # to communicate with API's via HTTP aka "REST"
import json     # be able to handle the data as json

crudeCrudApi = "http://172.16.234.128/api/searchempnumjson.php?emp_no="

# Ask user for input:

employee = input("Enter Employee Number to search for: ")

apiResponse = requests.get(crudeCrudApi + employee)\

jsonDataText = apiResponse.text     # the data in this variable will in JSON format
                                    # but just as "text"  Python will just see it as text...until

jsonData = json.loads(jsonDataText) # use the JSON library to parse the text as JSON data

print(jsonData) # print everything
print(type(jsonData))

print("First Name: ", jsonData["first_name"])
print("Last Name: ", jsonData["last_name"])

