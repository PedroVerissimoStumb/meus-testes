import requests
import bs4

url = 'https://dg-tattoo.netlify.app/'

headers = {
    "user-agent": 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36'
}

cookies = {
    
}

result = requests.get(url, headers=headers, cookies=cookies)

html = bs4.BeautifulSoup(result.content, 'html.parser')

price_element = html.find(class_="text")

print(price_element)