import pyttsx3
engine = pyttsx3.init()

file = open("AllAnswers.txt","r")
str = file.read()
file.close()

engine.save_to_file(text=str, filename='AppliedPPR1.mp3')
engine.runAndWait()
