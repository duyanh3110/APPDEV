# this is version 1 of git example..

------------------------------------------
	Aucostic Sensor using RPi3
------------------------------------------

Table of Content
1. Configuration Instructions
2. Installation Instructions
3. Operating Instructions
4. List of project files
5. Contact information
6. Credit and acknowledgments


1. Configuration Instructions

This project is built in a Rasberry Pi3, with a USB sound card and a microphone.
Ethernet connection is recommended. If an older version of Rasberry Pi is used, 
certain changed might be necessary.

First you have to set USB sound card as default audio device.
Step 1: Boot up Rasberry Pi and aplly the USB sound card.
Step 2: Use "lusb" command to check if your USB sound card is mouted.
Step 3: Run "sudo nano /etc/asound.conf" command and put following content to the file.
	"pcm.!default {
  		type plug
  		slave {
    			pcm "hw:1,0"
  		}
	}
	ctl.!default {
    		type hw
		card 1
	}"
Step 4: Go back home directory. Run "nano .asoundrc" and put the same content to the file
Step 5: Run "alsamixer" to see that USB sound card is the default audio device. You can
adjust the volume of mic and headphone.

Second you need to downgrade the alsa-utils from 1.0.28 to 1.0.25. To do so, we
need to do all steps:
Step 1: Use "sudo nano /etc/apt/sources.list" command and add the last line 
"deb http://mirrordirector.raspbian.org/raspbian/ wheezy main contrib non-free rpi".
Step 2: Run "sudo apt-get update".
Step 3: Run "sudo aptitude versions alsa-utils" to check if version 1.0.25 of 
alsa-util is available.
Step 4: Run "sudo apt-get install alsa-utils=1.0.23-4" to downgrade.
Step 5: Reboot.
Step 6: Run "arecord -r44100 -c1 -f S16_LE -d5 test.wav" to test microphone.
We should see a "test.wav" file in the current folder.
Step 7: Run "aplay test.wav" to check your recording.

3. Operating Instruction
Step 1: Run "make" to make file.
Step 2: Run "./wave.a" and record your sound if you want.
Step 3: Go to "http://www.cc.puv.fi/~e1601142/sound.log" too see the data.

4. List of project files

The project contains following files
--README.md	: this file
--makefile	: the makefile of this project
--wave.c	: the module containing functions about wave processing
--wave.h	: the header of wave.c
--screen.c	: the module containing functions about screen manupulation
--screen.h	: the header of screen.c
--comm-c	: the communication module using libcurl 
--comm.h	: the header file of comm.c
--main.c	: contains main() function
--sound.php	: the server page to receive data
--show.html	: the server page vusualizes data

5. Contact information
Nguyen Duy Anh
Telephone: +358 469540284
Email: duyanh19962012@gmail.com

6. Credits and acknowledgment
This project uses Raspberry Pi 3.
