from math import sqrt
import urllib2
import serial
import RPi.GPIO as GPIO
import requests
def senddata1(press1):
    urllib2.urlopen("http://vdmask.000webhostapp.com/vdmask/28-03/map1.php?press="+press1).read()
##"http://vdmask.000webhostapp.com/vdmask/28-03/map1.php?press="
    print("")
def getdata():
    r=requests.get("https://api.thingspeak.com/apps/thinghttp/send_request?api_key=X08NHDQ5TZPPGRMT")
    return r.text


while(True):
    str1=getdata()
    if(str1!=""):
        str1=str1.split(">")
        str1=str1[1].split(":")
        str1=str1[:-1]
        print(str1)

        send1=""
        ##t="Biscuit-1 Chips-5 Biscuit-3"
        ##str = list(t.split(" "))
        arr1=["Jim-Jam","Chips-1"]
        arr2=["Himalaya-Lip-Balm","Chips-2"]
        arr3=["Biscuit-3","Chips-3"]
        arr4=["Biscuit-4","Lays"]
        arr5=["Biscuit-5","Cipra"]
        r1=(1,2)
        r2=(6,4)
        r3=(3,5)
        r4=(8,9)
        r5=(4,3)
        rt=[r1,r2,r3,r4,r5]
        incl=[0,0,0,0,0]
        itemname=[[],[],[],[],[]]
        for i in range(len(str1)):
            if(str1[i] in arr1):
                itemname[0].append(str1[i])
                incl[0]=1
            if(str1[i] in arr2):
                itemname[1].append(str1[i])
                incl[1]=1
            if(str1[i] in arr3):
                itemname[2].append(str1[i])
                incl[2]=1
            if(str1[i] in arr4):
                itemname[3].append(str1[i])
                incl[3]=1
            if(str1[i] in arr5):
                itemname[4].append(str1[i])
                incl[4]=1
        x,y=0,0
        dist=[]
        for i in range(5):
            if(incl[i]):
                dist.append([sqrt((rt[i][0]-x)**2+(rt[i][1]-y)**2),i+1])
        dist.sort()
        #print(dist[0][1])
        incl[dist[0][1]-1]=0
        x1=str(x)
        y1=str(y)
        t1=x1+":"+y1+":"+"start"+":"
        send1+=t1
        print(x,y)
        while(len(dist)!=0):
        ##    print rt[0][0],rt[0][1]
            nodeno=dist[0][1]-1
            x,y=rt[nodeno][0],rt[nodeno][1]
            dist1=[]
            for i in range(5):
                if(incl[i]):
                    dist1.append([sqrt((rt[i][0]-x)**2+(rt[i][1]-y)**2),i+1])
            dist1.sort()
            dist=dist1
            if(len(dist)!=0):
                incl[dist[0][1]-1]=0
            itemnamee=""
            print(x,y)
            for k1 in range(len(itemname[nodeno])):
                itemnamee=itemname[nodeno][k1]
        ##            print itemnamee,str(x),str(y)
                send1+=str(x)+":"+str(y)+":"+itemnamee+":"
            
        send1+="z"
        print(send1)
        senddata1(send1)
        print("sent")
