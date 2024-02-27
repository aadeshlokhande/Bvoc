import pyautogui as pg 
import time

file = open("CourseSyllabus.txt","r")
time.sleep(3)

for i in file:
    sen = i.replace("\n","")
    pg.click()
    pg.typewrite(f"write a answer under 100 words about {sen}. write answer point by point if needed",0.08)
    pg.press("enter")
    time.sleep(10)
file.close()

