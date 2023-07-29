// Cast de command-line argumenten naar integers.
let aantalInwoners = parseInt(process.argv[2], 10) * 1000;

// Print de uitkomst van de gevraagde vergelijkingen.
if (aantalInwoners > 10000000) {
    console.log(`Mega stad`);
} else if (aantalInwoners > 25000) {
    console.log(`Stad`);
} else {
    console.log(`Dorp`);
}

