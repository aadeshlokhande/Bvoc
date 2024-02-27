from prettytable import PrettyTable
  
# Specify the Column Names while initializing the Table
myTable = PrettyTable(["Data","Day","Subject","Time"])
  
# Add rows
myTable.add_row(["17/02/2022", "Thursday".upper(),"Soft Skill Development - 1".upper(), "10:00 PM - 11:00 PM"])
myTable.add_row(["18/02/2022", "Friday".upper(),"Aptitude Development - 1".upper(), "10:00 PM - 11:00 PM"])
myTable.add_row(["21/02/2022", "Monday".upper(),"Computer Fundamental & Networking".upper(), "10:00 PM - 11:00 PM"])
myTable.add_row(["22/02/2022", "Tuesday".upper(),"C Programming".upper(), "10:00 PM - 11:00 PM"])
myTable.add_row(["23/02/2022", "Wednesday".upper(),"English & Communication Skill - 1".upper(), "10:00 PM - 11:00 PM"])
print(myTable)
