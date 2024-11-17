#Uses the "search emp no json" api
# 
#Example http://192.168.110.153/search_emp_no_json.php?emp_no=100000

import requests # to communicate with API's via HTTP aka "REST"
import json     # be able to handle the data as json

crudeCrudApi = "http://192.168.110.153/search_emp_no_json.php?emp_no="

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

