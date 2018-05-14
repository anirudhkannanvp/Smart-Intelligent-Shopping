import os
import threading
import urllib2

import requests

import serial
import RPi.GPIO as GPIO
from time import sleep
GPIO.setmode(GPIO.BOARD)
GPIO.setup(23,GPIO.OUT)
pwm = GPIO.PWM(23,50) #50HZ
GPIO.setup(24,GPIO.OUT)
pwm1 = GPIO.PWM(24,50)
GPIO.setup(15,GPIO.OUT)
pwm2 = GPIO.PWM(15,50) #50HZ
pwm.start(0)
pwm1.start(0)
pwm2.start(0)

def SetAngle(angle,angle1,nom):
	duty = (angle/18)+2
	duty1 = (angle1/18)+2
	if(nom==1):
            GPIO.output(23,True)
            pwm.ChangeDutyCycle(duty)
            print "noooo1"
            GPIO.output(24,True)
            pwm1.ChangeDutyCycle(duty1)
            print "noooo2"
            sleep(1)
            GPIO.output(23,False)
            pwm.ChangeDutyCycle(0)
            print "noooo3"
            GPIO.output(24,False)
            pwm1.ChangeDutyCycle(0)
            print "noooo4"
        elif(nom==2):
            GPIO.output(15,True)
            pwm2.ChangeDutyCycle(duty)
            sleep(1)
            GPIO.output(15,False)
            pwm2.ChangeDutyCycle(0)
            print "noooomotor3"
card1 = [1243114,7629170,7269332,7234574]
def read_rfid():
	ser = serial.Serial("/dev/ttyS0",9600,timeout=10000)
	data = ser.read(12)
	ser.close()
	return data

"""def sendDataToServer1():
    press=0
    card = [7269332,7234574]
    while(press<2):
        print card[press]
        urllib2.urlopen("http://vdmask.000webhostapp.com/vdmask/28-03/add_data2.php?pr="+str(card[press])).read()
        press=press+1
##        time.sleep(2000)"""


def sendDataToServer(press):
    urllib2.urlopen("http://vdmask.000webhostapp.com/vdmask/28-03/add_data1.php?pr="+str(press)).read()
    print("sent")
    ##        time.sleep(2000)

card=[1243114]
pid=["0"]
while(True):
    id = read_rfid()
    id_sub = int(id[1:])
    print id_sub
    if(id_sub in card and id_sub != " "):
        sendDataToServer(id_sub)
    while(True):
        y =requests.get('https://api.thingspeak.com/apps/thinghttp/send_request?api_key=WUTX0AY4O96Z5VFH')
        print y.text
        y1=y.text
        t=y1
        if(t not in pid):        
            SetAngle(90,0,1)
            sleep(5)
            SetAngle(0,90,1)
            print "on"
            pid.append(y1)
        #r =requests.get('https://api.thingspeak.com/apps/thinghttp/send_request?api_key=WHQ1YVZTHSPXOOVM')
        r =requests.get('https://api.thingspeak.com/apps/thinghttp/send_request?api_key=WUTX0AY4O96Z5VFH')
        print r.text
        r1=r.text
        if(int(r1)==0):
            SetAngle(90,0,2)
            sleep(10)
            SetAngle(0,90,2)
            print "onmotor3"
            pid=[]
            break
    
pwm.stop()
pwm1.stop()
pwm2.stop()
GPIO.cleanup()


