import socket
ip = "" # enter ip
port = 1337
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind((ip, port))
s.listen()
while True:
  data, addr = s.accept()
  if data != "":
    print("Connected by ",addr)
    print("PWN !!! on port", port)
    while True:
      
      
      
