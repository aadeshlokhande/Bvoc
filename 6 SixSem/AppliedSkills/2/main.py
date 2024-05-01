import pyautogui as pg
from time import sleep

sleep(3)

file = open("prompt.txt", "r")
data = file.read().split("\n")
file.close()

for i in data:
    pg.typewrite(i, 0.08)
    sleep(1)
    pg.press("enter")
    sleep(10)