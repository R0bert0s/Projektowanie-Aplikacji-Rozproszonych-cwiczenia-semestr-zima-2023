from xmlrpc.server import SimpleXMLRPCServer
import random
from datetime import datetime, timedelta

def losowa_liczba(minimum, maximum):
    return random.randint(minimum, maximum)

def losowe_imie():
    imiona = ["Anna", "Jan", "Maria", "Piotr", "Katarzyna", "Tomasz", "Małgorzata", "Paweł", "Agnieszka", "Krzysztof", "Barbara", "Andrzej", "Ewa", "Łukasz", "Magdalena", "Michał", "Justyna", "Jacek", "Kinga", "Marcin"]
    return random.choice(imiona)

def losowa_data():
    start_date = datetime(1970, 1, 1)  
    end_date = datetime.now()  
    random_days = random.randint(0, (end_date - start_date).days)  
    return (start_date + timedelta(days=random_days)).strftime("%m/%d/%Y")  

def losowy_przedmiot():
    przedmioty = ["ołówek", "zeszyt", "długopis", "kredki", "zeszyt", "gumka", "linijka", "klej", "flamastry", "notes", "temperówka"]
    return random.choice(przedmioty)

def losowy_kolor():
    kolory = ["czerwony", "zielony", "niebieski", "żółty", "pomarańczowy", "fioletowy", "różowy", "biały", "czarny", "brązowy"]
    return random.choice(kolory)

def losowa_ulica():
    pierwsze_czesci = ["Słoneczna", "Długa", "Akacjowa", "Brzozowa", "Kwiatowa", "Wesoła", "Polna", "Żurawia", "Klonowa", "Lipowa"]
    drugie_czesci = ["Aleja", "Ulica", "Plac", "Skwer", "Rondo", "Ścieżka", "Droga", "Trakt", "Osiedle", "Wzgórze"]
    return random.choice(pierwsze_czesci) + " " + random.choice(drugie_czesci)

def losowa_godzina():
    godzina = random.randint(0, 23)  
    minuta = random.randint(0, 59)    
    return "{:02d}:{:02d}".format(godzina, minuta)


server = SimpleXMLRPCServer(("localhost", 8000))
print("Server is running...")

server.register_function(losowa_liczba, "losowa_liczba")
server.register_function(losowe_imie, "losowe_imie")
server.register_function(losowa_data, "losowa_data")
server.register_function(losowy_przedmiot, "losowy_przedmiot")
server.register_function(losowy_kolor, "losowy_kolor")
server.register_function(losowa_ulica, "losowa_ulica")
server.register_function(losowa_godzina, "losowa_godzina")

server.serve_forever()
