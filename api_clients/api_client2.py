import requests

crudeCrudApi = "http://192.168.110.153/search_emp_no.php?emp_no="

# Ask user for input:

employee = input("Enter Employee Number to search for: ")

apiResponse = requests.get(crudeCrudApi + employee)\

data = apiResponse.text

print(data)

dataSplit = data.split(";")

print(dataSplit)