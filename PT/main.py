from realhttp import *
from time import *
from networking import *
from gpio import *

################################
# Start with switch turned OFF #
################################

ip = localIP() # Asks Packet Tracer for the devices current IP address

#URL to get heatmap data
url = "https://ehealth-calendar.tk/heatmap/api/view"

#API endpoint for *new* event
newAPI = "https://ehealth-calendar.tk/heatmap/api/new/Pill%20Taken/"

#Used to track state to only update api once the switch is turned on
last = 5 # Setting default value. Overwrite with actual value later.

def pushUpdate():
	global newAPI
	updateURL = newAPI + ip + "/" # Form the URL add a new event
	http = RealHTTPClient() # Construct HTTP client
	http.onDone(pushDone) # Tell the HTTP client what to do after
	http.get(updateURL) # Send the Request
	
def pushDone(status, data):
	print("status: " + str(status))
	print("data: " + data)

def checkState():
	global last # Get global variable

	pinMode(0, IN)
	pinMode(1, OUT)

	if last is 5:
		last = digitalRead(0) # Check for the arbitrary default of 5 and sets it to the current reading

	currentState = digitalRead(0) # Read value from switch
	if (currentState == last):
		print ("State has not changed")
	else:
		print("State changed. Was {0} now it is {1}".format(last,currentState))
		if(currentState > last): #Checks if the new value is larger which means the switch was turned off
			print("=== Start ===")
			print("Turned switch ON - Pushing update")
			pushUpdate() # This function send the acutal API request
			sleep(3) # Make sure the API has time to respond
			print("=== End ===")
		else:
			print("Turned switch OFF")
	last = currentState # Current state is now old. 


def main():
	print("IP: " + ip) # Prints current IP (in packet tracer)

	# don't let it finish
	while True:
		print("Sleeping for 3 seconds")
		sleep(3)
		checkState()

if __name__ == "__main__":
	main()
	
