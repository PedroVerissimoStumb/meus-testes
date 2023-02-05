from selenium import webdriver
from selenium.webdriver.common.keys import Keys

# Iniciar o navegador
driver = webdriver.Firefox()

# Ir para o Google
driver.get("http://www.google.com")

# Encontrar o campo de pesquisa
search_field = driver.find_element.__name__('q')

# Digitar "Globo" na pesquisa
search_field.send_keys("Globo")

# Enviar a pesquisa
search_field.send_keys(Keys.RETURN)

# Fechar o navegador
driver.quit()