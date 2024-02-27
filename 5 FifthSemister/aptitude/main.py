import pyautogui as pg 
from time import sleep

sleep(3)
file = open("data.txt","r")

for i in range(16):
    line = file.readline().replace("\n","")
    pg.click()
    sleep(1)
    pg.typewrite("explain the topic in easy way with 3 examples")
    pg.hotkey("shift","enter")
    pg.typewrite("subject : aptitude development")
    pg.hotkey("shift","enter")
    pg.typewrite(f" topic : {line}",0.08)
    pg.press("enter")
    print(i+1,line)
    sleep(15)

file.close()