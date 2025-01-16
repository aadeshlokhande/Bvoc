import pyautogui as pg 
from time import sleep

# str1 = "explain topic in hindi in 200 words"
str1 = "explain the topic of soft skill development in Hindi (English word included) in 150 words"
# str2 = "subject : soft skill development"
str3 = "topic : "


sleep(3)

file = open("data.txt","r")

for i in range(23):
    line = file.readline().replace("\n","")
    pg.click()
    sleep(1)
    pg.typewrite(str1,0.08)
    pg.hotkey("shift","enter")
    # pg.typewrite(str2,0.08) 
    # pg.hotkey("shift","enter")
    pg.typewrite(str3,0.08)
    pg.typewrite(line,0.08)
    pg.press("enter")
    print(i+1,line)
    sleep(15)


file.close()




