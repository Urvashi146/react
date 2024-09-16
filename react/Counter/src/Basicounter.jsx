import { useState } from "react";
import './basic.css';  // Import the CSS file

function Basicounter() {
    let [count, Setcount] = useState(1);

    function Count() {
        Setcount(count + 1);
    }

    return (
        <div className="container d-flex flex-column justify-center align-center">
            <h1 className="header">This is Counter System.</h1>
            <h2 className="header">Click to increase the counter</h2>
            <h3 className="counter">Counter = {count}</h3>
            <button className="button" onClick={Count}>
                Click Me
            </button>
        </div>
    );
}

export default Basicounter;
