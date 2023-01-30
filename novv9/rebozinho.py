import pyautogui

pyautogui.alert('Não mexa no computador enquanto seu programa mexe no seu dispositivo')
pyautogui.PAUSE = 0.9

pyautogui.press('winleft')
pyautogui.write('chrome')
pyautogui.press('enter')
pyautogui.moveTo(437, 462, duration=1)
pyautogui.press('tab')
pyautogui.press('enter')
pyautogui.write('https://web.whatsapp.com/')
pyautogui.press('enter')