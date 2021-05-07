from realhttp import *
from time import *
from networking import *
from gpio import *

# Start with switch turned OFF

ip = localIP()
url = "https://ehealth-calendar.tk/heatmap/api/view"
last = 5
#Used to track state to only update api once per switch being flipped


def onHTTPDone(status, data):
	print("status: " + str(status))
	print("data: " + data)

def pushUpdate():
	updateURL = "https://ehealth-calendar.tk/heatmap/api/new/Pill%20Taken/" + ip + "/"
	http = RealHTTPClient()
	http.onDone(pushDone)
	http.get(updateURL)
	
def pushDone(status, data):
	print("status: " + str(status))
	print("data: " + data)

def checkState():
	global last

	pinMode(0, IN)
	pinMode(1, OUT)

	if last is 5:
		last = digitalRead(0)

	currentState = digitalRead(0)
	if (currentState == last):
		print ("State has not changed")
	else:
		print("State changed. Curently is {0} now it is {1}".format(last,currentState))
	last = currentState


def main():
	print("IP: " + ip)
	#print("Sending Update! ")
	#pushUpdate()

	# don't let it finish
	while True:
		print("Sleeping for 3 seconds")
		sleep(3)
		checkState()

if __name__ == "__main__":
	main()
	
