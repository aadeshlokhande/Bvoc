from prettytable import PrettyTable

file = open("/home/diamond/Documents/MyProjects/CProjects/Bvoc/programs/data.txt","r")
data = file.read().split("\n")
file.close()


table = PrettyTable(["Sr.No.","Seat Number","PRM","Student Name","Exam Appearence Type","Medium","Gender","Category"])
a = 0
for i in range(23):
    list = []
    for j in range(8):
        list.append(f"{data[a]}")
        a+=1
    table.add_row(list)

print(table)

file = open("/home/diamond/Documents/MyProjects/CProjects/Bvoc/programs/firstSemRollNumbers.txt","w")
file.write(str(table))
file.close()