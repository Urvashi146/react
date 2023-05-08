enum level{
    zero,first,second,third}

    let level1 = level.third;

    console.log(level1);



    // enum initializ

    enum levels{
        zero = 5,
        first,
        second,
        third}
    
        let levels1 = levels.third;
    
        console.log(levels1);

        // fully initialized
        enum levelf{
            zero = 100,
            first = 101,
            second = 102,
            third = 103}
        
            let levelsf = levelf.third;
        
            console.log(levelsf);

            // enum string 
            enum levelstr{
                zero = "zero",
                first = "one",
                second = "two",
                third = "three"}
            
                let levelst = levelstr.third;
            
                console.log(levelst);