Nie wiem czy do końca zrozumiałem przekaz, ale...

Zrobiłem na szybko pobieranie danych, pozostale metody są wyrzucone z kontrolera i dodany na szybko Handler. 

Zalogowany użytkownik (passport token) może pobrać aktualny equipment (api/equipments/), przykładowy wynik:

{
    "data": [
        {
            "type": "chest",
            "id": 3,
            "name": "Chest-recusandae",
            "price": 76.98,
            "image": "v4f1k.jpg"
        },
        {
            "type": "chest",
            "id": 4,
            "name": "Chest-reiciendis",
            "price": 78.65,
            "image": "p1m2r.jpg"
        },
        {
            "type": "chest",
            "id": 2,
            "name": "Chest-ipsum",
            "price": 71.37,
            "image": "q1p0p.jpg"
        },
        {
            "type": "reward",
            "id": 2,
            "name": "Reward-maxime",
            "price": 37.23,
            "image": "b7c8v.jpg",
            "code": "code-998ays",
            "status": 0
        },
        {
            "type": "reward",
            "id": 6,
            "name": "Reward-omnis",
            "price": 61.14,
            "image": "j5n3i.jpg",
            "code": "code-130vnb",
            "status": 0
        },
        {
            "type": "rune",
            "id": 9,
            "name": "Runequi",
            "price": 39.53,
            "image": "s4u4f.jpg",
            "bonus": "laudantium"
        },
        {
            "type": "rune",
            "id": 7,
            "name": "Runeexplicabo",
            "price": 67.1,
            "image": "c0j7x.jpg",
            "bonus": "ab"
        },
        {
            "type": "rune",
            "id": 4,
            "name": "Runeillo",
            "price": 89.14,
            "image": "v7s2l.jpg",
            "bonus": "amet"
        }
    ]
}

możne pobrać po typie (api/equipments/?type=runes)
Tutaj zrobiony na szybko if z requesta, trzeba by było zrobić np. traity

{
    "data": [
        {
            "type": "rune",
            "id": 9,
            "name": "Runequi",
            "price": 39.53,
            "image": "s4u4f.jpg",
            "bonus": "laudantium"
        },
        {
            "type": "rune",
            "id": 7,
            "name": "Runeexplicabo",
            "price": 67.1,
            "image": "c0j7x.jpg",
            "bonus": "ab"
        },
        {
            "type": "rune",
            "id": 4,
            "name": "Runeillo",
            "price": 89.14,
            "image": "v7s2l.jpg",
            "bonus": "amet"
        }
    ]
}

- moze pobrać listę rzeczy, które może kupić (czyli wszystkie) (api/equipments/?type=toBuy), 
zakładając, że może kupić dwa razy tą samą rzecz (?)






