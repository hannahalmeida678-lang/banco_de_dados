import requests
cep = input("digite seu CEP: ")
url = f"https://viacep.com.br/ws/{cep}/json/"

dados_Brutos = requests.get(url) 
dados_refinados = dados_Brutos.json()

# print (f"vc mora na  {dados_refinados["logradouro"]}. No bairro {dados_refinados["bairro"]}")
