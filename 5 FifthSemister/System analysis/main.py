import pyautogui as pg 
from time import sleep

str1 = "explain the topic of system analysis and software engineering in Hindi (English word included) in 100 words"

sleep(3)
file = open("data.txt","r")

for i in range(59):
    line = file.readline().replace("\n","")
    pg.click()
    sleep(1)
    pg.typewrite(str1,0.08)
    pg.hotkey("shift","enter")
    pg.typewrite("topic : ",0.08)
    pg.typewrite(line,0.08)
    pg.press("enter")
    print(i+1,line)
    sleep(15)

file.close()