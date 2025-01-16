file = open("Nssdata.txt","r")
data = file.read()
file.close()
data = data.split("\n")

count = 0
list = []
for i in range(199):
    a = []
    for j in range(4):
        a.append(data[count])
        count += 1
    list.append(a)

print(list)

a = ["Name,Name Suffix,Phone,Organization",]
file = open("Nss.csv","w")
for i in range(len(a)):
    if(i+1<len(a)):
        file.write(f"{a[i]},")
    else:
        file.write(f"{a[i]}\n")

for i in list:
    # for j in range(1,len(i)):
    file.write(f"NSS {i[1]},{i[2]},{i[3]},Kamla Nehru\n")
    
file.close()