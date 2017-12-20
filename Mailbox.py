
import RPi.GPIO as GPIO
import time
import urllib
import smtplib
import sys
import datetime
 
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
 
mail_server   = 'smtp.gmail.com:587'            # Mail Server
mail_account  = ''    # name of mail account
mail_password = ''            # password
addr_sender   = ''    # sender email
addr_receiver = ''    # receiver email
 

def send_mail(title,message):
 
	debug_level = 0 # set to 1 to get more messages
	# Create message container - the correct MIME type is multipart/alternative.
	msg = MIMEMultipart('alternative')
	msg['Subject'] = title
	msg['From'] = addr_sender
	msg['To'] = addr_receiver
 
	# Create the body of the message (a plain-text and an HTML version).
	text = message
 
	html = """\
"""
 
	html += message
	html += """\
   -- LynHop's mailbox was opened
 
"""
	# print html
 
	# Record the MIME types of both parts - text/plain and text/html.
	part1 = MIMEText(text, 'plain')
	part2 = MIMEText(html, 'html')
 
	# Attach parts into message container.
	msg.attach(part1)
	msg.attach(part2)
 
	mailsrv = smtplib.SMTP('smtp.gmail.com' , 587)
        mailsrv.starttls()
	mailsrv.login("FROM", "PW")
	mailsrv.sendmail("FROM", "TO", msg.as_string())
	mailsrv.quit()
	return()
 
	try:
		if debug_level > 0: print "smtplib.SMTP:", mail_server
		mailsrv = smtplib.SMTP(mail_server) # Send the message via local SMTP server.
	except:
		print "Error: unable to send email - smtp server"
		print "Server on ", mail_server, " cannot be reached or service is down"
		return()
 
	try:
		if debug_level > 0: print "mailsrv.login:", mail_account,  mail_password
		mailsrv.login(mail_account,mail_password)
	except:
		print "Error: unable to send email - login failed"
		print "login is not valid - check name and password:",mail_account,mail_password
		return()
 
	try:
		# sendmail function takes 3 arguments: sender's address, recipient's address and message to send - here it is sent as one string.
		if debug_level > 0: print "mailsrv.sendmail:", addr_sender,  addr_receiver
		mailsrv.sendmail(addr_sender, addr_receiver, msg.as_string())
		mailsrv.quit()
		print "Successfully sent email"
	except:
		print "Error: unable to send email - wrong address"
		print "mail address for sender or receiver invalid:",addr_sender,addr_receiver


# Use BCM GPIO references
# instead of physical pin numbers
GPIO.setmode(GPIO.BCM)
 
# Define GPIO to use on Pi
GPIO_PIR = 13
 
print "PIR Module Test (CTRL-C to exit)"
 
# Set pin as input
GPIO.setup(GPIO_PIR,GPIO.IN)      # Echo
 
Current_State  = 0
Previous_State = 0
 
try:
 
  print "Waiting for PIR to settle ..."
 
  # Loop until PIR output is 0
  while GPIO.input(GPIO_PIR)==1:
    Current_State  = 0
 
  print "  Ready"
 
  # Loop until users quits with CTRL-C
  while True :
 
    # Read PIR state
    Current_State = GPIO.input(GPIO_PIR)
 
    if Current_State==1 and Previous_State==0:
      urllib.urlretrieve("http://10.0.0.20/admin?camera=driveway&trigger")
      subject = "Mailbox Opened"
      message = "Mailbox "
      send_mail(subject,message)

      fo = open("/var/www/disk/Mail.txt", "wb")
      fo.write(time.strftime("%d/%m/%Y %I:%M:%S%p"))
      fo.close()

      # PIR is triggered
      print "  Mailbox Opened!"
      # Record previous state
      Previous_State=1
    elif Current_State==0 and Previous_State==1:
      # PIR has returned to ready state
      print "  Ready"

      Previous_State=0
 
    # Wait for 10 milliseconds
    time.sleep(.10)
 
except KeyboardInterrupt:
  print "  Quit"
  # Reset GPIO settings
  GPIO.cleanup()
