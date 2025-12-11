<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Komunikator z botami</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
    font-family: Arial, sans-serif;
    background: #0f0f0f;
    color: white;
    height: 100vh;
    display: grid;
    grid-template-columns: 1fr 2fr;
    grid-template-rows: auto 1fr auto;
    gap: 10px;
    padding: 10px;
}

.boczny-panel {
    grid-row: 1 / span 3;
    background: #1a1a1a;
    border-radius: 10px;
    padding: 15px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.boczny-panel h2 {
    text-align: center;
    color: #dcdcdc;
}

.przycisk-bota {
    padding: 12px;
    border-radius: 8px;
    background: #333;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: 0.2s;
}
.przycisk-bota:hover { background: #555; }

.kontener-czatu {
    grid-column: 2;
    grid-row: 1 / span 3;
    background: rgba(20,20,20,0.95);
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    padding: 15px;
}

.naglowek {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: #dcdcdc;
    margin-bottom: 10px;
}

.wiadomosci {
    flex: 1;
    overflow-y: auto;
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.wiadomosc {
    padding: 10px;
    border-radius: 10px;
    max-width: 70%;
}

.uzytkownik { align-self: flex-end; background: #4169e1; }
.bot { align-self: flex-start; background: #2c2c2c; }

.pole-wpisywania {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.pole-wpisywania input {
    flex: 1;
    padding: 12px;
    border-radius: 8px;
    border: none;
    background: #1a1a1a;
    color: white;
}

.pole-wpisywania button {
    padding: 12px 18px;
    border-radius: 8px;
    border: none;
    background: #4169e1;
    color: white;
    cursor: pointer;
    font-weight: bold;
}
.pole-wpisywania button:hover { background: #3557be; }
</style>
</head>
<body>

<div class="boczny-panel">
    <h2>Wybierz bota</h2>
    <button class="przycisk-bota" onclick="wybierzBota('Nigghtmare')">Nigghtmare</button>
    <button class="przycisk-bota" onclick="wybierzBota('Lew208')">Lew208</button>
    <button class="przycisk-bota" onclick="wybierzBota('Neutralo')">Neutralo</button>
</div>

<div class="kontener-czatu">
    <div class="naglowek">Komunikator</div>
    <div class="wiadomosci" id="wiadomosci"></div>
    <div class="pole-wpisywania">
        <input type="text" id="poleTekstowe" placeholder="Napisz wiadomość...">
        <button onclick="wyslijWiadomosc()">Wyślij</button>
    </div>
</div>

<script>
let wybranyBot = 'Nightmare';

function wybierzBota(nazwaBota) {
    wybranyBot = nazwaBota;
    dodajWiadomosc(`=== Rozmowa z ${nazwaBota} ===`, 'bot');
}

const boty = {
    Nigghtmare: ["Nie mam na to nastroju.","Już znowu? No świetnie...","Możesz nie przesadzać?",
        "Nie chce mi się dziś gadać.","Hmm, wcale mnie to nie cieszy.","Tylko nie to...",
        "Nie sądzę, żeby to było dobre.","Wszystko idzie źle.","To bez sensu.","Nie wiem, po co to mówisz."],
    Lew208: ["Super! Jak leci?","Haha, brzmi świetnie!","Ale mega! Opowiadaj dalej!",
        "Uwielbiam takie wiadomości!","Cudownie! Masz ochotę na rozmowę?",
        "Nie mogę się doczekać Twojej historii!","To jest fantastyczne!","Świetny pomysł!",
        "Opowiedz mi coś więcej.","Fajnie, że napisałeś."],
    Neutralo: ["Rozumiem.","Okej...","Dobrze, kontynuuj.","Zapisano do pamięci.","Hmm, ciekawe.",
        "Tak, przyjąłem do wiadomości.","Rozumiem Twój punkt widzenia.","Tak jest.","W porządku.","Przyjąłem do wiadomości."]
};

function dodajWiadomosc(tekst, typ) {
    const wiadomoscDiv = document.createElement('div');
    wiadomoscDiv.className = `wiadomosc ${typ}`;
    wiadomoscDiv.textContent = tekst;
    document.getElementById('wiadomosci').appendChild(wiadomoscDiv);
    document.getElementById('wiadomosci').scrollTop = wiadomosci.scrollHeight;
}

function wyslijWiadomosc() {
    const pole = document.getElementById('poleTekstowe');
    const tekst = pole.value.trim();
    if (tekst === '') return;
    dodajWiadomosc(tekst, 'uzytkownik');
    pole.value = '';

    setTimeout(() => {
        const odpowiedzi = boty[wybranyBot];
        const odpowiedz = odpowiedzi[Math.floor(Math.random() * odpowiedzi.length)];
        dodajWiadomosc(`${wybranyBot}: ${odpowiedz}`, 'bot');
    }, 500);
}
</script>

</body>
</html>