let nederland = process.argv[2];
let duitsland = process.argv[3];
let frankrijk = process.argv[4];

console.log(`Nederland en Duitsland zijn om hetzelfde bekend: ${nederland == duitsland}`);
console.log(`Nederland en Frankrijk zijn om hetzelfde bekend: ${nederland == frankrijk}`);
console.log(`Frankrijk en Duitsland zijn niet om hetzelfde bekend: ${frankrijk != duitsland}`);
