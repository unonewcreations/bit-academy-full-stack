let bedrag = parseInt(process.argv[2], 10);
let dag = parseInt(process.argv[3], 10);

let totaalBedrag;
switch (dag) {
    case 1:
        totaalBedrag = bedrag * (1 - 2 / 100);
        console.log(`Totaalbedrag is: ${totaalBedrag}`);
        break;
    case 2:
        totaalBedrag = bedrag * (1 - 3 / 100);
        console.log(`Totaalbedrag is: ${totaalBedrag}`);
        break;
    case 3:
        totaalBedrag = bedrag * (1 - 4 / 100);
        console.log(`Totaalbedrag is: ${totaalBedrag}`);
        break;
    case 4:
        totaalBedrag = bedrag * (1 - 0.5 / 100);
        console.log(`Totaalbedrag is: ${totaalBedrag}`);
        break;
    case 5:
        totaalBedrag = bedrag * (1 - 1.5 / 100);
        console.log(`Totaalbedrag is: ${totaalBedrag}`);
        break;
    case 6:
        totaalBedrag = bedrag * (1 - 5 / 100);
        console.log(`Totaalbedrag is: ${totaalBedrag}`);
        break;
    case 0:
    default:
        console.log(`Totaalbedrag is ${bedrag}`);
}