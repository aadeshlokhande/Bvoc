import pyautogui as pg 
from time import sleep

sleep(3)

topics = ["Introduction in word Processing","Starting word in word Processing","Creating Documant in word Processing","Structure of Ms-word window and its application in word Processing","mouse and keyboard operations in word Processing","designing a document in word Processing","formating-selection in word Processing","cut in word Processing","copy in word Processing","paste in word Processing","toolbars in word Processing","operating on text in word Processing","printing in word Processing","saving in word Processing","opening in word Processing","closing of document in word Processing","creating a template in word Processing","Tables in word Processing","borders in word Processing","textbox operations in word Processing","spelling and grammer check in word Processing","mail merge in word Processing","envelope and label in word Processing","protection of document in word Processing","change the view of document in word Processing","working with powerpoint window in Powerpoint Presentation","standard toolbar in Powerpoint Presentation","formatting toolbar in Powerpoint Presentation","drawing toolbar in Powerpoint Presentation","moving the frame in Powerpoint Presentation","inserting clip art in Powerpoint Presentation","picture in Powerpoint Presentation","slide in Powerpoint Presentation","text sliding in Powerpoint Presentation","send to back in Powerpoint Presentation","entering Data to Graph in Powerpoint Presentation","organization chart in Powerpoint Presentation","Tables in Powerpoint Presentation","design template in Powerpoint Presentation","master slide in Powerpoint Presentation","animation setting in Powerpoint Presentation","saving and  Presentation in Powerpoint Presentation","auto content wizard in Powerpoint Presentation","package for CD(pack & go feature) in Powerpoint Presentation"]

for topic in topics:
    pg.hotkey("ctrl","a")
    prompt = f"write a short note on {topic} in 3 lines"    
    pg.typewrite(prompt, 0.08)
    sleep(1)
    pg.press("enter")

    sleep(10)
