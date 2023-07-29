let pincode = parseInt(process.argv[2], 10);
let functiePersoon = process.argv[3];
let dagWeek = parseInt(process.argv[4], 10);

if (pincode === 123752) {
    if (functiePersoon == "bestuur" || functiePersoon == "administratief medewerker") {
        console.log(`Toegang verleend`);
    } else {
        console.log(`Verkeerde pincode of je hebt niet de juiste rechten`);
    }
} else if (dagWeek < 5) {
    console.log(`Verkeerde pincode of je hebt niet de juiste rechten`);
} else {
    console.log(`Veiligheidsdiensten worden ingeschakeld`);
}
