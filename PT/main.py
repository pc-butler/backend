from realhttp import *
from time import *
from networking import *

ip = localIP()

url = "https://ehealth-calendar.tk/heatmap/api/view"

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

def main():
	print("IP: " + ip)
	http = RealHTTPClient()
	http.onDone(onHTTPDone)
	http.get(url)
	
	print("Sending Update! ")
	pushUpdate()

	# don't let it finish
	while True:
		sleep(3600)

if __name__ == "__main__":
	main()
	
	
	# switchstate = digitalRead(0)
	# sensordata = '<span>Please connect the included IoT health sensors as instructed by your docotor.</span><h4>Blood Pressure: <span style="color: red">145</span></h4><h4>Heart Rate: <span style="color: orange">72 bpm</span></h4>'
	# if(switchstate == 0):
	# 	switchstate = "OFF"
	# 	response.send("Sensor Status: OFF")
	# else:
	# 	switchstate = "ON"
	# 	response.send("Sensor Status: " + switchstate + "<br>" + sensordata)
	# print("Request for /");
