import { useState } from 'react';
import './basic.css'; // Import the CSS file

function Myinput() {
    const [text, setText] = useState('Urvashi');

    const finaltext = (e) => {
        setText(e.target.value);
    };

    return (
        
        <div className="input-container d-flex flex-column justify-center align-center">
            <h1>Text field (string)</h1>
            <input type="text" value={text} onChange={finaltext}></input>
            <p>You typed: {text}</p>
            <button onClick={() => { setText('Urvashi') }} className="input-button">
                Reset
            </button>
        </div>
    );
}

export default Myinput;
