// command-line argumenten
let diesel = process.argv[2];
let afvalscheiding = process.argv[3];
let natuurgebied = parseInt(process.argv[4], 10);

// neem command-line arguments en plus variabele wanneer waar
let dieselSter = 0;
if (diesel == "ja") {
    dieselSter++;
}

let afvalSter = 0;
if (afvalscheiding == "ja") {
    afvalSter++;
}

let natuurSter = 0;
if (natuurgebied > 25) {
    natuurSter++;
}

// tel op behaalde sterren
let behaaldeSterren = dieselSter + afvalSter + natuurSter;
// verschil behaalde sterren
let sterrenNodig = 3 - behaaldeSterren;

// // print de uitkomst van de gevraagde vergelijkingen.
if (behaaldeSterren === 3) {
    console.log(`Het is een milieuvriendelijke stad`);
} else if (behaaldeSterren === 2) {
    console.log(`De stad heeft nog ${sterrenNodig} ster(ren) nodig om milieuvriendelijk te zijn`);
} else if (behaaldeSterren === 1) {
    console.log(`De stad heeft nog ${sterrenNodig} ster(ren) nodig om milieuvriendelijk te zijn`);
} else {
    console.log(`De stad moet omgevormd worden`);
}