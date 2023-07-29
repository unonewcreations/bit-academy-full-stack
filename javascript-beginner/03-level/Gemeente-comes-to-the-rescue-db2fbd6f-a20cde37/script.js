let totaal = parseInt(process.argv[2], 10);
let remainder = parseInt(process.argv[2], 10) % 3;

console.log(`In totaal is er ${totaal} miljoen uitgegeven.
\nDe stad betaalt ${remainder} miljoen.
\nDe gemeente betaalt ${totaal - remainder} miljoen.`);
