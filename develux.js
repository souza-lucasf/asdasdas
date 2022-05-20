// export function hire(dev: Developer) {
    const requirements = s => s === 'Angular' || s === 'NodeJS';

    const isQualified = dev.skills.some(requirements);

    if(isQualified) {
        //Add Dev to team
        this.team.push({
            developer: dev,
            startingSalary: 2000,
            location: 'luxembourg',
            contractType: 'Permanent',
        });
    }

// }