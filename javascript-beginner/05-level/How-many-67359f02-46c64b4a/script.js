// declare command line arguments
let eersteBoodschappen = process.argv[2];
let tweedeBoodschappen = process.argv[3];
let derdeBoodschappen = process.argv[4];
let vierdeBoodschappen = process.argv[5];
let vijfdeBoodschappen = process.argv[6];
let zesdeBoodschappen = process.argv[7];

let boodschappen = [eersteBoodschappen, tweedeBoodschappen,
    derdeBoodschappen, vierdeBoodschappen, vijfdeBoodschappen, zesdeBoodschappen];
console.log(boodschappen);

// loop and count havermelk
let test = 0;
for (let i = 0; i < boodschappen.length; i++) {
    if (boodschappen[i] == "havermelk") {
        test++;
    }
}

console.log(`Aantal havermelk: ${test}`);