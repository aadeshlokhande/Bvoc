import pyautogui as pg
from time import sleep

sleep(2)

file = open("vocabs100Words.txt","r")
data = file.read().split("\n")
file.close()


for line in data:
    if(line==""):
        pg.press("enter")
        sleep(0.5)
    else:
        pg.typewrite(line,0.07)
        pg.hotkey("shift","enter")
