let aantalPogingen = parseInt(process.argv[2], 10);
// input command line arguments
let pincode = parseInt(process.argv[3], 10);
let functie = process.argv[4];
let dag = parseInt(process.argv[5], 10);
let uren = parseInt(process.argv[6], 10);

// print input to console
console.log(`#fouten: ${aantalPogingen}, pin: ${pincode}, functie: ${functie}, dag: ${dag}, tijd: ${uren}`);
let werktijd = ((dag >= 0 && dag < 5) && (uren >= 9 && uren <= 17));

// check logic for safe
if (aantalPogingen < 5) {
    if (pincode == 123752) {
        if (functie == "bestuur" || (functie == "administratief medewerker" && werktijd == true)) {
            console.log(`kluis opent`);
            if (functie != "bestuur") {
                console.log(`sms naar bestuur`);
            }
        } else if (functie != "administratief medewerker" && werktijd == false) {
            console.log(`alarm gaat af`);
        } else {
            console.log(`stil alarm gaat af`);
        }
    } else {
        console.log(`verkeerde pincode`);
    }
} else {
    console.log(`kluis is geblokkeerd`);
}
