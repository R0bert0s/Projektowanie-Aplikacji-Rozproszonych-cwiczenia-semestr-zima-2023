import xmlrpc.client


proxy = xmlrpc.client.ServerProxy("http://localhost:8000/")

r1 = proxy.losowa_liczba(0, 105)
print("Losowa liczba z przedziału:", r1)
r2 = proxy.losowe_imie()
print("Losowe imię:", r2)
r3 = proxy.losowa_data()
print("Losowa data:", r3)
r4 = proxy.losowy_przedmiot()
print("Losowy przedmiot:", r4)
r5 = proxy.losowy_kolor()
print("Losowy kolor:", r5)
r6 = proxy.losowa_ulica()
print("Losowa ulica:", r6)
r7 = proxy.losowa_godzina()
print("Losowa godzina:", r7)


input('Naciśnij enter by wyjść')
