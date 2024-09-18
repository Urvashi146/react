import PropTypes from 'prop-types';
import { useState } from 'react';

function TextUtiles(props) {
    const [text, setText] = useState("Hello");
    const [submitted, setSubmitted] = useState(false); // Track if submitted

    const OnChange = (event) => {
        setText(event.target.value);
    };

    const OnCapital = () => {
        setSubmitted(true); // Mark as submitted
        let newText = text.toUpperCase();
        setText(newText);
    };

    return (
        <>
            <h1>{props.title}</h1>
            <div className="container d-flex justify-content-center align-items-center mt-5">
                <div className="card" style={{ width: '18rem' }}>
                    <div className="card-body">
                        <form>
                            <div className="form-group">
                                <label htmlFor="textInput">Enter Text</label>
                                <input
                                    type="text"
                                    className="form-control"
                                    id="textInput"
                                    placeholder="Type here"
                                    value={text}
                                    onChange={OnChange}
                                />
                            </div>
                        </form>
                        <button className="btn btn-primary mt-3" onClick={OnCapital}>
                            Submit
                        </button>
                        {submitted && ( // Conditionally render the <h5> element
                            <h5 className='mt-3 text-primary'>
                                Your Text is ready: {text}
                            </h5>
                        )}








                        
                    </div>
                </div>
            </div>
        </>
    );
}

// Set default prop value 
TextUtiles.defaultProps = {
    title: 'Hello',
};

// Set prop as required
TextUtiles.propTypes = {
    title: PropTypes.any.isRequired,
};

export default TextUtiles;
