// command-line argumenten
let rating = parseInt(process.argv[2], 10);
let natuur = parseInt(process.argv[3], 10);
let autowegdek = parseInt(process.argv[4], 10);
console.log(`rating: ${rating} sterren, natuurgebied: ${natuur}%, autowegdek: ${autowegdek} km`);

// print de uitkomst van de gevraagde vergelijkingen.
if (rating >= 3) {
    if (natuur > 25) {
        console.log(`belastingkorting voor de inwoners`);
    } else {
        console.log(`subsidie voor aanleg van meer natuur`);
    }
} else if (autowegdek > 200) {
    console.log(`subsidie voor ombouwen autoweg naar fietsstraat`);
} else {
    console.log(`subsidie voor afvalinzameling`);
}