import pyautogui as pg
from time import sleep

sleep(2)

file = open("vocabs100Words.txt","r")
data = file.read().split("\n")
file.close()


for line in data:
    if(">" in line):
        pg.typewrite(line.replace("> ", ""))
        pg.typewrite(", ")



# Absent, Accurate, Advice, Afraid, Agree, Amazing, Annoy, Apology, Arrive, Attention, Avoid, Awkward, Balance, Believe, Benefit, Blame, Brave, Cancel, Careful, Challenge, Change, Choose, Comfortable, Complete, Confident, Consider, Convenient, Curious, Dangerous, Decide, Delicious, Demand, Describe, Determine, Difficult, Disagree, Disappoint, Discover, Discuss, Distract, Doubt, Effort, Embarrass, Encourage, Energy, Enjoy, Enough, Essential, Example, Excited, Experience, Explore, Explain, Familiar, Famous, Fantastic, Favor, Focus, Forget, Forgive, Friendly, Frustrate, Generous, Gentle, Genuine, Grateful, Habit, Happy, Honest, Hope, Hungry, Important, Improve, Include, Increase, Inspire, Intend, Interest, Interrupt, Invite, Involve, Knowledge, Lazy, Listen, Lucky, Manage, Mistake, Notice, Opportunity, Ordinary, Organize, Patient, Peaceful, Popular, Positive, Possible, Prepare, Promise, Protect, 


# When you *arrive* at an important event, it's *essential* to stay *focused* and *confident*. Even if you feel *awkward* or *afraid*, it's *important* to *believe* in yourself and not let *doubt* or *distraction* take over. *Careful* preparation and *accurate* planning can *increase* your chances of success. If you make a *mistake*, *avoid* placing *blame* on others, and instead, use it as a *benefit* to learn and *improve*. *Consider* every *challenge* as an *opportunity* to grow and *explore* new *experience*. Always be *grateful* for *genuine* *advice* and *encouragement* from those who *care* about you. *Remember*, it's *okay* to feel *curious* and *excited* about new ventures, but be *careful* not to *overwhelm* yourself. *Manage* your time wisely, stay *positive*, and be *patient* in your journey. *Choose* to stay *brave* and *inspired*, and always *intend* to make the most of every *opportunity* that comes your way.


# ╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩╦╩
# Once in a peaceful village, there was a *brave* and *curious* young girl named Lily. She was known for her *genuine* heart and *positive* attitude, always ready to *explore* the unknown. One day, she received *advice* from an old *famous* traveler who told her about a hidden forest that was said to be both *dangerous* and *amazing*.

# Though *afraid* at first, Lily decided to take on the *challenge*. She *managed* to *prepare* herself carefully, packing *essential* supplies and ensuring she was *familiar* with the area. As she began her journey, she noticed how *ordinary* things seemed at first, but soon she discovered the *forest* was full of surprises. 

# Lily felt an *awkward* sense of *doubt* when she first entered the forest, but she remembered the traveler's *advice* and pressed on. She had to *balance* her excitement with *caution*, *avoiding* the *dangerous* traps and *distracting* noises that could lead her astray. Along the way, she encountered a *hungry* fox, looking lost and *disappointed*. 

# Feeling *genuine* sympathy, Lily offered the fox some of her *delicious* food. The fox, in turn, led her to a hidden path that *involved* climbing a steep hill. It was a *difficult* climb, but Lily's determination was *enough* to keep her going. She *focused* on each step, *choosing* to be *careful* and *confident*.

# At the top of the hill, Lily found a *fantastic* view, one that was so *amazing* it left her *excited* and *grateful* for the journey. She *considered* how *lucky* she was to have had this *experience* and felt the *energy* of the place fill her with *hope*. She *believed* she had *discovered* something truly special.

# As Lily sat there, she thought about how *important* it was to *listen* to the world around her and to be open to change. She knew that *interrupting* her peaceful moment would be *awkward*, but she also understood that she needed to *describe* her experience to the villagers when she returned.

# Before she left, she made a *promise* to the forest and the fox that she would *protect* the beauty of the place and not let it be *destroyed* by those who might not appreciate it. As she *organized* her thoughts, she realized that her journey was not just about *exploration*, but also about *self-discovery*.

# Upon her return to the village, Lily was met with *interest* and *admiration*. She was asked to *explain* her journey in detail, and although it was *difficult* to put into words, she felt *inspired* to share what she had learned. She spoke about the *important* things she had encountered and how the journey had helped her to *improve* as a person.

# Lily's story *inspired* many, and soon, the villagers began to see the value in being both *curious* and *careful*, in *challenging* themselves, and in finding *balance* in life. They also learned to *forgive* themselves for their *mistakes* and to *avoid* blaming others, instead *choosing* to be *positive* and *genuine* in their actions.

# From that day forward, Lily was not just seen as a *brave* adventurer, but also as a *wise* and *kind* leader who had the *knowledge* and *experience* to guide others. She never *forgot* the *favor* the fox did for her and always kept the *balance* of nature in her heart. The villagers, too, began to *organize* their lives around these lessons, and their village flourished with *careful* *consideration* and *genuine* *kindness*.



