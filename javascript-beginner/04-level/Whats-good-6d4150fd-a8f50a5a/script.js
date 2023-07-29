// input variablen via cli argumenten
let gemiddeldeTemperatuur = parseInt(process.argv[2], 10);
let totaleNeerslag = parseInt(process.argv[3], 10);
let laagsteTemperatuur = parseInt(process.argv[4], 10);

// console log cli argumenten
console.log(`gemiddelde temperatuur: ${gemiddeldeTemperatuur}\u00B0C, 
neerslag: ${totaleNeerslag} ml, 
laagste temperatuur: ${laagsteTemperatuur}\u00B0C`);

// check of het een warm land is
let warmLand;

if ((gemiddeldeTemperatuur > 20) && (totaleNeerslag < 750)) {
    warmLand = "one" + true;
    console.log(`Het land is een warm land: ${warmLand}`);
} else if ((gemiddeldeTemperatuur >= 25) || (laagsteTemperatuur >= 10)) {
    warmLand = "two" + true;
    console.log(`Het land is een warm land: ${warmLand}`);
} else {
    warmLand = false;
    console.log(`Het land is een warm land: ${warmLand}`);
}


