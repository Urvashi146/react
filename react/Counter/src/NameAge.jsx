import { useState } from "react";

function NameAge() {
    const [name, setName] = useState('Name');
    const [age, setAge] = useState('Age please......');

   

    return (
        <div className="input-container d-flex flex-column justify-center align-center">
            <h4 className="header"><b>Enter your name here:</b></h4>
            <input
                type="text"
                value={name}
                onChange={(e) => setName(e.target.value)}
            />
            <h4 className="header"><b>Enter your age here:</b></h4>
            <input
                type="text"
                value={age}
                onChange={(e) => setAge(e.target.value)}
            />
          
                <h1>Hello {name}. You are {age} years old</h1>
            
        </div>
    );
}

export default NameAge;
